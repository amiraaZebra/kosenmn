<div class="slide-container">
	<div class="slides">
		<div>
			<?php
				echo $this->Html->image("test/1.jpg");
			?>
		</div>
		<div>
			<?php
				echo $this->Html->image("test/2.jpg");
			?>
		</div>
		<div>
			<?php
				echo $this->Html->image("test/3.jpg");
			?>
		</div>
		<div>
			<?php
				echo $this->Html->image("test/4.jpg");
			?>
		</div>
	</div>
	<div class="navigator">
		
		<div class="current-nav"></div>
		<div></div>
		<div></div>
		<div></div>
	</div>
	<div class="arrow-left">
	</div>
	<div class="arrow-right">
	</div>
</div>
<!-- <div class="content-container-dashboard"> -->
	<div class="post-container" style="padding-top:270px;">
		<p><?php echo __d('users', 'Welcome'); ?> <?php echo $user[$model]['username']; ?></p>
		<p><?php echo __d('users', 'Recent broadcasts'); ?></p>
	</div>
<!-- </div> -->
<script>
	$(".sura-navbar-container").show('fast');
	$(".content-container").css({
		'padding-left': '0'
	});
	function SideBar(){
		if($(window).width()<768){
			$(".sura-navbar-container").hide('fast');
			$("#sidebar-kosen-wrapper").show('fast');
		}else{
			$(".sura-navbar-container").show('fast');
			$("#sidebar-kosen-wrapper").hide('fast');
		}
		window.setTimeout(SideBar, 30);
	}
	SideBar();
	// function SideBarTop(){
	// 	$(".content-container").contents().unwrap();
	// 	if($(document).width()>=768){
	// 		$("#sidebar-kosen-wrapper").css({
	// 			top: '225px'
	// 		});
	// 	}else{
	// 		$("#sidebar-kosen-wrapper").css({
	// 			top: '0'
	// 		});
	// 	}
	// 	window.setTimeout(SideBarTop, 30);
	// }
	// SideBarTop();
</script>