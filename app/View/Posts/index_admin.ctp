<div class="row">
	<div class="panel panel-default">
  		<div class="panel-body">
	<?php  echo $this->Form->create('Post', array('action' => 'index_admin',
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
		echo $this->Form->submit('Search Post',array('class' => 'btn btn-info btn-sm'));
      	echo $this->Form->end();
      ?>		      
      &nbsp;
    </div>
    </div>
	</div>

</div>

<div class="row">
	
	<table class="table table-bordered table-striped table-overflow-hide">
		<tr>
			<th class="col-xs-1"><?php echo $this->Paginator->sort('id'); ?></th>
			<th class="col-xs-1"><?php echo $this->Paginator->sort('title'); ?></th>
			<th class="col-xs-7"><?php echo $this->Paginator->sort('text'); ?></th>
			<th class="col-xs-1"><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="col-xs-1"><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="col-xs-1"><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="col-xs-1">Actions</th>		
		</tr>
	<?php foreach (array_reverse($posts) as $post): ?>
		<tr>
			
			<td><?php echo $this->Html->link($post['Post']['id'], array(
						'controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
			</td>
			<td><?php echo $this->Html->link($post['Post']['title'], array(
						'controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
			</td>
			<td><div class="post-index-text"><?php echo html_entity_decode($post['Post']['text']); ?>&nbsp;</div></td>
			<td>
				<?php echo $this->Html->link($post['User']['username'], array('controller' => 'users', 'action' => 'view', $post['User']['username'])); ?>
			</td>
			<td><?php echo h($this->Time->format('Y.m.d',$post['Post']['created'])); ?>&nbsp;</td>
			<td><?php echo h($this->Time->format('Y.m.d',$post['Post']['modified'])); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link(__('Edit'), array(	
						'action' => 'edit', $post['Post']['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array(
						'action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>
			</td>			
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

