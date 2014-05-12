<body>
{{ if user:logged_in }}

<?php echo validation_errors();?>
<?php if (!empty($upload_error)) echo $upload_error;?>
<?php echo form_open_multipart($this->uri->uri_string(), 'class="form-horizontal well"');?>
  <div class="control-group">
  	<h4>Share & help everyone</h4>
    <hr>
    <label class="control-label" for="material_type">File Type<span>*</span></label>
    <div class="controls">
    <?php echo form_dropdown('material_type', $material_types, set_value('material_type'));?>
<!--
	<select name="material_type">
	<?php foreach ($materials as $material): ?>
	<option value="<?php echo $material['material_type_id'];?>"><?php echo $material['material_type_name'];?></option>
	<?php endforeach; ?>
	</select>	
-->
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="material_course">Choose Course<span>*</span></label>
    <div class="controls">
    <?php echo form_dropdown('material_course', $courses, set_value('material_course'));?>
<!--
	<select name="material_course">
	<?php foreach ($courses as $course): ?>
	<option value="<?php echo $course->course_id;?>"><?php echo $course->course_name;?></option>
	<?php endforeach; ?>
	</select>
-->
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="material_name">File Name<span>*</span></label>
    <div class="controls">
	<div class="input"><?php echo form_input('material_name', set_value('material_name'), 'class="width-15"'); ?></div>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="material_name">Choose your File<span>*</span></label>
    <div class="controls">
	<div class="input"><?php echo form_upload('material_link', set_value('material_link'), 'class="width-15"'); ?></div>
    </div>
  </div>
  <hr>
  <div class="control-group">
    <div class="controls">
	<a href="<?php echo site_url();?>" class="btn btn-default btn-large span"/>Cancel</a>&nbsp;
	<input type="submit" class="btn btn-primary btn-large span" value="Submit"/>
    </div>
  </div>
<?php echo form_close();?>
	{{ else }}
		<script>
			window.location.replace('<?php echo site_url();?>/users/login');
		</script>
	{{ endif }}
</body>