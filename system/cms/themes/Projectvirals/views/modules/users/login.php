<link rel="stylesheet" href="system/cms/themes/Projectvirals/css/clear_forms/less/styles.css" type="text/css" />           
    <div class="block">
        <div class="container">
        	<div class="row-fluid">
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
            <div class="row">
                <div class="span12">
					<?php echo form_open('users/login', array('id'=>'login', 'class' => 'crud_form'), array('redirect_to' => $redirect_to)); ?>                
                    <div class="clear-form two-col">
                        <div class="form-heading">
                            <h3 class="header">Sign In</h3>
                            <hr/>
                        </div>
                        <div class="col1">                            
                            <h4>Use other accounts</h4>
                            <p>
                                You can also sign in using your Facebook Account or Twitter Account
                            </p>
                            <a href="{{ url:site uri='social/session/facebook' }}" class="btn btn-large btn-block btn-fb">Login with Facebook</a>
                            <a href="{{ url:site uri='social/session/twitter' }}" class="btn btn-large btn-block btn-twitter">Login with Twitter</a>
                        </div>
                        <div class="col2">
                            <div class="form-heading"><!-- without social -->
                                <h4 class="header">Using your account</h4>                                                        
                            </div>  
                            <div class="form-body">                              
                                <div class="pair-group">
                                    <input type="text" name="email" class="input-block-level" placeholder="Email address">
                                    <input type="password" name="password" class="input-block-level" placeholder="Password">         
                                </div>
                           </div>                                 
                            <div class="form-footer">     
                                <button class="btn btn-large btn-blue btn-block" type="submit">Sign In</button> 
                                <p class="center">
                                    <?php echo  anchor('users/reset_pass', lang('user:reset_password_link'));?>
                                </p>
                            </div>    
                        </div>          
                    </div>
                    <?php echo form_close();?>;
                </div>
            </div>
        </div>
    </div>