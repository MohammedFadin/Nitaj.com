<?php

?>
<body>
<!-- <?php echo $this->current_user->email;?> -->
<!--
{{ streams:profiles namespace="users" }} 
<a href="{{ url:site }}user/{{ display_name }}">{{ display_name }}</a> 
​{{ /streams:profiles }}
-->
<div>
	<table class="table table-striped table-condensed">
	    <tr>
	        <td><h4>File Name</h4></td>
	        <td><h4>Added_by</h4></td>
	        <td><h4>Viewed</h4></td>
	    <tr>
	    	<td><?php echo $file->material_name;?></td>
	    	<td><a href="{{ url:site }}user/<?php echo $uploader->id;?>"><?php echo $uploader->username;?></a></td>
	    	<td class="text-center"><?php echo $file->viewed;?></td>
	    </tr>
	    <tr>
	        <td colspan="3">
				<div class="text-center">
				<input type="button" class="btn btn-primary btn-large" onclick="parent.location='<?php echo '../resources/uploads/' . $file->material_link;?>'" value="Download File">
				</div>
	        </td>
	    </tr>
	</table>
</div>
<!-- Course Description -->
<div class="alert alert-dismissable alert-danger">
	<h4 class="text-center">Future Doctors Comments on the File</h4>
	<p><span>ipsum lepsum ipsum lepsum  ipsum lepsum  ipsum lepsum  ipsum lepsum</span></p>
	<p><span>ipsum lepsum ipsum lepsum  ipsum lepsum  ipsum lepsum  ipsum lepsum</span></p>
</div>
            
</body>