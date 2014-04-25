<section class="title">
	<!-- We'll use $this->method to switch between sample.create & sample.edit -->
	<h4><?php echo lang('sample:'.$this->method); ?></h4>
</section>

<section class="item">

	<?php echo form_open_multipart($this->uri->uri_string()); ?>
		<fieldset>				
			<div class="form_inputs">
			<ul>
				<li>
					<label for="major_name">Major Name<span>*</span></label>
					<div class="input" ><?php echo form_input('major_name', $major->major_name, 'class="width-15"'); ?></div>
				</li>			
				<li>
					<label for="slug"><?php echo lang('sample:slug'); ?> <span>*</span></label>
					<div class="input"><?php echo form_input('slug', $major->slug, 'class="width-15"'); ?></div>
				</li>
			</ul>
			</div>
	
			<div class="buttons">
				<?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel') ));?>
			</div>
		</fieldset>
	<?php echo form_close(); ?>

</section>