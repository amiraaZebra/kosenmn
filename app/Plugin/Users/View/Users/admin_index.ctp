<div class="users index">
	<h2><?php echo __d('users', 'Users'); ?></h2>

	<h3><?php echo __d('users', 'Filter'); ?></h3>
	<?php
		echo $this->Form->create($model, array(
			'action' => 'admin_index'));
		echo $this->Form->input('username', array(
			'label' => __d('users', 'Username')));
		//echo $this->Form->input('email', array(
		//	'label' => __d('users', 'Email')));
		echo $this->Form->end(__d('users', 'Search'));
	?>

	<?php echo $this->element('Users.paging'); ?>
	<?php echo $this->element('Users.pagination'); ?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('email_verified'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __d('users', 'Actions'); ?></th>
		</tr>
			<?php
			$i = 0;
			foreach ($users as $user):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
			<tr<?php echo $class;?>>
				<td>
					<?php echo $user[$model]['username']; ?>
				</td>
				<td>
					<?php echo $user[$model]['email']; ?>
				</td>
				<td>
					<?php echo $user[$model]['email_verified'] == 1 ? __d('users', 'Yes') : __d('users', 'No'); ?>
				</td>
				<td>
					<?php echo $user[$model]['active'] == 1 ? __d('users', 'Yes') : __d('users', 'No'); ?>
				</td>
				<td>
					<?php echo $user[$model]['created']; ?>
				</td>
				<td class="actions">
					<?php echo $this->Html->link(__d('users', 'View'), array('action'=>'admin_view', $user[$model]['id'])); ?>
					<?php echo $this->Html->link(__d('users', 'Edit'), array('action'=>'admin_edit', $user[$model]['id'])); ?>
					<?php echo $this->Html->link(__d('users', 'Delete'), array('action'=>'delete', $user[$model]['id']), null, sprintf(__d('users', 'Are you sure you want to delete # %s?'), $user[$model]['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
	<?php echo $this->element('Users.pagination'); ?>
</div>
