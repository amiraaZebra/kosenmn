
	<?php
		if (!empty($this->params['url']['year'])){
	?>	
			<div class="col-xs-offset-1">
    			<?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"></span>'."Back to Files/".$this->params['url']['university']."/".$this->params['url']['gakubu']."/", array(
             		'controller' => 'kakomons',
             		'action' => 'index_admin',
             		'?' => array(
             			'university' => $this->params['url']['university'],
             			'gakubu' => $this->params['url']['gakubu'])), array('escape'=>false)); ?>
  			</div>

  			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<h2><?php echo __($this->params['url']['university']."->".$this->params['url']['gakubu']."->".$this->params['url']['year']); ?></h2>

					<table class="table table-bordered table-striped">
						<tr>
							<th><?php echo $this->Paginator->sort('name'); ?></th>
							<th><?php echo $this->Paginator->sort('university'); ?></th>
							<th><?php echo $this->Paginator->sort('gakubu'); ?></th>
							<th><?php echo $this->Paginator->sort('year'); ?></th>
							<th><?php echo $this->Paginator->sort('other'); ?></th>
							<th><?php echo $this->Paginator->sort('created'); ?></th>
							<th><?php echo $this->Paginator->sort('user_id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					<?php
					foreach ($kakomons as $kakomon):?>
						<tr>
							<td><?php echo h($kakomon['Kakomon']['name']); ?>&nbsp;</td>
							<td><?php echo h($kakomon['Kakomon']['university']); ?>&nbsp;</td>
							<td><?php echo h($kakomon['Kakomon']['gakubu']); ?>&nbsp;</td>
							<td><?php echo h($kakomon['Kakomon']['year']); ?>&nbsp;</td>
							<td><?php echo h($kakomon['Kakomon']['other']); ?>&nbsp;</td>
							<td><?php echo h($kakomon['Kakomon']['created']); ?>&nbsp;</td>
							<td>
							<?php echo $this->Html->link($kakomon['User']['id'], array(
								'controller' => 'users', 
								'action' => 'view', 
								$kakomon['User']['id'])); ?>
							</td>
							<td class="actions">
								<?php echo $this->Html->link(__('View'), array('action' => 'view',$kakomon['Kakomon']['id'])); ?>
								<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $kakomon['Kakomon']['id']), null, 
										__('Are you sure you want to delete # %s?', $kakomon['Kakomon']['id'])); ?>
							</td>
						</tr>
					<?php endforeach;?>
					</table>

					<p>
						<?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
					</p>

					<div class="paging">
						<?php
						echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
						echo $this->Paginator->numbers(array('separator' => ''));
						echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
						?>
					</div>
		<?php	
		}
		else{
			
			if (!empty($this->params['url']['gakubu'])){ ?>
					<div class="col-xs-offset-1">
    					<?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"></span>'."Back to Files/".$this->params['url']['university']."/", array(
                			'controller' => 'kakomons',
                			'action' => 'index_admin',
                			'?' => array('university' => $this->params['url']['university'])), array('escape'=>false)); ?>
  					</div>

  				<div class="row">
					<div class="col-xs-8 col-xs-offset-2">
						<h2><?php echo __($this->params['url']['university']."->".$this->params['url']['gakubu']); ?></h2>
						<ul class="list-group">
  							<?php foreach ($year_list as $year):
								echo '<li class="list-group-item">';
								echo $this->Html->link($year,array(
									'action' => 'index_admin',
									'?' => array(
										'university' => $this->params['url']['university'],
										'gakubu' => $this->params['url']['gakubu'],
										'year' => $year)));
								echo "</li>";
							endforeach;
			}
			else{
				if (!empty($this->params['url']['university'])){ ?>

					<div class="col-xs-offset-1">
    					<?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"></span>'."Back to Files/", array(
                			'controller' => 'kakomons', 'action' => 'index_admin'), array('escape'=>false)); ?>
  					</div>

  					<div class="row">
						<div class="col-xs-8 col-xs-offset-2">
							<h2><?php echo __($this->params['url']['university']); ?></h2>
							<ul class="list-group">

  								<?php
								foreach ($gakubu_list as $gakubu):
									echo '<li class="list-group-item">';
									echo $this->Html->link($gakubu,array(
										'action' => 'index_admin',
										'?' => array(
											'university' => $this->params['url']['university'], 
											'gakubu' => $gakubu)));
									echo "</li>";
								endforeach;
				}
				else{ ?>

					<div class="row">
						<div class="col-xs-8 col-xs-offset-2">
							<h2><?php echo __('Files'); ?></h2>
							<ul class="list-group">

								<?php
								foreach ($university_list as $university):
									echo '<li class="list-group-item">';
									echo $this->Html->link($university,array(
										'action' => 'index_admin',
										'?' => array('university' => $university)));
									echo "</li>";
								endforeach;
				}
			}
			
			echo "</ul>";
		}
		
	?>
	</div>
</div>

