
<div class="row">
	<?php foreach (array_reverse($posts) as $post): ?>
	<div class="col-xs-8 col-xs-offset-2">
		<div class="panel panel-info">
			<div class="panel-heading">
    			<h3 class="panel-title">
    				<?php echo $this->Html->link($post['Post']['title']."  ".'<span class="glyphicon glyphicon-folder-open"></span>', array(
    						'controller' => 'posts', 'action' => 'view', $post['Post']['id']),
    						array('escape'=>false)); ?>
    				<div class="pull-right">
  						<?php echo h($this->Time->format('Y.m.d',$post['Post']['created'])); ?>
  					</div>
				</h3>
				
  			</div>
			<div class="panel-body">
    			<div class="post-index-text">
    				<?php echo html_entity_decode($post['Post']['text']); ?>&nbsp;
    			</div>
  			</div>
  			<div class="panel-footer clearfix">
  				<div class="pull-right">
  					<span class="glyphicon glyphicon-user"></span>
  					<?php echo $this->Html->link($post['User']['username'], array('controller' => 'users', 'action' => 'view', $post['User']['username'])); ?>
  				</div>
  			</div>
		</div>
	</div>
	<?php endforeach; ?>
</div>
<div class="row">
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

