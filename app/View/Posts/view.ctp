
<div class="row">
  <div class="col-xs-offset-1">
    <?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"></span>'."Back to Post", array(
                'controller' => 'posts', 'action' => 'index'), array('escape'=>false)); ?>
  </div>
</div>
<div class="row">

	<div class="col-xs-8 col-xs-offset-2">
		<div class="panel panel-info">
			<div class="panel-heading">
    			<h3 class="panel-title">
    				<?php echo h(html_entity_decode($post['Post']['title'])); ?>&nbsp;
    				<div class="pull-right">
  						<?php echo h($this->Time->format('Y.m.d',$post['Post']['created'])); ?>
  					</div>
				</h3>
				
  			</div>
			<div class="panel-body">
    			<div class="post-view-text">
    				<?php echo html_entity_decode(h($post['Post']['text'])); ?>&nbsp;
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
	
</div>
