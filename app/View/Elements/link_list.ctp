<h3><?php echo __('Actions'); ?></h3>
<?php if($this->Session->read('Auth.User.role') === 'admin'){ ?>
	<ul class="list-unstyled">
		<li><button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Post List'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'index')); ?></button></li>
		<li><button type="button" class="btn btn-default"><?php echo $this->Html->link(__('New Post'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'add')); ?></button></li>
		<li><button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Find Post'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'search')); ?></button></li>
		
		<li><button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Photo List'), array('plugin'=>NULL, 'controller'=>'photos', 'action' => 'index')); ?></button></li>
		<li><button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Add Photo'), array('plugin'=>NULL, 'controller'=>'photos', 'action' => 'add')); ?></button></li>
		
		<li><button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Kakomon List'), array('plugin'=>NULL, 'controller'=>'kakomons', 'action' => 'index')); ?></button></li>
		<li><button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Add Kakomon'), array('plugin'=>NULL, 'controller'=>'kakomons', 'action' => 'add')); ?></button></li>
		
	</ul>
<?php }else{ ?>
	<ul class="list-unstyled">
		<li><button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Post List'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'index')); ?></button></li>
		<li><button type="button" class="btn btn-default"><?php echo $this->Html->link(__('New Post'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'add')); ?></button></li>
		
		<li><button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Photo List'), array('plugin'=>NULL, 'controller'=>'photos', 'action' => 'index')); ?></button></li>
		<li><button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Add Photo'), array('plugin'=>NULL, 'controller'=>'photos', 'action' => 'add')); ?></button></li>
		
		<li><button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Kakomon List'), array('plugin'=>NULL, 'controller'=>'kakomons', 'action' => 'index')); ?></button></li>
		<li><button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Add Kakomon'), array('plugin'=>NULL, 'controller'=>'kakomons', 'action' => 'add')); ?></button></li>
	</ul>
<?php }	?>		
	