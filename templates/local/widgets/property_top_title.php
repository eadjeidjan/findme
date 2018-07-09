<?php
$CI =& get_instance();
$CI->load->model('treefield_m');

$icon = 'ion-android-bar';
if(!empty($estate_data_option_79)){
    $category_id = $CI -> treefield_m-> id_by_path(79, $lang_id, $estate_data_option_79);
    if($category_id)
        $category_obj = $CI -> treefield_m-> get_lang($category_id, FALSE, $lang_id);
        if($category_obj)
            if(isset($category_obj->font_icon_code) && !empty($category_obj->font_icon_code))
                $icon = $category_obj->font_icon_code;
}
?>


<div class="widget container container-palette widget-listing-title widget_edit_enabled">
    <div class="container wb">
        <div class="row">
            <div class="options col-sm-9">
                <div class="type-box"><i class="<?php echo $icon;?>"></i></div>
                <div class="options-body">
                    <h1 class="title">{page_title}</h1>
                    <div class="ratings">
                        <?php if(!empty($avarage_stars)):?>
                            <?php echo number_format($avarage_stars,1); ?> <i class="icon-star-ratings-<?php echo $avarage_stars; ?>"></i>
                        <?php elseif(!empty($estate_data_option_56)):?>
                             <?php echo number_format(_ch($estate_data_option_56,'0'),1); ?> <i class="icon-star-ratings-<?php echo _ch($estate_data_option_56,'0'); ?>"></i>
                        <?php endif;?>
                    </div>
                    <div class="types">
                        <?php _che($estate_data_option_2); ?>
                    </div>
                </div>
            </div>
            <div class="actions col-sm-3">
                <a href="#write_review" class="btn btn-custom-s btn-custom-secondary"><i class="ion-ios-star"></i><?php echo lang_check('Review');?></a>  

                <?php if(file_exists(APPPATH.'controllers/admin/favorites.php')):?>
                <?php
                    $favorite_added = false;
                    if(count($not_logged) == 0)
                    {
                        $CI =& get_instance();
                        $CI->load->model('favorites_m');
                        $favorite_added = $CI->favorites_m->check_if_exists($this->session->userdata('id'), 
                                                                            $estate_data_id);
                        if($favorite_added>0)$favorite_added = true;
                    }
                ?>
                <a href="#" id="add_to_favorites" class="btn btn-custom-s btn-custom-default" style="<?php echo ($favorite_added)?'display:none;':''; ?>"><i class="ion-heart"></i><?php echo lang_check('Save'); ?></a>  
                <a href="#" id="remove_from_favorites" class="btn btn-custom-s btn-custom-default"  style="<?php echo (!$favorite_added)?'display:none;':''; ?>"><i class="ion-heart text-color-primary"></i><?php echo lang_check('Remove'); ?></a>  
                <?php endif; ?>

                <?php _widget('custom_property_report');?>


                <a class="btn btn-custom-s btn-custom-default" href="https://www.facebook.com/share.php?u={page_current_url}&title={page_title}" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="ion-share"></i>Share</a>  
            </div>
        </div>
    </div>
</div> 