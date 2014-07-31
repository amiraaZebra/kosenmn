<?php if($this->Session->read('Auth.User.role') === 'admin'){ ?>
	<div id="menubutton" class="btn-group btn-group-lg btn-right">
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Home'), array('plugin'=>'users', 'controller' => 'users', 'action' => 'dashboard')); ?></button>
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('My Profile'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'view', $this->Session->read('Auth.User.id'))); ?></button>
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Edit Profile'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'edit', $this->Session->read('Auth.User.id'))); ?></button>
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('User List'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'index')); ?></button>
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Admin_index'), array('plugin'=>'users', 'controller' => 'users', 'action' => 'admin_index')); ?> </button>
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Admin_add'), array('plugin'=>'users', 'controller' => 'users', 'action' => 'admin_add')); ?> </button>			
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Logout'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'logout')); ?></button>
	</div>
<?php }else{ ?>
	<div id="menubutton" class="btn-group btn-group-lg btn-right">
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Home'), array('plugin'=>'users', 'controller' => 'users', 'action' => 'dashboard')); ?> </button>
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('My Profile'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'view', $this->Session->read('Auth.User.id'))); ?></button>
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Edit Profile'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'edit', $this->Session->read('Auth.User.id'))); ?></button>
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('User List'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'index')); ?></button>
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Logout'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'logout')); ?></button>
	</div>
<?php }	?>
