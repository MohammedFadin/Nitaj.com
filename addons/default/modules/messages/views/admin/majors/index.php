<?php echo form_open($this->uri->uri_string());?>
<section class="title">
	<h4><?php echo lang('sample:'.$this->method); ?></h4>
</section>

<section class="bmc_items">	
		<table>
			<thead>
				<tr>
					<th> <?php echo form_checkbox(array('name' => 'action_to_all', 'class' => 'check-all'));?>
					</th>
						<th> Major ID </th>
						<th> Majors Name</th>
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
				<?php foreach( $majors as $major ): ?>
				<tr>
					<td><?php echo form_checkbox('action_to[]', $major->major_id);?></td>
					<td><?php echo $major->major_id;?></td>
					<td><?php echo $major->major_name;?></td>
					<td>
						<?php echo anchor(site_url() . '/admin/bmc/majors/edit/' .$major->major_id, 'Edit', 'class="button confirm"');?>
						<?php echo anchor('admin/bmc/majors/delete/' . $major->major_id, 'Delete', array('class' => 'button confirm'));?>
					</td>
				<?php endforeach; ?>
			</tbody>
		</table>

</section>
<?php echo form_close();?>