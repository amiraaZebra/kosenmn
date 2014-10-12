<?php

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<head>
	<?php echo $this->Html->charset(); ?>
	<?php echo $scripts_for_layout; ?>
	
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

//		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->Html->script('jquery');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');		
	?>
</head>

<body>
	<div id="container" class="container">
		<div class="row">
			<div class="col-sm-12 page-header">
				<?php
					echo $this->Html->link($this->Html->image('tempHeaderPic.jpg',array('class'=>'img-responsive')),
					array('controller' => 'users', 'action' => 'index'),array('escape'=>false)); 
				?>
			</div>    		    
    	</div>
		<div class="row">
			<!--(create menu)-->
			<div class="col-sm-12">
				<?php echo $this->element('myMenu'); ?>
			</div>
		</div>	
		<div class="row">
			<div class="col-sm-3">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->element('link_list')?>
			</div>
  			<div class="col-sm-6 panel panel-default">
  				<?php echo $this->fetch('content'); ?>
  			</div>
  			<div class="col-sm-3">
  				<?php echo $this->element('actions'); ?>  				
  			</div>  			  			
		</div>
		<div class="row my-panel-footer">			
			<div class="col-sm-12">
				<h6 class="text-center">KosenClub 2014.</h6>  							
  			</div>
		</div>				
	</div>	
</body>
</html>

