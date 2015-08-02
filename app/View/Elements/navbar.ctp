<?php
    if($this->Session->read('Auth.User.role') === 'admin'){
?>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admin Tools <span class="caret"></span></a>
	<ul class="dropdown-menu" role="menu">
	    <li><?php echo $this->Html->link(__('Manage Contents'), array('plugin'=>'users', 'controller' => 'users', 'action' => 'manage_contents')); ?></li>
	    <li><?php echo $this->Html->link(__('Manage Users'), array('plugin'=>'users', 'controller' => 'users', 'action' => 'manage_users')); ?></li>
	    <li><?php echo $this->Html->link(__('Manage Questions'), array('plugin'=>NULL, 'controller' => 'questions', 'action' => 'index')); ?></li>
	</ul>
</li>
<?php
} 
?>
