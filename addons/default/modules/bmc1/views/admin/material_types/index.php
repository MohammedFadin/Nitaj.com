<?php echo form_open('admin/bmc/material_types/delete/');?>
<section class="title">
	<h4><?php echo lang('sample:'.$this->method); ?></h4>
</section>

<section class="bmc_items">	
		<table>
			<thead>
				<tr>
					<th> <?php echo form_checkbox(array('name' => 'action_to_all', 'class' => 'check-all'));?>
					</th>
					<th> Material Types </th>
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
				<?php foreach( $types as $type ): ?>
				<tr>
					<td><?php echo form_checkbox('action_to[]', $type->material_type_id);?></td>
					<td><?php echo $type->material_type_name;?></td>
					<td>
						<?php echo anchor('admin/bmc/material_types/edit/' . $type->material_type_id, 'Edit', 'class="button confirm"');?>
						<?php echo anchor('admin/bmc/material_types/delete/' . $type->material_type_id, 'Delete', array('class' => 'button confirm'));?>
					</td>
				<?php endforeach; ?>
			</tbody>
		</table>
		<div class="table_action_buttons">
			<?php $this->load->view('admin/partials/buttons', array('buttons' => array('delete')));?>
		</div>
</section>
<?php echo form_close();?>