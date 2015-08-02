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
		echo $this->Html->script('dashboard');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
				
	?>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            	<span class="sr-only">Toggle navigation</span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
         	 	</button>
				<?php echo $this->Html->link(__('Kosen Club'),array('controller' => 'users', 'action' => 'dashboard'),array('class'=>'navbar-brand','escape'=>false)); ?>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<?php echo $this->element('navbar');?>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php echo $this->element('profile');?>
				</ul>
			</div>
		</div>
	</div>
	<div id="container" class="container">
		<div class="row">
				<div class="row">
				    <div class="col-sm-3 col-md-2 sidebar">
					        <?php echo $this->element('sidebar');?>
				    </div>
				    <div class="col-sm-9 col-md-10 main">
                        <div class="container">
					        <?php echo $this->Session->flash('auth'); ?>
  					        <?php echo $this->fetch('content'); ?>
                        </div>
  				    </div>
				</div>
        </div>
    </div>
    <footer class="footer">						
        <h6 class="text-center">&copyKosenClub 2014.</h6>  							
	</footer>
</body>
</html>

