<?php if($this->Session->read('Auth.User.role') === 'admin'){ ?>
	    <li class="dropdown">
	    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin Tools <span class="caret"></span></a>
	    	<ul class="dropdown-menu" role="menu">
	    		<li><?php echo $this->Html->link(__('Add User'), array('controller' => 'users', 'action' => 'admin_add')); ?></li>
	    		<li><?php echo $this->Html->link(__('Add Admin'), array('plugin'=>'users', 'controller' => 'users', 'action' => 'admin_add')); ?></li>
	    		<li><?php echo $this->Html->link(__('User List'), array('plugin'=>'users', 'controller' => 'users', 'action' => 'admin_index')); ?></li>
	    	</ul>
	    </li>
<?php } ?>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Profile <span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<li><?php echo $this->Html->link(__('View My Profile'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'view', $this->Session->read('Auth.User.id'))); ?></li>
				<li><?php echo $this->Html->link(__('Edit My Profile'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'edit', $this->Session->read('Auth.User.id'))); ?></li>
				<li class="divider"></li>
				<li><?php echo $this->Html->link(__('Logout'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'logout')); ?></li>
			</ul>
		</li>
