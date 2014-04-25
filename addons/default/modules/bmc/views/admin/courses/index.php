<section class="title">
	<h4><?php echo lang('sample:'.$this->method); ?></h4>
</section>

<section class="bmc_items">	
		<table>
			<thead>
				<tr>
					<th> <?php echo form_checkbox(array('name' => 'action_to_all', 'class' => 'check-all'));?>
					</th>
					<th> Majors </th>
					<th> Courses </th>
					<th> Actions </th>
				</tr>
			</thead>
			<tfoot>
<!--
				<tr>
 						<div class="inner"><?php $this->load->view('admin/partials/pagination'); ?></div>
				</tr>
-->
			</tfoot>
			<tbody>
				<?php foreach( $courses as $course ): ?>
				<tr>
					<td><?php echo form_checkbox('action_to[]');?></td>
					<td><?php echo $course->course_id;?></td>
					<td><?php echo $course->course_name;?></td>
					<td>
						<?php echo anchor(site_url() . '/admin/bmc/courses/edit/' . $course->course_id, 'Edit', 'class="button confirm"');?>
						<?php echo anchor('admin/bmc/courses/delete/' . $course->course_id, 'Delete', array('class' => 'button confirm'));?>
					</td>
				<?php endforeach; ?>
			</tbody>
		</table>

</section>