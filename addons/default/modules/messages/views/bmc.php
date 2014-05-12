<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">

<html>
<head>
    <title></title>
</head>
<body>
	<h4 style="margin-bottom:30px;">
	<p>What is BMCStudents.com?</p> &nbsp;&nbsp;&nbsp;It is a beneficial project directed to the students of Batterjee Medical College to give them the opportunity to find the available resources they want in one organised place in a short period of time, and much more coming!
	</h4>
	<h5 class="alert alert-warning"> Note: What you see below, are just examples, we are looking for students who are willing to contribute as an admins of our Students Hub. If you're interested in joining the team, contact us through (Join The Team) page.</h5>
	<div class="majors_list">
		<?php $badge = 0;?>
		<?php foreach ($majors as $major): ;?> 
				<h4><a href="<?php echo site_url().'/bmc/major/'.$major->slug;?>" style="text-decoration:none; color:inherit"><?php echo $major->major_name;?>&nbsp;<span class="badge"><?php echo count($major->major_courses);?></span></a></h4>

			<?php 
				foreach ($major->major_courses as $val) {
			?>	
				&nbsp;&nbsp;&nbsp;<h4 style="display:inline-block;"><a href="<?php echo site_url().'/bmc/course/'.$val->slug;?>"><?php echo $val->course_name;?></a></h4> &nbsp;
			<?php
				}
			?>
			<hr>
		<?php endforeach;?>
	</div>
</body>
</html>
