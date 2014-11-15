<?php if($this->Session->read('Auth.User.role') === 'admin'){ ?>
		<li><?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Posts'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Photos'), array('plugin'=>NULL, 'controller'=>'photos', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Files'), array('plugin'=>NULL, 'controller'=>'kakomons', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Logout'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'logout')); ?></li>
<?php }else{ ?>
		<li><?php echo $this->Html->link(__('Logout'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'logout')); ?></li>
<?php }	?>
