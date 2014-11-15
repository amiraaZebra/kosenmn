<!-- not used -->
<div id="menubutton" class="btn-group btn-group-vertical btn-group-lg btn-group-admin">
	<p style="text-align:center"><?php echo __('Admin tools'); ?></p>
	<button type="button" class="btn btn-default btn-admin"><?php echo $this->Html->link(__('Edit Profile'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'edit', $this->Session->read('Auth.User.id'))); ?></button>
	<button type="button" class="btn btn-default btn-admin"><?php echo $this->Html->link(__('Add User'), array('controller' => 'users', 'action' => 'admin_add')); ?> </button>
	<button type="button" class="btn btn-default btn-admin"><?php echo $this->Html->link(__('Add Photo'), array('plugin' => NULL, 'controller' => 'photos', 'action' => 'add')); ?></button>
	<button type="button" class="btn btn-default btn-admin"><?php echo $this->Html->link(__('Add File'), array('plugin' => NULL, 'controller' => 'kakomons', 'action' => 'add')); ?> </button>
	<button type="button" class="btn btn-default btn-admin"><?php echo $this->Html->link(__('File View'), array('plugin' => NULL, 'controller' => 'kakomons', 'action' => 'index_admin')); ?> </button>
	<button type="button" class="btn btn-default btn-admin"><?php echo $this->Html->link(__('New Post'), array('plugin' => NULL, 'controller' => 'posts', 'action' => 'add')); ?> </button>
	<button type="button" class="btn btn-default btn-admin"><?php echo $this->Html->link(__('Post View'), array('plugin' => NULL, 'controller' => 'posts', 'action' => 'index_admin')); ?> </button>
</div>