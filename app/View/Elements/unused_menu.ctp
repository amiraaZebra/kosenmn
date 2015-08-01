

	<div id="menubutton" class="btn-group btn-group-lg btn-group-menubar">
		<?php  if($this->params['controller'] == 'users' && $this->params['action'] == 'dashboard') { ?>
			<button type="button" class="btn btn-default btn-menubar active">
		<?php } else{ ?>
			<button type="button" class="btn btn-default btn-menubar">
		<?php } ?>

			<?php echo $this->Html->link(__('Home'), array('plugin'=>'users', 'controller' => 'users', 'action' => 'dashboard')); ?></button>

		<button type="button" class="btn btn-default btn-menubar"><?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?></button>
		<button type="button" class="btn btn-default btn-menubar"><?php echo $this->Html->link(__('Posts'), array('plugin'=>NULL, 'controller'=>'posts', 'action' => 'index')); ?></button>
		<button type="button" class="btn btn-default btn-menubar"><?php echo $this->Html->link(__('Photos'), array('plugin'=>NULL, 'controller'=>'photos', 'action' => 'index')); ?></button>
		<button type="button" class="btn btn-default btn-menubar"><?php echo $this->Html->link(__('Files'), array('plugin'=>NULL, 'controller'=>'kakomons', 'action' => 'index')); ?></button>
		<button type="button" class="btn btn-default btn-menubar"><?php echo $this->Html->link(__('Logout'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'logout')); ?></button>
	</div>
	<?php //debug($this->here); ?>
	

