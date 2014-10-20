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
		echo $this->Html->css('zoloo');
		echo $this->Html->script('jquery');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');		
	?>
</head>

<body class="bodyClass">

	<div id="container" class="container">
		<div class="row">
			<div class="page-header">
				<?php
					//echo $this->Html->link($this->Html->image('tempHeaderPic.jpg',array('class'=>'img-responsive')),
					//array('controller' => 'users', 'action' => 'index'),array('escape'=>false)); 
				?>
			</div>
			<div class="panel panel-success">
				<div class="panel-heading">
					<?php echo $this->element('myMenu'); ?>
				</div>

				<div class="panel-body homePanel">
  					<?php echo $this->fetch('content'); ?>
  				</div>

  				<div class="panel-footer">			
			
					<h6 class="text-center">KosenClub 2014.</h6>  							
  				
				</div>
			</div>

    	</div>
			
	</div>	
</body>
</html>

