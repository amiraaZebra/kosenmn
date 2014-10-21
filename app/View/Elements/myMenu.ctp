<?php if($this->Session->read('Auth.User.role') === 'admin'){ ?>

	<div id="menubutton" class="btn-group btn-group-lg">
		<?php  if($this->params['controller'] == 'users' && $this->params['action'] == 'dashboard') { ?>
			<button type="button" class="btn btn-default active">
		<?php } else{ ?>
			<button type="button" class="btn btn-default">
		<?php } ?>

			<?php echo $this->Html->link(__('Home'), array('plugin'=>'users', 'controller' => 'users', 'action' => 'dashboard')); ?></button>

		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?></button>
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Posts'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'index')); ?></button>
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Photos'), array('plugin'=>NULL, 'controller'=>'photos', 'action' => 'index')); ?></button>
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Files'), array('plugin'=>NULL, 'controller'=>'kakomons', 'action' => 'index')); ?></button>
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Logout'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'logout')); ?></button>
	</div>
	<?php //debug($this->here); ?>
	
<?php }else{ ?>
	<div id="menubutton" class="btn-group btn-group-lg">
		<button type="button" class="btn btn-default"><?php echo $this->Html->link(__('Logout'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'logout')); ?></button>
	</div>
<?php }	?>
