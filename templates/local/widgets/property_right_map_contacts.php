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

<div class="widget-styles widget-listing-map widget_edit_enabled">
    <div class="body">
        <div class="map" id="property-map-small"></div>
    </div>
    <div class="content-box">
        <ul class="list-contact">
            <li class="icon address"><span title="<?php _che($estate_data_address);?>"><?php _che($estate_data_address);?></span></li>
            <!--<li class="icon phone"><a href="tel:3103179140" class="link-grey">(310) 317-9140</a></li>-->
            
            <?php if(isset($category_options_1)) foreach($category_options_1 as $key=>$row):?>
            <?php if(!empty($row['is_text'])): ?>
                <?php if(filter_var($row['option_value'], FILTER_VALIDATE_URL)):?>
                    <li class="icon earth"><a href="<?php _che($row['option_value']);?>"><?php _che($row['option_value']);?></a></li>    
                <?php else:?>
                    <li>
                        <strong><?php _che($row['option_name']);?>:</strong>
                        <span><?php _che($row['option_prefix']);?> <?php _che($row['option_value']);?> <?php _che($row['option_suffix']);?></span>
                    </li><!-- /.property-detail-overview-item -->
                <?php endif;?>
            <?php endif;?>
            <?php if(!empty($row['is_dropdown'])): ?>
                <li>
                    <strong><?php _che($row['option_name']);?>:</strong>
                    <span class="label label-success"><?php _che($row['option_value']);?></span>
                </li><!-- /.property-detail-overview-item -->
            <?php endif;?>
            <?php if(!empty($row['is_checkbox'])): ?>
                <li>
                    <strong><?php _che($row['option_name']);?>:</strong>
                    <span><img src="assets/img/checkbox_<?php _che($row['option_value']);?>.png" alt="<?php _che($row['option_value']);?>" /></span>
                </li><!-- /.property-detail-overview-item -->
            
            <?php endif;?>
            <?php endforeach;?>
        </ul>
    </div>
</div>

<?php if(!empty($estate_data_gps)): ?>
<script>
(function(){
     
var map;
$(document).ready(function(){
        
    // map init    
    if($('#property-map-small').length){
        var myLocationEnabled = true;
                      
        var scrollwheelEnabled = false;
        var markers1 = new Array();
        var mapOptions1 = {
            center: new google.maps.LatLng({estate_data_gps}),
            zoom: {settings_zoom},
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: scrollwheelEnabled,
            styles: mapStyle
        };

        map = new google.maps.Map(document.getElementById('property-map-small'), mapOptions1);
        map_propertyLoc = map  

        <?php 
            $estate_data_icon = '';
            if(!empty($estate_data_option_79) && isset($values[$estate_data_option_79])){
                $estate_data_icon = $values[$estate_data_option_79];
            }
        ?>

            var myLatlng = new google.maps.LatLng({estate_data_gps});
            var callback = {
                        'click': function(map, e){
                            var activemarker = e.activemarker;
                            this.activemarker = false;

                            sw_infoBox.close();
                            if(activemarker) {
                                e.activemarker = false;
                                return true;
                            }
                            var content= '<div class="infobox infobox-mini infobox-property">' +
                                            '<div class="content">' +
                                        '<div class="title"> <?php echo lang_check('Address');?>: <?php _jse($estate_data_address); ?> </a></div>' +
                                    '</div>';

                            var boxOptions = {
                                content: content,
                                disableAutoPan: false,
                                alignBottom: true,
                                maxWidth: 0,
                                pixelOffset: new google.maps.Size(-74, -27),
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
            var marker_inner ='<img src="<?php _jse($estate_data_icon); ?>">';
            var marker = new CustomMarker(myLatlng,map_propertyLoc,marker_inner,callback);
            
            markers1.push(marker);
             

        if(myLocationEnabled){
            var controlDiv = document.createElement('div');
            controlDiv.index = 1;
            map.controls[google.maps.ControlPosition.RIGHT_TOP].push(controlDiv);
            HomeControl(controlDiv, map)
        }

    } 
     
}); 
 })()  
       
</script>
<?php endif;?>

