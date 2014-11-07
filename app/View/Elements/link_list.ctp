<?php if($this->Session->read('Auth.User.role') === 'admin'){ ?>
	<div id="menubutton" class="btn-group btn-group-vertical btn-group-lg btn-group-sidebar">
		<p style="text-align:center"><?php echo __('Actions'); ?></p>
		<button type="button" class="btn btn-default btn-sidebar"><?php echo $this->Html->link(__('My Profile'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'view', $this->Session->read('Auth.User.id'))); ?></button>
		<button type="button" class="btn btn-default btn-sidebar"><?php echo $this->Html->link(__('Edit Profile'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'edit', $this->Session->read('Auth.User.id'))); ?></button>
		<button type="button" class="btn btn-default btn-sidebar"><?php echo $this->Html->link(__('Admin_index'), array('plugin'=>'users', 'controller' => 'users', 'action' => 'admin_index')); ?> </button>
		<button type="button" class="btn btn-default btn-sidebar"><?php echo $this->Html->link(__('Admin_add'), array('plugin'=>'users', 'controller' => 'users', 'action' => 'admin_add')); ?> </button>			
		<button type="button" class="btn btn-default btn-sidebar"><?php echo $this->Html->link(__('Post List'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'index')); ?></button>
		<button type="button" class="btn btn-default btn-sidebar"><?php echo $this->Html->link(__('New Post'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'add')); ?></button>
		<button type="button" class="btn btn-default btn-sidebar"><?php echo $this->Html->link(__('Photo List'), array('plugin'=>NULL, 'controller'=>'photos', 'action' => 'index')); ?></button>
		<button type="button" class="btn btn-default btn-sidebar"><?php echo $this->Html->link(__('Add Photo'), array('plugin'=>NULL, 'controller'=>'photos', 'action' => 'add')); ?></button>
		<button type="button" class="btn btn-default btn-sidebar"><?php echo $this->Html->link(__('Kakomon List'), array('plugin'=>NULL, 'controller'=>'kakomons', 'action' => 'index')); ?></button>
		<button type="button" class="btn btn-default btn-sidebar"><?php echo $this->Html->link(__('Add Kakomon'), array('plugin'=>NULL, 'controller'=>'kakomons', 'action' => 'add')); ?></button>
	</div>
<?php }else{ ?>
	<div id="menubutton" class="btn-group btn-group-vertical btn-group-lg btn-group-sidebar">
		<p style="text-align:center"><?php echo __('Actions'); ?></p>
		<button type="button" class="btn btn-default btn-sidebar"><?php echo $this->Html->link(__('Post List'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'index')); ?></button>
		<button type="button" class="btn btn-default btn-sidebar"><?php echo $this->Html->link(__('New Post'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'add')); ?></button>
		<button type="button" class="btn btn-default btn-sidebar"><?php echo $this->Html->link(__('Photo List'), array('plugin'=>NULL, 'controller'=>'photos', 'action' => 'index')); ?></button>
		<button type="button" class="btn btn-default btn-sidebar"><?php echo $this->Html->link(__('Add Photo'), array('plugin'=>NULL, 'controller'=>'photos', 'action' => 'add')); ?></button>
		<button type="button" class="btn btn-default btn-sidebar"><?php echo $this->Html->link(__('Kakomon List'), array('plugin'=>NULL, 'controller'=>'kakomons', 'action' => 'index')); ?></button>
		<button type="button" class="btn btn-default btn-sidebar"><?php echo $this->Html->link(__('Add Kakomon'), array('plugin'=>NULL, 'controller'=>'kakomons', 'action' => 'add')); ?></button>

	</div>
<?php }	?>		
	