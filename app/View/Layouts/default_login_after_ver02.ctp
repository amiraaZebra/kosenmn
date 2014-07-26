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
	<div id="container">
		<div class="row">
			<div class="col-xs-10">
				<?php echo $this->Html->image('tempHeaderPic.jpg',array('class'=>'img-responsive')); ?>
			</div>    		    
    	</div>
		<div class="row">
			<!--(create menu)-->
			<div class="col-xs-10 bg-warning">
				<?php echo $this->element('myMenu'); ?>
			</div>
		</div>	
		<div class="row">
			<div class="col-xs-2 bg-success">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->element('link_list')?>
			</div>
  			<div class="col-xs-6">
  				<?php echo $this->fetch('content'); ?>
  			</div>
  			<div class="col-xs-2 bg-danger">
  				<?php echo $this->element('link_list')?>
  			</div>  			  			
		</div>		
	</div>	
</body>
</html>
