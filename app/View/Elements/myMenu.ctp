<?php if($this->Session->read('Auth.User.role') === 'admin'){ ?>
	<ul class="list-inline-right">
		<li><?php echo $this->Html->link(__('Home'), array('plugin'=>'users', 'controller' => 'users', 'action' => 'dashboard')); ?> </li>
		<li><?php echo $this->Html->link(__('My Profile'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'view', $this->Session->read('Auth.User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Edit Profile'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'edit', $this->Session->read('Auth.User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('User List'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Admin_index'), array('plugin'=>'users', 'controller' => 'users', 'action' => 'admin_index')); ?> </li>
		<li><?php echo $this->Html->link(__('Admin_add'), array('plugin'=>'users', 'controller' => 'users', 'action' => 'admin_add')); ?> </li>			
		<li><?php echo $this->Html->link(__('Logout'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'logout')); ?></li>
	</ul>
<?php }else{ ?>
	<ul class="list-inline-right">
		<li><?php echo $this->Html->link(__('Home'), array('plugin'=>'users', 'controller' => 'users', 'action' => 'dashboard')); ?> </li>
		<li><?php echo $this->Html->link(__('My Profile'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'view', $this->Session->read('Auth.User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Edit Profile'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'edit', $this->Session->read('Auth.User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('User List'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Logout'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'logout')); ?></li>
	</ul>
<?php }	?>
