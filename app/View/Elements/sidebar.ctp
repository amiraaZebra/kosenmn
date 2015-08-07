<!-- Sidebar -->
<ul class="sidebar-body">
	<li class="kosen-separator-1"></li>
</ul>
<ul class="sidebar-header">
	<li class="kosen-collapse">
		<?php echo $this->Html->link(__(' Нүүр'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'dashboard'), array('class'=> 'glyphicon glyphicon-home')); ?>
	</li>
</ul>
<ul class="sidebar-body">
	<li class="kosen-collapse">
		<?php
		echo $this->Html->link($this->Html->image("profile/".$this->Session->read('Auth.User.profile_image'),
		array("class" => "prof-pic")) . $this->Session->read('Auth.User.username'), array(
		'plugin'=>'users',
		'controller'=>'users',
		'action' => 'view',
		$this->Session->read('Auth.User.id')), array('class'
		=>'', 'escape' => false));
		?>
	</li>
	<li class="kosen-collapse">
		<a id="prof-settings" href="#">Тохиргоо<span class="glyphicon glyphicon-edit"></span></a>
	</li>
	<li>
		<?php echo $this->Html->link(__('Мэдээлэл'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'index')); ?>
	</li>
	<li>
		<?php echo $this->Html->link(__('Гишүүд'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'index')); ?>
	</li>
	<li>
		<a href="#">Event</a>
	</li>
	<li>
		<?php echo $this->Html->link(__('Зургууд'), array('plugin'=>NULL, 'controller'=>'photos', 'action' => 'index')); ?>
	</li>
	<li>
		<?php echo $this->Html->link(__('Какомон'), array('plugin'=>NULL, 'controller'=>'kakomons', 'action' => 'index')); ?>
	</li>
</ul>
<ul class="sidebar-footer">
	<li class="kosen-collapse kosen-separator"></li>
	<li class="kosen-collapse">
		<?php echo $this->Html->link(__('Гарах'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'logout')); ?>
	</li>
</ul>
<ul class="sidebar-body">
	<li class="kosen-separator-2"></li>
</ul>