<!-- navbar -->

<div class="sura-navbar-container">
	<ul>
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
</div>