<?php if ($comments): ?>
	<h3> Doctors Comments </h3>
	<hr>
	<?php foreach ($comments as $item): ?>
		
		<div class="comment">
			<div class="image">
				<?php echo gravatar($item->user_email, 60) ?>
			</div>
			<div class="details">
				<div class="name">
					<?php echo 'Dr.'.$item->user_name ?>
				</div>
				<div class="date">
					<p><?php echo format_date($item->created_on) ?></p>
				</div>
				<div class="content">
					<?php if (Settings::get('comment_markdown') and $item->parsed): ?>
						<?php echo $item->parsed ?>
					<?php else: ?>
						<p><?php echo nl2br($item->comment) ?></p>
					<?php endif ?>
				</div>
			</div>
		</div><!-- close .comment -->
	<hr>
	<?php endforeach ?>
	
<?php else: ?>
	<h4><?php echo lang('comments:no_comments') ?></h4>
<?php endif ?>