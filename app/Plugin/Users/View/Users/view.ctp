<script>
	$("#sidebar-kosen-wrapper").show();
	function ScaleProfImg(){
		slideWidth = $(".prof-img-container").width();
		slideHeight = $(".prof-img-container").height();
		ratioFrame = slideWidth/slideHeight;
		$("img.prof-img").each(function(index, el) {
			var ratioImage = $(this).width()/$(this).height();
			if(ratioFrame>ratioImage){
				$(this).width(slideWidth);
				$(this).css({
					'height': 'auto'
				});
			}
			else{
				$(this).height(slideHeight);
				$(this).css({
					'width': 'auto'
				});
			}
		});
		window.setTimeout(ScaleProfImg, 30);
	}
	ScaleProfImg();
</script>
<div class="post-container">
	<div class="row user-view">
		<div class="col-xs-5 col-sm-4 col-md-3 prof-img-container">
			<?php
				echo $this->Html->image("profile/".$user[$model]['profile_image'], array('class'=>'prof-img'));
			?>
		</div>
		<div class="col-xs-7 col-sm-8 col-md-9 user-name-container">
			<div class="user-name">
				<?php
					$last_name = $user[$model]['last_name'];
					$first_name = $user[$model]['first_name'];
					if($last_name!="" && $first_name!=""){
						echo $this->Html->link(substr($last_name, 0, 2).".".$user[$model]['first_name'], array('plugin'=>'users', 'controller'=>'users', 'action' => 'view/' . $user[$model]['id']));
						// echo substr($last_name, 0, 2).".".$user[$model]['first_name'];
					}
					else if($first_name!=""){
						echo $this->Html->link($user[$model]['first_name'], array('plugin'=>'users', 'controller'=>'users', 'action' => 'view/' . $user[$model]['id']));
					}
					else{
						echo $this->Html->link($user[$model]['username'], array('plugin'=>'users', 'controller'=>'users', 'action' => 'view/' . $user[$model]['id']));
					}
					echo $this->Html->link("/Косэн ".$user[$model]['kosen_year']."/", "");
				?>
				<div class="user-contact">
					<?php
						if($user[$model]['email']!='' || $user[$model]['fb_acc']!=''){
							echo "<span>холбогдох:</span>";
						}
					?>
					<?php
						if($user[$model]['email']!=''){
							echo $this->Html->link($this->Html->image('snicons/email.png'), 'mailto:'.$user[$model]['email'],array('escape'=>false));
						}
						if($user[$model]['fb_acc']!=''){
							echo $this->Html->link($this->Html->image('snicons/facebook.png'), 'http://www.facebook.com/'.$user[$model]['fb_acc'],array('escape'=>false));
						}
					?>
				</div>
			</div>
			
		</div>
	</div>
	<div class="user-detail">
		<label>Профил</label>
		<div class="user-detail-container row">
			<div class="col-xs-12 col-sm-4 col-md-3 user-name-container user-table-1">Нэр</div>
			<div class="col-xs-12 col-sm-8 col-md-9 user-name-container">
				<?php
					if($user[$model]['last_name']!='' && $user[$model]['first_name']!=''){
						echo $user[$model]['last_name'].' '.$user[$model]['first_name'];
					}
					else if($user[$model]['first_name']!=''){echo $user[$model]['first_name'];}
					else{echo "<span class='user-table-1'>Мэдээлэл алга<span>";}
					?>
				</div>
			</div>
			<div class="user-detail-container row">
				<div class="col-xs-12 col-sm-4 col-md-3 user-name-container user-table-1">Хүйс</div>
				<div class="col-xs-12 col-sm-8 col-md-9 user-name-container">
					<?php
						if(!empty($user[$model]['gender'])){
							if($user[$model]['gender']){
								echo 'эрэгтэй';
							}else{
								echo 'эмэгтэй';
								};
						}else {
							echo "<span class='user-table-1'>Мэдээлэл алга<span>";
										}
						?>
					</div>
				</div>
				<div class="user-detail-container row">
					<?php
						if($user[$model]['birthday']!=''){
					?>
					<div class="col-xs-12 col-sm-4 col-md-3 user-name-container user-table-1">Төрсөн өдөр</div>
					<div class="col-xs-12 col-sm-8 col-md-9 user-name-container">
						<?php echo $this->Time->format('Y.m.d', $user[$model]['birthday']); ?>
					</div>
					<?php
						}
					?>
				</div>
			</div>
			<div class="user-detail">
				<label>Холбоо хаяг</label>
				<div class="user-detail-container row">
					<div class="col-xs-12 col-sm-4 col-md-3 user-name-container user-table-1">Имэйл</div>
					<div class="col-xs-12 col-sm-8 col-md-9 user-name-container"><?php echo $user[$model]['email']; ?>
					</div>
				</div>
				<div class="user-detail-container row">
					<?php
					if($user[$model]['phone_number_mon']!='' || $user[$model]['phone_number_jap']!=''){
					?>
					<div class="col-xs-12 col-sm-4 col-md-3 user-name-container user-table-1">Утас</div>
					<div class="col-xs-12 col-sm-8 col-md-9 user-name-container">
						<?php
						if($user[$model]['phone_number_mon']!=''){
						echo "<span  class='user-table-1'>[ Монгол ]: </span>".$user[$model]['phone_number_mon'];
						}
						if($user[$model]['phone_number_mon']!='' && $user[$model]['phone_number_jap']!=''){
							echo '<br>';
						}
						if($user[$model]['phone_number_jap']!=''){
						echo "<span class='user-table-1'>[ Япон ]: </span>".$user[$model]['phone_number_jap'];
						}
						?>
					</div>
					</div>
					<div class="user-detail-container row">
						<?php
							}
						?>
						<?php
							if($user[$model]['country']!='' || $user[$model]['city']!=''){
						?>
						
					<div class="col-xs-12 col-sm-4 col-md-3 user-name-container user-table-1">Амьдарч буй хот</div>
					<div class="col-xs-12 col-sm-8 col-md-9 user-name-container">
						<?php
						if($user[$model]['country']!=''){
						echo $user[$model]['country'].' улс';
						}
						if($user[$model]['country']!='' && $user[$model]['city']!=''){echo ', ';}
						if($user[$model]['city']!=''){
						echo $user[$model]['city'].' хот';
						}
						?>
					</div>
				</div>
				<?php
					}
				?>
			</div>
			<div class="user-detail">
				<label>Товч намтар</label>
						<?php
								if($user[$model]['high_school']!=''){
						?>
						<div class="user-detail-container row">
							<div class="col-xs-12 col-sm-4 col-md-3 user-name-container user-table-1">Ахлах сургууль</div>
							<div class="col-xs-12 col-sm-8 col-md-9 user-name-container"><?php echo $user[$model]['high_school']; ?></div>
						</div>
						<?php
							}
						?>
						<?php
							if($user[$model]['university1']!=''){
						?>
						<div class="user-detail-container row">
							<div class="col-xs-12 col-sm-4 col-md-3 user-name-container user-table-1">Өмнөх Их Сургууль</div>
							<div class="col-xs-12 col-sm-8 col-md-9 user-name-container">
								<?php
								echo $user[$model]['university1'];
								if($user[$model]['course1']!=''){
									echo ' ('.$user[$model]['course1'].')';
								}
								?>
							</div>
						</div>
						<?php
							}
						?>
						<?php
							if($user[$model]['kosen_year']!=''){
						?>
						<div class="user-detail-container row">
							<div class="col-xs-12 col-sm-4 col-md-3 user-name-container user-table-1">Ирсэн он</div>
							<div class="col-xs-12 col-sm-8 col-md-9 user-name-container"><?php echo $user[$model]['kosen_year']; ?></div>
						</div>
						<?php
							}
						?>
						<div class="user-detail-container row">
							<div class="col-xs-12 col-sm-4 col-md-3 user-name-container user-table-1">Косэн</div>
							<!-- мэргэжил -->
							<div class="col-xs-12 col-sm-8 col-md-9 user-name-container">
								<?php
								if($user[$model]['kosen_roman']!='' || $user[$model]['kosen_kanji']!=''){
									if($user[$model]['kosen_roman']!=''){
										echo $user[$model]['kosen_roman'];
									}
									if($user[$model]['kosen_roman']!='' && $user[$model]['kosen_kanji']!=''){
										echo " (";
									}
									if($user[$model]['kosen_kanji']){
										echo $user[$model]['kosen_kanji'];
									}
									if($user[$model]['kosen_roman']!='' && $user[$model]['kosen_kanji']!=''){
										echo ")";
									}
								}
								else{
									echo "<span class='user-table-1'>Мэдээлэл алга</span>";
								}
								if($user[$model]['major']!=''){
								echo '<br>'.$user[$model]['major'];
								}
								?>
							</div>
						</div>
						<?php
							if($user[$model]['university2']!=''){
						?>
						<div class="user-detail-container row">
							<div class="col-xs-12 col-sm-4 col-md-3 user-name-container user-table-1">Дараах Их Сургууль</div>
							<div class="col-xs-12 col-sm-8 col-md-9 user-name-container">
								<?php
								echo $user[$model]['university2'];
								if($user[$model]['course2']!=''){
									echo ' ('.$user[$model]['course2'].')';
								}
								?>
							</div>
						</div>
						<?php
							}
						?>
						<?php
							if($user[$model]['status']!=''){
						?>
						<div class="user-detail-container row">
							<div class="col-xs-12 col-sm-4 col-md-3 user-name-container user-table-1"><b>Одоогийн статус</b></div>
							<div class="col-xs-12 col-sm-8 col-md-9 user-name-container">
							<b><?php echo $user[$model]['status']; ?></b>
							</div>
						</div>
						<?php
							if($user[$model]['work1']!=''){
						?>
						<div class="user-detail-container row">
							<div class="col-xs-12 col-sm-4 col-md-3 user-name-container user-table-1" style="padding-left:30px">Ажлын нэр</div class="col-xs-12 col-sm-8 col-md-9 user-name-container">
							<div>
								<?php
								echo $user[$model]['work1'];
								if($user[$model]['department1']!=''){
								echo ' ('.$user[$model]['department1'].')';
								}
								?>
							</div>
						</div>
						<?php
						}
						}
						?>
			</div>
		</div>
		<div class="spacer">
			
		</div>