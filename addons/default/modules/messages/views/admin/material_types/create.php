<section class="title">
	<!-- We'll use $this->method to switch between sample.create & sample.edit -->
	<h4><?php echo lang('sample:'.$this->method); ?></h4>
</section>

<section class="item">
	<fieldset>
	<?php echo form_open($this->uri->uri_string()); ?>
		
		<div class="form_inputs">
		<ul>			
			<li class="<?php echo alternator('', 'even'); ?>">
				<label for="material_type_name">Material Type Name<span>*</span></label>
				<div class="input"><?php echo form_input('material_type_name', $type->material_type_name, 'class="width-15"'); ?></div>
			</li>
		</ul>
		</div>
		<div class="buttons">
			<?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel') )); ?>
		</div>
		
	<?php echo form_close(); ?>
	</fieldset>
</section>