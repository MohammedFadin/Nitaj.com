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
                <span class="text-success"></span> <span style="color:#ccc; text-shadow:0 1px #fff">Sign up</span>
            </h2>
        </div>
        <div class="login-widget animation-delay1"> 
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <div class="pull-left">
                        <i class="fa fa-lock fa-lg"></i> 
                    </div>

                    <div class="pull-right">
                        <span style="font-size:11px;">Already have an account?</span>
                        <a class="btn btn-default btn-xs login-link" href="{{url:site uri='users/login'}}" style="margin-top:-2px;"><i class="fa fa-plus-circle"></i> Login</a>
                    </div>   
                </div>
                <div class="panel-body">
                        <div class="form-group text-center">
                        <a href="{{url:site uri='users/register'}}" class="join"><h4>Sign up without a Social Network Account</h4></a>
                        </div>
                        <hr/>
                        <a href="{{ url:site uri='social/session/twitter' }}" class="btn btn-primary pull-left" style="display:inline">
                            Signup with Twitter     
                        </a>
                        <a href="{{ url:site uri='social/session/linkedin' }}" class="btn btn-info pull-right">
                            Signup with LinkedIn     
                        </a>                        
                </div>
            </div><!-- /panel -->
        </div><!-- /login-widget -->
    </div><!-- /login-wrapper -->
</div>