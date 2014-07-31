<div>
	<?php 
	echo $this->Form->create('Post', array('action' => 'index','action' => 'index',
			'class' => 'form-horizontal',
			'role' => 'form',
			));
			
	?>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Title</label>
		<div class="col-sm-10">
		  <?php
			  echo $this->Form->input('title', array(
				'label' => false,
				'class' => 'form-control'));
		  ?>
		</div>
	</div>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
		<div class="col-sm-10">
		  <?php
			  echo $this->Form->input('user_id', array(
				'label' => false,
				'class' => 'form-control',
				'options'=>$userlists));
		  ?>
		</div>
	</div>
	
    <div class="col-xs-offset-6 col-xs-10">		      
      <?php
		echo $this->Form->submit('Search Post',array('class' => 'btn btn-default'));
      	echo $this->Form->end();
      ?>		      
    </div>


	
	<table class="table table-bordered table-striped">
		<tr>		
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('text'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>			
		</tr>
	<?php foreach (array_reverse($posts) as $post): ?>
		<tr>
			
			
			<td><?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?></td>
			<td><?php echo html_entity_decode($post['Post']['text']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($post['User']['username'], array('controller' => 'users', 'action' => 'view', $post['User']['username'])); ?>
			</td>
			<td><?php echo h($this->Time->format('y-m-d',$post['Post']['created'])); ?>&nbsp;</td>			
		</tr>
		<?php endforeach; ?>
	</table>
	
	<p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?>	
	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

