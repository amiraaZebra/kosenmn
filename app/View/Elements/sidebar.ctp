<ul class="nav nav-sidebar">
		<li><?php echo $this->Html->link(__('User search'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Post List'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('New Post'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Photo List'), array('plugin'=>NULL, 'controller'=>'photos', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Add Photo'), array('plugin'=>NULL, 'controller'=>'photos', 'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Kakomon List'), array('plugin'=>NULL, 'controller'=>'kakomons', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Add Kakomon'), array('plugin'=>NULL, 'controller'=>'kakomons', 'action' => 'add')); ?></li>
</ul>