<!DOCTYPE html>
<head>
	<?php echo $this->Html->charset(); ?>
	<?php echo $scripts_for_layout; ?>	

	<title>
		<?php
			$title_for_layout="KosenClub/".$this->params['controller']; 
			echo $title_for_layout; 
		?>
	</title>

	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('zoloo');
		echo $this->Html->css('dashboard');
		echo $this->Html->script('jquery');
		echo $this->Html->script('bootstrap');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
				
	?>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<?php echo $this->Html->link(__('Kosen Club'),array('controller' => 'users', 'action' => 'dashboard'),array('class'=>'navbar-brand','escape'=>false)); ?>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<?php echo $this->element('navbar');?>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php echo $this->element('profile');?>
				</ul>
			</div>
	</nav>
	<div id="container" class="container-fluid">
		<div class="row">
			<div class="page-header" >
				<?php
					//echo "Kosen Club"
					echo $this->Html->link($this->Html->image('tempHeaderPic.jpg',array('height'=>'150px','width'=>'100%')),
					array('controller' => 'users', 'action' => 'index'),array('escape'=>false)); 
				?>
			</div>
			<div class="panel panel-success">
				<div class="panel-heading">
					<?php echo $this->Session->flash();?>
				</div>
				<div class="panel-body homePanel">
				<div class="row">
				<div class="col-sm-3 col-md-2 sidebar">
					<?php echo $this->element('sidebar');?>
					<div class="text-center" style="padding-top:50px;padding-bottom:50px">
					<?php echo $this->Html->image('colleges.jpg',array('width'=>'80%'));?>
					</div>
				</div>
				<div class="col-sm-9 col-md-10 main">
  					<?php echo $this->fetch('content'); ?>
  				</div>
				</div>
  				<div class="panel-footer">						
					<h6 class="text-center">&copyKosenClub 2014.</h6>  							
				</div>
			</div>

    	</div>
			
	</div>	
</body>
</html>

