<section class="title">
	<h4><?php echo lang('sample:item_list'); ?></h4>
</section>

<section class="item">
	<?php echo form_open('admin/bmc/delete');?>
	
	<?php if (!empty($items)): ?>
	<!- this is the main admin page for the module -->
	
		<table>
			<thead>
				<tr>
					<th><?php echo form_checkbox(array('name' => 'action_to_all', 'class' => 'check-all'));?></th>
					<th><?php echo lang('sample:name'); ?></th>
					<th><?php echo lang('sample:slug'); ?></th>
					<th></th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<td colspan="5">
						<div class="inner"><?php $this->load->view('admin/partials/pagination'); ?></div>
					</td>
				</tr>
			</tfoot>
			<tbody>
				<?php foreach( $items as $item ): ?>
				<tr>
					<td><?php echo form_checkbox('action_to[]', $item->id); ?></td>
					<td><?php echo $item->name; ?></td>
					<td><a href="<?php echo rtrim(site_url(), '/').'/bmc'; ?>">
						<?php echo rtrim(site_url(), '/').'/bmc'; ?></a></td>
					<td class="actions">
						<?php echo
						anchor('bmc', lang('sample:view'), 'class="button" target="_blank"').' '.
						anchor('admin/bmc/edit/'.$item->id, lang('sample:edit'), 'class="button"').' '.
						anchor('admin/bmc/delete/'.$item->id, 	lang('sample:delete'), array('class'=>'button')); ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		
		<div class="table_action_buttons">
			<?php $this->load->view('admin/partials/buttons', array('buttons' => array('delete'))); ?>
		</div>
		
	<?php else: ?>
		<div class="no_data"><?php echo lang('sample:no_items'); ?></div>
	<?php endif;?>
	
	<?php echo form_close(); ?>
</section>