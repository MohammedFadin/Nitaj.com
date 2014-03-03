<div id="main-container" style="margin:auto 0;">
    <div class="row-fluid" >
        <!-- errors valid -->
    <?php if (validation_errors()):?>
        <div class="span12">
            <div class="alert alert-error">
                <a class="close">&times;</a>
                <?php echo validation_errors();?>
            </div>                  
        </div>
    <?php endif;?>              
    </div>
    <div class="login-wrapper" style="margin-top: 50px;">
        <div class="text-center">
            <h2 class="fadeInUp animation-delay8" style="font-weight:bold">
                <span class="text-success"></span> <span style="color:#ccc; text-shadow:0 1px #fff">Login in a Seconds..</span>
            </h2>
        </div>
        <div class="login-widget animation-delay1"> 
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <div class="pull-left">
                        <i class="fa fa-lock fa-lg"></i> Login
                    </div>

                    <div class="pull-right">
                        <span style="font-size:11px;">Don't have any account?</span>
                        <a class="btn btn-default btn-xs login-link" href="{{url:site uri='users/register_choice'}}" style="margin-top:-2px;"><i class="fa fa-plus-circle"></i> Sign up</a>
                    </div>
                </div>
                <div class="panel-body">
                    <?php echo form_open('users/login', array('id'=>'login', 'class' => 'crud_form'), array('redirect_to' => $redirect_to)); ?>                                    

                        <div class="form-group">
                            <label>Username or Email</label>
                            <input type="text" name="email" placeholder="Email" class="form-control input-sm bounceIn animation-delay2" >
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password" class="form-control input-sm bounceIn animation-delay4">
                        </div>
                        <div class="form-group">
                            <label class="label-checkbox inline">
                                <?php echo form_checkbox('remember', '1', false) ?>
                                <span class="custom-checkbox info bounceIn animation-delay4"></span>
                            </label>
                            Remember me     
                        </div>
        
                        <div class="seperator"></div>
                        <div class="form-group">
                        <?php echo  anchor('users/reset_pass', lang('user:reset_password_link'));?>
                        </div>

                        <hr/>
                        <a href="#" class="btn btn-primary pull-left" style="display:inline">
                            Login with Twitter     
                        </a>
                        <a href="#" class="btn btn-info pull-right">
                            Login with LinkedIn     
                        </a>                        
                        <hr/>
                        <br/>
                        <br/>
                        <button class="btn btn-success btn-sm bounceIn animation-delay5 pull-right" type="submit"><i class="fa fa-sign-in"></i> Sign In</button>
                <?php echo form_close();?>                  
                </div>
            </div><!-- /panel -->
        </div><!-- /login-widget -->
    </div><!-- /login-wrapper -->
            <?php echo form_close();?>                   
            </div>