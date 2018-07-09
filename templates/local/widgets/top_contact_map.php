 <?php
/*
Widget-title: Contact map
Widget-preview-image: /assets/img/widgets_preview/top_contact_map.jpg
 */
?>

<div class="section widget-top-map container container-palette widget_edit_enabled">
    <div class="contact-map" id="contact-map" style="height: 280px"> </div>
</div>

<script>
 
    $(document).ready(function(){
    var map;
        
    if($('#contact-map').length){
        
        var myLocationEnabled = true;
        var style_map = '';
        var scrollwheelEnabled = false;
        var markers1 = new Array();
        var markers = new Array();
        var mapOptions = {
            center: new google.maps.LatLng({settings_gps}),
            zoom: {settings_zoom},
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: scrollwheelEnabled,
            styles: mapStyle
        };

        var map = new google.maps.Map(document.getElementById('contact-map'), mapOptions);
                    
                var myLatlng = new google.maps.LatLng({settings_gps});
                var callback = {
                            'click': function(map, e){
                                var activemarker = e.activemarker;
                                this.activemarker = false;
                                
                                sw_infoBox.close();
                                if(activemarker) {
                                    e.activemarker = false;
                                    return true;
                                }
                                var content = '<div class="infobox infobox-mini infobox-property">' +
                                                '<div class="content">' +
                                                  '<div class="title"> <?php _jse($settings_websitetitle); ?> <br /><?php echo lang_check('Address');?>: <?php _jse($settings_address); ?> </a></div>' +
                                              '</div>';

                                var boxOptions = {
                                    content: content,
                                    disableAutoPan: false,
                                    alignBottom: true,
                                    maxWidth: 0,
                                    pixelOffset: new google.maps.Size(-74, -20),
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
                var marker_inner ='<div class="google_marker"><img src="assets/img/markers/empty.png"></div>';
                var marker = new CustomMarker(myLatlng,map,marker_inner,callback);
    }
    })
       
</script>