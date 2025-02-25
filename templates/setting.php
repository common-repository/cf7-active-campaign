<?php
  if ( ! defined( 'ABSPATH' ) ) {
     exit;
 } ?><div class="crm_fields_table">
    <div class="crm_field">
  <div class="crm_field_cell1"><label for="vx_name"><?php _e("Account Name",'contact-form-activecamp-crm'); ?></label>
  </div>
  <div class="crm_field_cell2">
  <input type="text" name="crm[name]" value="<?php echo !empty($name) ? $name : 'Account #'.$id; ?>" id="vx_name" class="crm_text">

  </div>
  <div class="clear"></div>
  </div>
                
    <?php if(isset($info['api_token'])  && $info['api_token']!="") {
  ?>
      <div class="crm_field">
  <div class="crm_field_cell1"><label><?php _e("Test Connection",'contact-form-activecamp-crm'); ?></label></div>
  <div class="crm_field_cell2">      <button type="submit" class="button button-secondary" name="vx_test_connection"><i class="fa fa-refresh"></i> <?php _e("Test Connection",'contact-form-activecamp-crm'); ?></button>
  </div>
  <div class="clear"></div>
  </div> 
  <?php
    }
  ?>
<div class="crm_field">
  <div class="crm_field_cell1"><label for="vx_pass"><?php _e('API Key','contact-form-activecamp-crm'); ?></label></div>
  <div class="crm_field_cell2">
  <div class="vx_tr" >
  <div class="vx_td">
  <input type="password" id="vx_pass" name="crm[api_key]" class="crm_text" placeholder="<?php _e('API Key','contact-form-activecamp-crm'); ?>" value="<?php echo esc_html($this->post('api_key',$info)); ?>" required>
  </div>
  <div class="vx_td2">
  <a href="#" class="button vx_toggle_btn vx_toggle_key" title="<?php _e('Toggle Key','contact-form-activecamp-crm'); ?>"><?php _e('Show Key','contact-form-activecamp-crm') ?></a>
  
  </div>
  </div>
    <span class="howto"><?php _e("Login to your ActiveCampaign account then Go to Settings -> Developer and copy API key and URL",'contact-form-activecamp-crm'); ?></span>
  </div>
  <div class="clear"></div>
  </div>

<div class="crm_field">
  <div class="crm_field_cell1"><label for="vx_url"><?php _e('API URL','contact-form-activecamp-crm'); ?></label></div>
  <div class="crm_field_cell2">

  <input type="text" id="vx_pass" name="crm[api_url]" class="crm_text" placeholder="<?php _e('API URL','contact-form-activecamp-crm'); ?>" value="<?php echo esc_html($this->post('api_url',$info)); ?>" required>

  </div>
  <div class="clear"></div>
</div> 
        
  <div class="crm_field">
  <div class="crm_field_cell1"><label for="vx_error_email"><?php _e("Notify by Email on Errors",'contact-form-activecamp-crm'); ?></label></div>
  <div class="crm_field_cell2"><textarea name="crm[error_email]" id="vx_error_email" placeholder="<?php _e("Enter comma separated email addresses",'contact-form-activecamp-crm'); ?>" class="crm_text" style="height: 70px"><?php echo isset($info['error_email']) ? $info['error_email'] : ""; ?></textarea>
  <span class="howto"><?php _e("Enter comma separated email addresses. An email will be sent to these email addresses if an order is not properly added to Active Campaign. Leave blank to disable.",'contact-form-activecamp-crm'); ?></span>
  </div>
  <div class="clear"></div>
  </div>  
   
 
  <button type="submit" value="save" class="button-primary" title="<?php _e('Save Changes','contact-form-activecamp-crm'); ?>" name="save"><?php _e('Save Changes','contact-form-activecamp-crm'); ?></button>  
  </div>  