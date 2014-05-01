<?php

?>
<body>

<!-- Course Description -->
<div class="alert alert-dismissable alert-danger">
	<h3><?php echo lang('sample:course_info');?></h3>
	<p>&nbsp;<span class="label">Name:</span>&nbsp;<span></span><?php echo $course_info->course_name;?></span></p>
	<p>&nbsp;<span class="label">Description:</span>&nbsp;<span><span><?php echo $course_info->description;?></span></p>
</div>

<div class="well">
    <ul class="nav nav-tabs">
    	<?php $print_only_once = true;?>
		<?php foreach ($material_types as $type): ;?> 
		
<!--       <li class="active"><a href="#home" data-toggle="tab">Profile</a></li> -->
      <li style="font-size:1.3em;" class="<?php echo $print_only_once? 'active':'false';?>"><a href="#<?php echo $type->material_type_id;?>" data-toggle="tab"><?php echo $type->material_type_name;?></a>
      </li>
	    <?php $print_only_once=false;?>
		<?php endforeach;?>
    </ul>
    
    <div id="myTabContent" class="tab-content">
    	<?php $print_only_once = true;?>
		<?php foreach ($material_types as $type): ;?> 
      <div class="tab-pane <?php echo $print_only_once? 'active':'false';?>" id="<?php echo $type->material_type_id;?>">
      <table class="table table-striped table-condensed table-hover">
      <tr>
      	<th><h4>File Name</h4></th>
	  	<th><h4>Uploader Name</h4></th>
	  	<th><h4>Viewed</h4></th>
      </tr>
		<?php for ($i = 0; $i < count($course_files); $i++) { 
				if ( $type->material_type_id == $course_files[$i]->material_type) { ;?>
				
<tr>

<td><a href="<?php echo site_url() . '/bmc/download/' . $course_files[$i]->material_id . '/' . str_replace(' ', '_', $course_files[$i]->material_name);?>"><?php echo $course_files[$i]->material_name;?></a></td>

<td><a href="{{ url:site }}user/<?php echo $course_files[$i]->uploader_id;?>"><?php echo $course_files[$i]->uploader_name;?></a></td>
<td><?php echo $course_files[$i]->viewed ;?></td>
</tr>
		<?php 
				}
			};
			$print_only_once=false;
		?>

      </table>
      </div>
		<?php endforeach;?>
    </div>
</div>
    <?php echo $this->comments->display();?>
    <?php echo $this->comments->form();?>
</body>
