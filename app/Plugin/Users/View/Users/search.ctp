<div class="users index">
	<h2><?php echo __d('users', 'Users'); ?></h2>
	<?php
		echo $this->Form->create($model, array(
			'action' => 'search'));
		echo $this->Form->input('username', array(
			'label' => __d('users', 'Username')));
		//echo $this->Form->input('email', array(
		//	'label' => __d('users', 'Email')));
		echo $this->Form->end(__d('users', 'Search'));
	?>
	<p><?php
	echo $this->Paginator->counter(array(
		'format' => __d('users', 'Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')
	));
	?></p>

	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $this->Paginator->sort('username'); ?></th>
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
		<tr<?php echo $class; ?>>
			<td><?php echo $this->Html->link($user[$model]['username'], array('action' => 'view', $user[$model]['id'])); ?></td>
			<td><?php echo $this->Time->format('y-m-d',$user[$model]['created']); ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__d('users', 'View'), array('action' => 'view', $user[$model]['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
</div>
