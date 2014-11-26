<div>
	<?php
		echo $this->Form->create($model, array(
			'action' => 'index',
			'class' => 'form-horizontal',
			'role' => 'form',
			'id' => 'LoginForm'));			
	?>		
			
	<div class="form-group">
		<label for="inputEmail3" class="col-xs-2 control-label">Username</label>
		<div class="col-sm-10">
		  <?php
			  echo $this->Form->input('username', array(
				'label' => false,
				'class' => 'form-control',
				'id'=>'username'));
		  ?>
		</div>
	</div>	
	<div class="col-xs-offset-6 col-xs-10">		      
	      <?php
			echo $this->Form->submit('Search User',array('class' => 'btn btn-default'));
	      	echo $this->Form->end();
	      ?>		      
	</div>
	
	
	<p><?php
	echo $this->Paginator->counter(array(
		'format' => __d('users', 'Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')
	));
	?></p>

	<table class="table table-striped table-bordered">
		<tr>
			<th><?php echo "profilePhoto"; ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('kosen_year'); ?></th>
			<th><?php echo $this->Paginator->sort('kosen_roman'); ?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($users as $user):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
			?>
			<tr<?php echo $class; ?>>
				<td><?php echo $this->Html->image($user[$model]['profile_image'], array('width'=>'100')); ?></td>
				<td><?php echo $this->Html->link($user[$model]['username'], array('action' => 'view', $user[$model]['id'])); ?></td>
				<td><?php echo $user[$model]['first_name']; ?></td>
				<td><?php echo $user[$model]['last_name']; ?></td>
				<td><?php echo $user[$model]['kosen_year']; ?></td>
				<td><?php echo $user[$model]['kosen_roman']; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
	<?php echo $this->element('Users.pagination'); ?>
</div>
