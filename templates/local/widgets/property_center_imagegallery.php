<?php
/*  The Gallery as lightbox dialog, should be a child element of the document body 
*    use css/blueimp-gallery.min.css
*    use js/blueimp-gallery.min.js
*    use config assets/js/realsite.js
*   site https://github.com/blueimp/Gallery/blob/master/README.md#setup
*/
?>

{has_page_images}
<div class="widget-styles images-gallery widget_edit_enabled">
    <div class="header content t-left"><h2><?php _l('Imagegallery');?></h2></div>
    <div class="content-box">
    <div class="row">
        <?php foreach ($page_images as $val):?>
            <div class="col-sm-6 col-md-3">
                <div class="card card-gallery">
                    <a href="<?php _che($val->url);?>" title="<?php _che($val->filename);?>" download="<?php _che($val->url);?>">
                        <img src="<?php echo _simg($val->thumbnail_url, '430x300');?>" class="image-cover" alt="" />
                    </a>
                </div>
            </div>
        <?php endforeach;?>
    </div>
    </div>
</div>
{/has_page_images}     