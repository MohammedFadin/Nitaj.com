<section class="title">
	<!-- We'll use $this->method to switch between sample.create & sample.edit -->
	<h4><?php echo lang('sample:'.$this->method); ?></h4>
</section>

<section class="item">

	<?php echo form_open_multipart($this->uri->uri_string());?>
		<fieldset>
		<div class="form_inputs">
		<ul>
			<li>
				<label for="major_type">Major<span>*</span></label>
				<div class="input">
					<?php echo form_dropdown('major_type', $major_types, @$course->major_type);?>
				</div>
			</li>
			
			<li>
				<label for="course_name">Course Name<span>*</span></label>
				<div class="input"><?php echo form_input('course_name', $course->course_name, 'class="width-15"'); ?></div>
			</li>
			<li>
				<label for="slug"><?php echo lang('sample:slug'); ?> <span>*</span></label>
				<div class="input"><?php echo form_input('slug', $course->slug, 'class="width-15"'); ?></div>
			</li>	
			<li>
				<label for="description">Course Description<span>*</span></label>
				<div class="input"><?php echo form_input('description', $course->description, 'class="width-15"'); ?></div>
			</li>
		</ul>
		</div>

		<div class="buttons">
			<?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel') )); ?>
		</div>
		
	<?php echo form_close(); ?>
		</fieldset>
</section>