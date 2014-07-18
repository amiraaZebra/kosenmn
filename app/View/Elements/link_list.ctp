<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<?php if($this->Session->read('Auth.User.role') === 'admin'){ ?>
		<ul>
			<li><?php echo $this->Html->link(__('Post List'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New Post'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Find Post'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'search')); ?></li>
			
			<li><?php echo $this->Html->link(__('Photo List'), array('plugin'=>NULL, 'controller'=>'photos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Add Photo'), array('plugin'=>NULL, 'controller'=>'photos', 'action' => 'add')); ?></li>
			
			<li><?php echo $this->Html->link(__('Kakomon List'), array('plugin'=>NULL, 'controller'=>'kakomons', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Add Kakomon'), array('plugin'=>NULL, 'controller'=>'kakomons', 'action' => 'add')); ?></li>
			
		</ul>
	<?php }else{ ?>
		<ul>
			<li><?php echo $this->Html->link(__('Post List'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New Post'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('Find Post'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'search')); ?></li>
			
			<li><?php echo $this->Html->link(__('Photo List'), array('plugin'=>NULL, 'controller'=>'photos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Add Photo'), array('plugin'=>NULL, 'controller'=>'photos', 'action' => 'add')); ?></li>
			
			<li><?php echo $this->Html->link(__('Kakomon List'), array('plugin'=>NULL, 'controller'=>'kakomons', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Add Kakomon'), array('plugin'=>NULL, 'controller'=>'kakomons', 'action' => 'add')); ?></li>
		</ul>
	<?php }	?>		
</div>