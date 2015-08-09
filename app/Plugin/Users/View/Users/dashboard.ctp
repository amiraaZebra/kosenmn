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
<div class="content-container-dashboard">
	<div class="post-container" style="margin-top:20px;">
		<p><?php echo __d('users', 'Welcome'); ?> <?php echo $user[$model]['username']; ?></p>
		<p><?php echo __d('users', 'Recent broadcasts'); ?></p>
	</div>
</div>
<script>
	function SideBarTop(){
		$(".content-container").contents().unwrap();
		if($(document).width()>=768){
			$("#sidebar-kosen-wrapper").css({
				top: '200px'
			});
		}else{
			$("#sidebar-kosen-wrapper").css({
				top: '0'
			});
		}
		window.setTimeout(SideBarTop, 30);
	}
	SideBarTop();
</script>