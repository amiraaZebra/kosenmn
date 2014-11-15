<!DOCTYPE html>
<head>
	<?php echo $this->Html->charset(); ?>
	<?php echo $scripts_for_layout; ?>	

	<title>
		<?php echo $title_for_layout; ?>
	</title>

	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('zoloo');
		echo $this->Html->css('dashboard');
		echo $this->Html->script('jquery');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');		
	?>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="/kosenmn/">Kosen Club</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<?php echo $this->element('myMenu');?>
				</ul>
			</div>
	</nav>
	<div id="container" class="container">
		<div class="row">
			<div class="page-header" style="text-align: center">
				<?php
					//echo "Kosen Club"
					echo $this->Html->link($this->Html->image('tempHeaderPic.jpg',array('class'=>'img-responsive')),
					array('controller' => 'users', 'action' => 'index'),array('escape'=>false)); 
				?>
			</div>
			<div class="panel panel-success">
				<div class="panel-heading">
					<p>This is panel header</p>
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

