<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Add Photo'), array(
			'controller' => 'photos', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Add File'), array(
			'controller' => 'kakomons', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array(
			'controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array(
			'controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array(
			'controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>