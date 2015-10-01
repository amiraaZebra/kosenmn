<script>
	$(".sura-navbar-container").show('fast');
	$(".slide-container").show();
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
</script>

<!-- <div class="content-container-dashboard"> -->
	<div class="post-container" style="padding-top:270px;">
		<p><?php echo __d('users', 'Welcome'); ?> <?php echo $user[$model]['username']; ?></p>
		<!-- <p><?php //echo __d('users', 'Recent broadcasts'); ?></p> -->
		<div class="row">
			<div class="user-view">
				<label>Шинэ мэдээлэл</label>
			</div>
			<div class="user-view">
				<label>Косэн клуб</label><br>
				<span>Клубын гишүүддээ энэ өдрийн мэндийг хүргэе.</span><br>
				<span>өбыоөрйдлыөо бдлоөрйыб лөрыйбо лөрйдыбөр быйдолрө дрө ыдйлөрйыдолөр йыбол рлдой рй өбыролө рйолд өролйы өрйлыдобө рдйл</span>
			</div>
		</div>
	</div>
	<div class="spacer"></div>
<!-- </div> -->