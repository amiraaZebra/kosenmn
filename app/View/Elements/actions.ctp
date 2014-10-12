<div id="menubutton" class="btn-group btn-group-vertical btn-group-lg">
	<h3><?php echo __('Actions'); ?></h3>
	<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('My Profile'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'view', $this->Session->read('Auth.User.id'))); ?></button>
	<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Edit Profile'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'edit', $this->Session->read('Auth.User.id'))); ?></button>
	<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Add User'), array('controller' => 'users', 'action' => 'admin_add')); ?> </button>
	<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Add Photo'), array('plugin' => NULL, 'controller' => 'photos', 'action' => 'add')); ?></button>
	<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Add File'), array('plugin' => NULL, 'controller' => 'kakomons', 'action' => 'add')); ?> </button>
	<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('New Post'), array('plugin' => NULL, 'controller' => 'posts', 'action' => 'add')); ?> </button>
</div>