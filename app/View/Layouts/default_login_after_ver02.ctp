<!DOCTYPE html>
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
		echo $this->Html->css('chinbaa');
		echo $this->Html->script('jquery');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');		
	?>
</head>
<body>
	<div id="container" class="container">
		<div class="row">
			<div class="page-header" style="text-align: center">
				Kosen Club
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
					<h6 class="text-center">&copyKosenClub 2014.</h6>  							
				</div>
			</div>

    	</div>
			
	</div>	
</body>
</html>

