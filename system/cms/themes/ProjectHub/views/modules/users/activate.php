
    
    <div id="main-container" style="margin-top: 100px;">
<link rel="stylesheet" href="{{ url:base }}/system/cms/themes/Projectvirals/css/clear_forms/less/styles.css" type="text/css" />           
    <div>
        <div class="container" style="margin:auto 0;">
            <div class="row-fluid">
            
            </div>
            <div class="row">
                <div class="span12">
                    <?php echo form_open('users/activate', 'id="activate-user"'); ?>
                    <div class="clear-form two-col">
                        <div class="form-heading">
                            <h3 class="header"><?php echo lang('user:activate_account_title');?></h3>
                            <hr/>
                            <p>
                                <?php echo lang('user:activate_account_msg');?>
                            </p>
                        </div>
                        <div class="">
                            <div class="form-body">                              
                                <div class="pair-group">
                                    <input type="text" name="email" value="<?php isset($_user['email']) ? $_user['email'] : '';?>" class="input-block-level" maxlength="40" placeholder="<?php echo lang('user:email_label');?>">
                                    <input type="text" name="activation_code" class="input-block-level" maxlength="40" placeholder="<?php echo lang('user:activation_code') ?>">         
                                </div>
                           </div>                                 
                            <div class="form-footer">     
                                <button class="btn btn-large btn-blue btn-block" type="submit"><?php echo lang('user:activate_btn');?></button> 
                            </div>    
                        </div>          
                    </div>
                    <?php echo form_close();?>;
                </div>
            </div>
        </div>
    </div>
    </div>