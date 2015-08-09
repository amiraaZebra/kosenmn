<?php
    if($this->Session->read('Auth.User.role') === 'admin'){
?>
<li class="dropdown">
    <a href="" class="dropdown-toggle kosen-dropdown" data-toggle="dropdown">Админ меню</a>
	<ul class="dropdown-menu">
	    <li><?php echo $this->Html->link(__('Контентуудын тохиргоо'), array('plugin'=>'users', 'controller' => 'users', 'action' => 'manage_contents')); ?></li>
	    <li><?php echo $this->Html->link(__('Гишүүдийн тохиргоо'), array('plugin'=>'users', 'controller' => 'users', 'action' => 'manage_users')); ?></li>
	    <li><?php echo $this->Html->link(__('Санал асуултыг харах'), array('plugin'=>NULL, 'controller' => 'questions', 'action' => 'index')); ?></li>
	</ul>
</li>
<?php
} 
?>
