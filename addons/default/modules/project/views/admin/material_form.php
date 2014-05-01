<!--
<section class="title">
<?php if ($this->method == 'create'): ?>
	<h4><?php echo lang('blog:create_title') ?></h4>
<?php else: ?>
	<h4><?php echo sprintf(lang('blog:edit_title'), $post->title) ?></h4>
<?php endif ?>
</section>
-->

<section class="item">
<div class="content">

<?php echo form_open_multipart($this->uri->uri_string()); ?>

	<!-- Content tab -->
	<div class="form_inputs">
		<fieldset>
			<ul>
				<li>
					<label for="material_course">File Course Category<span>*</span></label>
				<?php echo form_dropdown('material_course', $courses, @$material->course_id);?>
				</li>

				<li>
					<label for="material_type">File Type<span>*</span></label>
				<?php echo form_dropdown('material_type', $materials_types, @$material->material_type);?>
				</li>

				<li>
					<label for="material_name">File Name<span>*</span></label>
				<?php echo form_input('material_name', $material->material_name, 'class="width-40"');?>
				</li>
		
<!--
				<li>
					<label for="material_link">Choose File<span>*</span></label>
				<?php echo form_upload('material_link', 'class="width-20"');?>
				</li>
-->
			</ul>
		</fieldset>
		<div class="buttons">
			<?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel'))) ?>
		</div>
	</div>

</div>
</section>