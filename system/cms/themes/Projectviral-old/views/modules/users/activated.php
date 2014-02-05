<h2 class="page-title" id="page_title"><?php echo lang('user:login_header') ?></h2>

	<div class="row-fluid">
		<?php if (validation_errors()): ?>
		<!-- Woops... -->
		<div class="row-fluid">
		    <div class="span12">
		      <div class="alert alert-error">
		        <a class="close">&times;</a>
		        <?php echo validation_errors();?>
		      </div>
		    </div>
		</div>
		<?php endif; ?>
		<div class="success-box alert alert-success">
			<?php echo $this->lang->line('user:activated_message'); ?>
		</div>
		<div class="row-fluid">
		<?php echo form_open('users/login', array('id'=>'login', 'class' => 'crud_form')); ?>
			<div class="span10 offset1 form-horizontal well">
				<fieldset>
	        		<legend><?php echo lang('user:login_header') ?></legend>

	        		<div class="control-group">
						<label class="control-label" for="email"><?php echo lang('user:email_label') ?></label>
			            <div class="controls">
			            	<?php echo form_input('email', $this->input->post('email') ? $this->input->post('email') : '')?>
			            </div>
		          	</div>

	        		<div class="control-group">
						<label class="control-label" for="password"><?php echo lang('user:password_label') ?></label>
			            <div class="controls">
			            	<input type="password" id="password" name="password" maxlength="20" />
			            </div>
		          	</div>

		          	<div class="control-group">
						<label class="control-label" for="remember"><?php echo lang('user:remember'); ?></label>
			            <div class="controls">
			            	<?php echo form_checkbox('remember', '1', FALSE); ?>
			            </div>
		          	</div>

		          	<div class="form-actions">
	            		<?php echo form_submit('btnSubmit', lang('user:login_btn'), 'class="btn btn-primary"'); ?>
	            		<button type="reset" class="btn"><?php echo anchor('register', lang('user:register_btn')); ?></button>
	            		<button type="reset" class="btn"><?php echo anchor('users/reset_pass', lang('user:reset_password_link'));?></button>
	          		</div>

				</fieldset>
			</div>
		<?php echo form_close(); ?>
		</div>
	</div>
