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
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('kosencss');
		echo $this->Html->css('simple-sidebar');
		echo $this->Html->script('bootstrap');
		echo $this->Html->meta('icon');
		
		echo $this->Html->script('jquery');
		
		// echo $this->Html->script('dashboard');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
				
	?>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top kosen-nav">
		<div class="container-fluid" style="margin-right:10px; margin-left:20px;">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#kosen-navbar-1" aria-expanded="false" id="menu-toggle">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<?php echo $this->Html->link(__('Kosen Club'),array('controller' => 'users', 'action' => 'dashboard'),array('class'=>'navbar-brand','escape'=>false)); ?>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<?php echo $this->element('admintool');?>
					<li><a href="#">Нүүр</a></li>
					<?php echo $this->element('profile');?>
				</ul>
			</div>
		</div>
	</nav>
	<div id="wrapper">
		<!-- Sidebar -->
		<div id="sidebar-wrapper">
			<?php echo $this->element('sidebar');?>
		</div>
		<!-- /#sidebar-wrapper -->
		<!-- Page Content -->
		<div id="page-content-wrapper">
			<div class="container-fluid">
				<?php echo $this->Session->flash('auth'); ?>
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>
		<!-- /#page-content-wrapper -->
	</div>
	<!-- /#wrapper -->
	<footer class="footer">
		<div class="container">
			<h6 class="text-center">&copyKosenClub 2014.</h6>
		</div>
	</footer>
	<!-- jQuery -->
	<script src="js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Menu Toggle Script -->
	<script>
	$("#menu-toggle").click(function(e) {
	e.preventDefault();
	$("#wrapper").toggleClass("toggled");
	});
	$("#page-content-wrapper").click(function(e){
		if($("#wrapper").hasClass("toggled")){
			e.preventDefault();
			$("#wrapper").removeClass("toggled");
		}
	});
	</script>
	
</body>
</html>