<div class="row result-container row-flex results-grid">
    <?php foreach($agent_estates as $key=>$item): ?>
        <?php _generate_results_item(array('key'=>$key, 'item'=>$item, 'custom_class'=>'col-lg-4 col-md-6 thumbnail-g')); ?>
    <?php endforeach;?>
</div>
<div class="row result-container row-flex results-list hidden">
    <?php foreach($agent_estates as $key=>$item): ?>
        <div class="col-xs-12">
            <div class="thumbnail thumbnail-property thumbnail-property-list nohover" data-number="<?php echo $key +1;?>">
                <div class="thumbnail-image">
                    <a href="<?php echo $item['url']; ?>">
                        <img src="<?php echo _simg($item['thumbnail_url'], '612x386'); ?>" alt="">
                    </a>
                </div>
                <div class="caption">
                    <div class="header">
                        <div class="left">
                            <h2 class="thumbnail-title"><a href="<?php echo $item['url']; ?>"><?php _che($item['option_10']); ?></a></h2>
                            <div class="options">
                                <span class="thumbnail-ratings">
                                    <?php
                                        $CI = &get_instance();
                                        $CI->load->model('reviews_m');
                                        $avarage_stars = intval($CI->reviews_m->get_avarage_rating($item['id'])+0.5);
                                    ?>

                                    <?php if(!empty($avarage_stars)):?>
                                        <?php echo $avarage_stars; ?> <i class="icon-star-ratings-<?php echo $avarage_stars; ?>"></i>
                                    <?php elseif(!empty($item['option_56'])):?>
                                        <?php echo _ch($item['option_56'],'0'); ?> <i class="icon-star-ratings-<?php echo _ch($item['option_56'],'0'); ?>"></i>
                                    <?php endif;?>
                                    
                                </span>
                                <span class="type">
                                    <a href="<?php echo $item['url']; ?>"><?php _che($item['option_4']); ?></a>
                                </span>
                            </div>
                        </div>
                        <div class="right">
                            <div class="address"><?php _che($item['address']); ?></div>
                        </div>
                    </div>
                    <ul class="list-default">
                        <?php if(isset($item['option_8']) && !empty($item['option_8'])):?>
                        <li>
                            <p>
                                <?php echo character_limiter(strip_tags($item['option_8']), 40); ?>
                            </p>
                        </li>
                        <?php endif;?>

                        <li>
                            <p>
                            <?php
                                $custom_elements = _get_custom_items();
                                $i=0;
                                $k=0;
                                $c=0;
                                if(count($custom_elements) > 0):
                                foreach($custom_elements as $key=>$elem):

                                //if($c==0)echo '<div class="options">';

                                if(!empty($item['option_'.$elem->f_id]) && $i++<3){
                                    if($elem->type == 'DROPDOWN' || $elem->type == 'INPUTBOX'):
                                     ?>
                                    <span class="cproperty-field" title="<?php _che(${"options_name_$elem->f_id"}, '-'); ?>"><i class="fa <?php _che($elem->f_class); ?>"></i><small><?php echo _ch($item['option_'.$elem->f_id], '-'); ?> <?php echo _ch(${"options_suffix_$elem->f_id"}, ''); ?> <span style="<?php _che($elem->f_style); ?>"><?php echo _ch(${"options_name_$elem->f_id"}, '-'); ?></span></small></span>
                                     <?php 
                                    elseif($elem->type == 'CHECKBOX'):
                                     ?>
                                    <span class="property-field" title="<?php _che(${"options_name_$elem->f_id"}, '-'); ?>"><i class="fa <?php _che($elem->f_class); ?>"></i><small> <strong class="<?php echo (!empty($item['option_'.$elem->f_id])) ? 'glyphicon glyphicon-ok':'glyphicon glyphicon-remove';  ?>"></strong> <?php echo _ch(${"options_name_$elem->f_id"}, '-'); ?></small></span>
                                     <?php 
                                    endif; 
                                    if( ($k+1)%2==0 )
                                    {
                                        //echo '</div><div class="options">';
                                    }
                                    $k++;
                                }
                                $c++;

                                endforeach;  
                                //echo '</div>';
                                else:
                            ?>
                                <?php if(isset($options_name_58) && !empty($options_name_58)):?>
                                <span class="property-field"><b><?php _che($options_name_58); ?></b> : <?php echo _ch($item['option_58']); ?></span>
                                <?php endif;?>
                                <?php if(isset($options_name_57) && !empty($options_name_57)):?>
                                <span class="property-field"> <b><?php echo lang_check('Size'); ?></b> : <?php echo _ch($options_prefix_57)._ch($item['option_57'])._ch($options_suffix_57); ?></span>
                                <?php endif;?>
                            <?php endif; ?>
                            </p>
                        </li>

                    </ul>
                </div>
            </div>
        </div> 
    <?php endforeach;?>
</div>
<nav class="text-center">
    <div class="pagination-ajax-results pagination  wp-block default product-list-filters light-gray pagination" rel="ajax_results">
        <?php echo $pagination_links_agent; ?>
    </div>
</nav>