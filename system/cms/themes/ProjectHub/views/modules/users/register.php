
<div id="main-container" style="margin:auto 0;">
    <div class="row-fluid">
                <!-- errors valid -->
        <?php if (!empty($error_string)): ?>
        <!-- Woops... -->
        <div class="row-fluid">
            <div class="span12">
              <div class="alert alert-error">
                <a class="close">&times;</a>
                <?php echo $error_string;?>
              </div>
            </div>
        </div>
        <?php endif; ?>             
    </div>
    <div class="login-wrapper" style="margin-top: 50px;">
        <div class="text-center">
            <h2 class="fadeInUp animation-delay10" style="font-weight:bold">
                <span class="text-success"></span> <span style="color:#ccc; text-shadow:0 1px #fff">Create your Account in a Seconds..</span>
            </h2>
        </div>
        <div class="login-widget animation-delay1"> 
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-plus-circle fa-lg">&nbsp;Signup</i> 
                </div>
                <div class="panel-body">
                    <?php echo form_open('register', array('id' => 'register')) ?>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control input-sm bounceIn animation-delay2" maxlength="100" value="<?php echo $_user->username ?>" />
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control input-sm bounceIn animation-delay3" maxlength="100" value="<?php echo $_user->email ?>" />
                            <?php echo form_input('d0ntf1llth1s1n', ' ', 'class="default-form" style="display:none"') ?>
                        </div><!-- /form-group -->
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control input-sm bounceIn animation-delay4" maxlength="100" />
                        </div><!-- /form-group -->
    <?php foreach($profile_fields as $field) { if($field['required'] and $field['field_slug'] != 'display_name') { ?>                        
                        <div class="form-group">
        <label for="<?php echo $field['field_slug'] ?>"><?php echo (lang($field['field_name'])) ? lang($field['field_name']) : $field['field_name'];  ?></label>
        <?php echo $field['input'] ?>   
                        </div><!-- /form-group -->    
    <?php } } ?>                                                                   

                        <div class="seperator"></div>
                        <div class="form-group">
                            <div class="controls">
                                Already have an account? <a href="{{url:site uri='users/login'}}" class="primary-font login-link">Sign In</a>
                            </div>
                        </div><!-- /form-group -->
                            
                        <hr/>
                        <div class="form-group">
                            <div class="controls text-right">
                            <button class="btn btn-success btn-sm bounceIn animation-delay5 pull-right" type="submit"><i class="fa fa-sign-in"></i> Create Account</button>
                            </div>
                        </div><!-- /form-group -->
                    <?php echo form_close() ?>
                </div>
            </div><!-- /panel -->
        </div><!-- /login-widget -->
    </div><!-- /login-wrapper -->
</div>