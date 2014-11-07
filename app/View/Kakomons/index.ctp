
	<?php
		if (!empty($this->params['url']['year'])){
	?>	
			<div class="col-xs-offset-1">
    			<?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"></span>'."Back to Files/".h($this->params['url']['university'])."/".h($this->params['url']['gakubu'])."/", array(
             		'controller' => 'kakomons',
             		'action' => 'index',
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
						</tr>
					<?php
					foreach ($kakomons as $kakomon):?>
						<tr>
							<td><?php echo $this->Html->link(__(h($kakomon['Kakomon']['name'])), '/app/webroot/'.h($kakomon['Kakomon']['dir']),array('target' => '_blank')); ?></td>
							<td><?php echo h($kakomon['Kakomon']['university']); ?>&nbsp;</td>
							<td><?php echo h($kakomon['Kakomon']['gakubu']); ?>&nbsp;</td>
							<td><?php echo h($kakomon['Kakomon']['year']); ?>&nbsp;</td>
						</tr>
					<?php endforeach;?>
					</table>

		<?php	
		}
		else{
			
			if (!empty($this->params['url']['gakubu'])){ ?>
					<div class="col-xs-offset-1">
    					<?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"></span>'."Back to Files/".h($this->params['url']['university'])."/", array(
                			'controller' => 'kakomons',
                			'action' => 'index',
                			'?' => array('university' => $this->params['url']['university'])), array('escape'=>false)); ?>
  					</div>

  				<div class="row">
					<div class="col-xs-8 col-xs-offset-2">
						<h2><?php echo __(h($this->params['url']['university'])."->".h($this->params['url']['gakubu'])); ?></h2>
						<ul class="list-group">
  							<?php foreach ($year_list as $year):
								echo '<li class="list-group-item">';
								echo $this->Html->link($year,array(
									'action' => 'index',
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
                			'controller' => 'kakomons', 'action' => 'index'), array('escape'=>false)); ?>
  					</div>

  					<div class="row">
						<div class="col-xs-8 col-xs-offset-2">
							<h2><?php echo __(h($this->params['url']['university'])); ?></h2>
							<ul class="list-group">

  								<?php
								foreach ($gakubu_list as $gakubu):
									echo '<li class="list-group-item">';
									echo $this->Html->link($gakubu,array(
										'action' => 'index',
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
										'action' => 'index',
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

