<?php echo form_open('admin/bmc/delete/');?>
<section class="title">
	<h4><?php echo lang('sample:files_list_page'); ?></h4>
</section>

<section class="bmc_items">	
		<table>
			<thead>
				<tr>
					<th> <?php echo form_checkbox(array('name' => 'action_to_all', 'class' => 'check-all'));?>
					</th>
					<th> Material Type </th>
					<th> Material Name </th>
					<th> Material Link </th>
					<th> Actions </th>
				</tr>
			</thead>
			<tfoot>
				<tr>
<!-- 						<div class="inner"><?php $this->load->view('admin/partials/pagination'); ?></div> -->
				</tr>
			</tfoot>
			<tbody>
				<?php foreach( $uploaded_materials as $material ): ?>
				<tr>
					<td><?php echo form_checkbox('action_to[]', $material->material_id);?></td>
					<td><?php echo $material->material_type_name;?></td>
					<td><?php echo $material->material_name;?></td>
					<td><a href="./resources/uploads/<?php echo $material->material_link;?>">Download</a></td>
					<td class="actions">
						<?php echo anchor('admin/bmc/edit/' . $material->material_id, 'Edit', 'class="button confirm"');?>
						<?php echo anchor('admin/bmc/delete/' . $material->material_id, 'Delete', array('class' => 'button confirm'));?>
					</td>
				<?php endforeach; ?>
			</tbody>
		</table>
		<div class="table_action_buttons">
			<?php $this->load->view('admin/partials/buttons', array('buttons' => array('delete'))) ?>
		</div>

</section>
<?php echo form_close();?>