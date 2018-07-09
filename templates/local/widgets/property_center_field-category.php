<?php

    $category_id = 1;

?>

<?php if(isset(${"category_options_$category_id"}) && ${"category_options_count_$category_id"}>0): ?>
<div class="widget-styles widget-animities widget_edit_enabled">
    <div class="header content t-left"><h2><?php echo ${"options_name_$category_id"} ?></h2></div>
    <div class="content-box">
        <ul class="list-animities">
            <?php foreach(${"category_options_$category_id"} as $key=>$row): ?>
            <?php if(!empty($row['option_value'])): ?>
                <?php if(count($row['is_text']) > 0): ?>

                <div class="panel-row"> 
                    <p class="bottom-border"><strong><?php _che($row['option_name']); ?>:</strong> <span><?php echo _che($row['option_prefix']); ?> <?php echo _che($row['option_value']); ?> <?php echo _che($row['option_suffix']); ?></span><br style="clear: both;" /></p>
                </div>

                <?php elseif(count($row['is_dropdown']) > 0): ?>

                <div class="panel-row"> 
                    <p class="bottom-border"><strong><?php _che($row['option_name']); ?>:</strong> <span class="label label-success"><?php echo _che($row['option_prefix']); ?> <?php echo _che($row['option_value']); ?> <?php echo _che($row['option_suffix']); ?></span><br style="clear: both;" /></p>
                </div>

                <?php endif; ?>
            <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php endif;?>