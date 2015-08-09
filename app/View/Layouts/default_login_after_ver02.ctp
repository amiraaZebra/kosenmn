<!DOCTYPE html>
<head>
	<?php echo $this->Html->charset(); ?>
	<?php echo $scripts_for_layout; ?>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<title>
	<?php
		$title_for_layout="KosenClub/".$this->params['controller'];
		echo $title_for_layout;
	?>
	</title>
	<?php
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('kosencss');
		echo $this->Html->css('kosenposts');
		echo $this->Html->css('sura-slider');
		echo $this->Html->script('jquery');
		echo $this->Html->script('bootstrap');
		echo $this->Html->meta('icon');
		echo $this->Html->css('stickyfooter');
		echo $this->Html->script('stickyfooter');
		
		
		// echo $this->Html->script('dashboard');
		echo $this->fetch('meta');
		echo $this->fetch('css');
					echo $this->fetch('script');
	?>
	<script>
		$(window).load(function() {
			$(".kosen-footer").stickyFooter();
		});
	</script>
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
					<li>
						<?php echo $this->Html->link(__(''), array('plugin'=>'users', 'controller'=>'users', 'action' => 'dashboard'), array('class'=> 'glyphicon glyphicon-home home')); ?>
					</li>
					<?php echo $this->element('profile');?>
				</ul>
			</div>
		</div>
	</nav>
	<div class="kosen-wrapper">
		<!-- Sidebar -->
		<div id="sidebar-kosen-wrapper">
			<?php echo $this->element('sidebar');?>
		</div>
		<!-- /#sidebar-kosen-wrapper -->
		<!-- content Content -->
		<div class="kosen-container">
			<div id="content-kosen-wrapper">
				<div class="content-container">
					<?php echo $this->Session->flash('auth'); ?>
					<?php echo $this->fetch('content'); ?>
				</div>
			</div>
		</div>
		<!-- /.kosen-container -->
	</div>
	<!-- /.kosen-wrapper -->
	<div class="kosen-footer">
		<div class="container">
			<h6 class="text-center">&copyKosenClub 2014.</h6>
		</div>
	</div>
	<?php
		echo $this->Html->script('sura-slider');
	?>
	<!-- Menu Toggle Script -->
	<script>
	var styles = {
	width : "100%",
	height: "auto"
	};
	$("#menu-toggle").click(function(e) {
	e.preventDefault();
	$(".kosen-wrapper").toggleClass("toggled");
	$(".kosen-footer").toggleClass("toggled");
	});
	$("#content-kosen-wrapper").click(function(e){
		if($(".kosen-wrapper").hasClass("toggled")){
			e.preventDefault();
			$(".kosen-wrapper").removeClass("toggled");
			$(".kosen-footer").removeClass("toggled");
		}
	});
	$( ".post-content" ).children("p").children("img").css(styles);
	$( ".post-content p" ).addClass('post-content-p');
	$(".post-content img").unwrap();
	$( ".post-content img" ).wrap("<div class='post-image'></div>");
	$( ".post-content" ).children("img").wrap("<div class='post-image'></div>");
	</script>
</body>
</html>