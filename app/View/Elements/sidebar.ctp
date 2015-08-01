<ul class="nav nav-pills nav-stacked side-menu">
    <li><?php echo $this->Html->link(__('Dashboard'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'dashboard')); ?></li>
	<li><?php echo $this->Html->link(__('ユーザリスト'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'index')); ?></li>
	<li><?php echo $this->Html->link(__('пост лист'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'index')); ?></li>
	<li><?php echo $this->Html->link(__('Photo List'), array('plugin'=>NULL, 'controller'=>'photos', 'action' => 'index')); ?></li>
	<li><?php echo $this->Html->link(__('Kakomon List'), array('plugin'=>NULL, 'controller'=>'kakomons', 'action' => 'index')); ?></li>
</ul>
