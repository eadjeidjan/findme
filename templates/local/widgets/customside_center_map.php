<?php
$tree_field_id = 79;
$CI = & get_instance();
$values = array();
$CI->load->model('treefield_m');
$CI->load->model('file_m');
$check_option = $CI->treefield_m->get_lang(NULL, FALSE, $lang_id);
foreach ($check_option as $key => $value) {
    if($value->field_id==$tree_field_id){
        $icon = 'assets/img/markers/piazza.png';
        // Thumbnail and big image
        if(!empty($value->image_filename))
        {
            $files_r = $CI->file_m->get_by(array('repository_id' => $value->repository_id),FALSE, 5,'id ASC');
            // check second image
            if($files_r and isset($files_r[1]) and file_exists(FCPATH.'files/thumbnail/'.$files_r[1]->filename)) {
                $icon = base_url('files/'.$files_r[1]->filename);
            }
        }
        $values[$value->value_path]= $icon;
    }
}
?>

<div id="main-map" class="map">
</div>
<script>

    var markers = new Array();
    var map;
    var marker_clusterer ;
    $(document).ready(function(){
        // option
        if($('#main-map').length){
        var myLocationEnabled = true;
        var style_map = mapStyle;
        var scrollwheelEnabled = false;

        var mapOptions = {
            <?php if(config_item('custom_map_center') === FALSE): ?>
            center: new google.maps.LatLng({all_estates_center}),
            <?php else: ?>
            center: new google.maps.LatLng(<?php echo config_item('custom_map_center'); ?>),
            <?php endif; ?>
            zoom: {settings_zoom},
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: scrollwheelEnabled,
            mapTypeControlOptions: {
              mapTypeIds: c_mapTypeIds,
              position: google.maps.ControlPosition.TOP_RIGHT
            },
            styles: mapStyle
        };

                map = new google.maps.Map(document.getElementById('main-map'), mapOptions);

                <?php foreach($all_estates as $item): ?>
                    <?php
                        if(!isset($item['gps']))break;
                        if(empty($item['gps']))continue;
                    ?>
                                
                    <?php 
                        $item['icon'] = '';
                        if(!empty($item['option_79']) && isset($values[$item['option_79']])){
                            $item['icon'] = $values[$item['option_79']];
                        }
                    ?>

                var myLatlng = new google.maps.LatLng(<?php _che($item['gps']); ?>);
                var callback = {
                                'click': function(map, e){
                                    var activemarker = e.activemarker;
                                    jQuery.each(markers, function(){
                                        this.activemarker = false;
                                    })

                                    sw_infoBox.close();
                                    if(activemarker) {
                                        e.activemarker = false;
                                        return true;
                                    }
                                    
                                    var boxOptions = {
                                        content: "<?php echo _generate_popup($item, true); ?>",
                                        disableAutoPan: false,
                                        alignBottom: true,
                                        maxWidth: 0,
                                        pixelOffset: new google.maps.Size(-85, -25),
                                        zIndex: null,
                                        closeBoxMargin: "0",
                                        closeBoxURL: "",
                                        infoBoxClearance: new google.maps.Size(1, 1),
                                        isHidden: false,
                                        pane: "floatPane",
                                        enableEventPropagation: false,
                                        closeBoxURL: "assets/img/close.png"
                                    };
                            
                                    sw_infoBox.setOptions( boxOptions);
                                    sw_infoBox.open( map, e );

                                    e.activemarker = true;
                                }
                        };
                var marker_inner ='<img src="<?php _che($item['icon'])?>">';
                var marker = new CustomMarker(myLatlng,map,marker_inner,callback);
                markers.push(marker);


                <?php endforeach; ?>

                marker_clusterer = new MarkerClusterer(map, markers, clusterConfig);

        if(mapSearchbox){   
            init_map_searchbox(map);
        }  

        if(myLocationEnabled){
            var controlDiv = document.createElement('div');
            controlDiv.index = 1;
            map.controls[google.maps.ControlPosition.RIGHT_TOP].push(controlDiv);
            HomeControl(controlDiv, map)
            }
        }


        if(rectangleSearchEnabled)
         {
             var controlDiv2 = document.createElement('div');
             controlDiv2.index = 2;
             map.controls[google.maps.ControlPosition.RIGHT_TOP].push(controlDiv2);
             RectangleControl(controlDiv2, map)
         } 


    })

    </script>