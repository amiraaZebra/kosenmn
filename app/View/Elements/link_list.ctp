<h3><?php echo __('Actions'); ?></h3>
<?php if($this->Session->read('Auth.User.role') === 'admin'){ ?>
	<div id="menubutton" class="btn-group btn-group-vertical btn-group-lg">
		
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Post List'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'index')); ?></button>
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('New Post'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'add')); ?></button>
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Photo List'), array('plugin'=>NULL, 'controller'=>'photos', 'action' => 'index')); ?></button>
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Add Photo'), array('plugin'=>NULL, 'controller'=>'photos', 'action' => 'add')); ?></button>
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Kakomon List'), array('plugin'=>NULL, 'controller'=>'kakomons', 'action' => 'index')); ?></button>
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Add Kakomon'), array('plugin'=>NULL, 'controller'=>'kakomons', 'action' => 'add')); ?></button>
			

	</div>
<?php }else{ ?>
	<div id="menubutton" class="btn-group btn-group-vertical btn-group-lg">

		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Post List'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'index')); ?></button>
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('New Post'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'add')); ?></button>
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Photo List'), array('plugin'=>NULL, 'controller'=>'photos', 'action' => 'index')); ?></button>
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Add Photo'), array('plugin'=>NULL, 'controller'=>'photos', 'action' => 'add')); ?></button>
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Kakomon List'), array('plugin'=>NULL, 'controller'=>'kakomons', 'action' => 'index')); ?></button>
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Add Kakomon'), array('plugin'=>NULL, 'controller'=>'kakomons', 'action' => 'add')); ?></button>

	</div>
<?php }	?>		
	