 <?php
/*
Widget-title: Contact form
Widget-preview-image: /assets/img/widgets_preview/center_contact_form.jpg
 */
?>

<div class="widget body widget_edit_enabled" id="form-contact">
    <form action="{page_current_url}#form-contact" method="post" class="local-form">
        <?php _che($validation_errors); ?>
        <?php _che($form_sent_message); ?>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group {form_error_firstname}">
                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="<?php _l('FirstLast');?>" value="{form_value_firstname}">
                </div>
            </div>                                  
            <div class="col-sm-4">
                <div class="form-group {form_error_email}">
                    <input type="email" id="email" name="email" class="form-control" placeholder="<?php _l('Email');?>" value="{form_value_email}">
                </div>
            </div> 
            <div class="col-sm-4">
                <div class="form-group {form_error_phone}">
                    <input type="text" id="phone" name="phone" class="form-control" placeholder="<?php _l('Phone');?>"  value="{form_value_phone}">
                </div>
            </div>    
            <div class="col-xs-12">
                <div class="form-group {form_error_message}">
                    <textarea class="form-control"  id="message" name="message" rows="10" placeholder="<?php _l('Message');?>">{form_value_message}</textarea>
                </div>
            </div>
        </div>
        <div class="row form-group form-inline">
            <div class="captcha col-sm-8" >
            <?php if(config_item('captcha_disabled') === FALSE): ?>
            <div class="control-group-captcha">
                <div class="form-group">
                <?php 
                    $captcha['image'] = str_replace('height="35"', 'height="52"', $captcha['image']); 
                    $captcha['image'] = str_replace('width="120"', '', $captcha['image']); 
                    echo $captcha['image'];
                ?>
                </div>
                <div class="captcha-input-box  form-group {form_error_captcha}">
                    <input class="captcha form-control {form_error_captcha}" name="captcha" type="text" placeholder="<?php _l('Captcha');?>" value="" />
                    <input class="hidden" name="captcha_hash" type="text" value="<?php echo $captcha_hash; ?>" />
                </div>
            </div>
            <?php endif; ?>
            <?php if(config_item('recaptcha_site_key') !== FALSE): ?>
                <?php _recaptcha(false); ?>
            <?php endif; ?>
            </div>
            <div class="col-sm-4" >
                <div class="cliearfix text-right">
                    <button type="submit" class="btn btn-custom btn-custom-secondary">
                        <?php _l('Send');?>
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>