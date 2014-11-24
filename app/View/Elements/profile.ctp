		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php
			echo '<img class= "propic" src="img/profile/profilePhoto_'.$user[$model]['username'].'.jpg">';         
			echo $user[$model]['username'];			
			?><span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
				<li><?php echo $this->Html->link(__('View My Profile'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'view', $this->Session->read('Auth.User.id'))); ?></li>
				<li><?php echo $this->Html->link(__('Edit My Profile'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'edit', $this->Session->read('Auth.User.id'))); ?></li>
				<li class="divider"></li>
				<li><?php echo $this->Html->link(__('Logout'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'logout')); ?></li>
			</ul>
		</li>
