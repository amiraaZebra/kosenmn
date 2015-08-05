<li>
<?php 
	echo $this->Html->link($this->Html->image("profile/".$this->Session->read('Auth.User.profile_image'),
array("alt" => "ResetPassword", "class" => "prof-pic")) . $this->Session->read('Auth.User.username'), array(
			'plugin'=>'users', 
			'controller'=>'users', 
			'action' => 'view', 
			$this->Session->read('Auth.User.id')), array('class'
=>'', 'escape' => false));
?>
</li>

<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
    <span class="glyphicon glyphicon-edit"></span>
	<?php
	    //echo '<img class= "propic" src="/img/profile/profilePhoto_'.$this->Session->read('Auth.User.username').'.jpg">';
	?>
	</a>
	<ul class="dropdown-menu">
		<li><?php echo $this->Html->link(__('Тохиргоо'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'edit', $this->Session->read('Auth.User.id'))); ?></li>
		<li class="divider"></li>
		<li><?php echo $this->Html->link(__('Гарах'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'logout')); ?></li>
	</ul>
</li>

