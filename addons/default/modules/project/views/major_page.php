<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">

<html>
<head>
    <title></title>
</head>
<body>

	<table class="table table-striped table-condensed table-hover">
		<?php if (count($courses)) { ;?>
		<?php foreach ($courses as $course): ;?> 
			<tr>
				<th><h4><a href="<?php echo site_url() . '/bmc/course/' . $course->slug;?>"><?php echo $course->course_name;?></a></h4></th>
			</tr>
		<?php endforeach;?>
		<?php }else{ ;?>
			<tr>
				<div class="alert alert-dismissable alert-warning">
				                <h4>Sorry Doctor {{ user:username }}!</h4>
				                <p>It seems that this college section is empty. <a href="{{ url:site }}" class="alert-link"> Go Back?</a>.</p>
				</div>
			</tr>
			<?php };?>
	</table>
	<?php echo $this->comments->display('1', 'bmc') ?>
	<?php echo $this->comments->form() ?>
</body>
</html>
