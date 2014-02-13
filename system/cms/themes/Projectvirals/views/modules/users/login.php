<link rel="stylesheet" href="system/cms/themes/Projectvirals/css/clear_forms/less/styles.css" type="text/css" />           
    <div class="block blur2">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="clear-form two-col">
                        <div class="form-heading">
                            <h3 class="header">Sign In</h3>
                            <hr/>
                        </div>
                        <div class="col1">                            
                            <h4>Use other accounts</h4>
                            <p>
                                You can also sign in using your Facebook Account or Google Account
                            </p>
                            <a href="" class="btn btn-large btn-block btn-fb">Login with Facebook</a>
                            <a href="" class="btn btn-large btn-block btn-google">Login with Google</a>
                        </div>
                        <div class="col2">
                            <div class="form-heading">
                                <h4 class="header">Using your account</h4>                                                        
                            </div>  
                            <div class="form-body">                              
                                <div class="pair-group">
                                    <input type="text" class="input-block-level" placeholder="Email address">
                                    <input type="password" class="input-block-level" placeholder="Password">         
                                </div>
                           </div>                                 
                            <div class="form-footer">     
                                <button class="btn btn-large btn-blue btn-block" type="submit">Sign In</button> 
                                <p class="center">
                                    <a href="#">Forgot your password?</a>
                                </p>
                            </div>    
                        </div>          
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- 
<section id="login">
	<div class="row-fluid">
		<?php if (validation_errors()): ?>
		<div class="row-fluid">
		    <div class="span12">
		      <div class="alert alert-error">
		        <a class="close">&times;</a>
		        <?php echo validation_errors();?>
		      </div>
		    </div>
		</div>
		<?php endif; ?>
		<div class="row-fluid">
		<?php echo form_open('users/login', array('id'=>'login', 'class' => 'crud_form'), array('redirect_to' => $redirect_to)); ?>
			<div class="span10 offset1 form-horizontal well">
				<fieldset>
	        		<legend><?php echo lang('user_login_header') ?></legend>

	        		<div class="control-group">
						<label class="control-label" for="email"><?php echo lang('user_email') ?></label>
			            <div class="controls">
			            	<?php echo form_input('email', $this->input->post('email') ? $this->input->post('email') : '')?>
			            </div>
		          	</div>

	        		<div class="control-group">
						<label class="control-label" for="password"><?php echo lang('user_password') ?></label>
			            <div class="controls">
			            	<input type="password" id="password" name="password" maxlength="20" />
			            </div>
		          	</div>

		          	<div class="control-group">
						<label class="control-label" for="remember"><?php echo lang('user_remember'); ?></label>
			            <div class="controls">
			            	<?php echo form_checkbox('remember', '1', FALSE); ?>
			            </div>
		          	</div>

		          	<div class="form-actions">
	            		<?php echo form_submit('btnSubmit', lang('user_login_btn'), 'class="btn btn-primary"'); ?>
	            		<button type="reset" class="btn"><?php echo anchor('register', lang('user_register_btn')); ?></button>
	            		<button type="reset" class="btn"><?php echo anchor('users/reset_pass', lang('user_reset_password_link'));?></button>
	          		</div>

				</fieldset>
			</div>
		<?php echo form_close(); ?>
		</div>
	</div>
</section> -->