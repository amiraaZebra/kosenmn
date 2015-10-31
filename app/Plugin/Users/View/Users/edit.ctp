<?php
/**
* Copyright 2010 - 2013, Cake Development Corporation (http://cakedc.com)
*
* Licensed under The MIT License
* Redistributions of files must retain the above copyright notice.
*
* @copyright Copyright 2010 - 2013, Cake Development Corporation (http://cakedc.com)
* @license MIT License (http://www.opensource.org/licenses/mit-license.php)
*/
?>
<style type="text/css">
	.kosen-radio{
		margin-left: 10px;
	}
</style>
<script type="text/javascript">
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
	$(function($) {
		
		if($("#sel-country :selected").text()=="Япон"){
			$(".japan-city").show();
			$(".other-city").hide();
		}else{
			$(".other-city").show();
			$(".japan-city").hide();
		}
		$("#sel-country").change(function() {
		// 内容
		if($("#sel-country :selected").text()=="Япон"){
			$(".japan-city").show();
			$("#sel-city1 option :eq(0)").prop("selected", true);
			$("#sel-city2").val("");
			$(".other-city").hide();
		}else{
			$("#sel-city2").val("");
			$("#sel-city1 option :eq(0)").prop("selected", true);
			$(".other-city").show();
			$(".japan-city").hide();
		}
		});
		$("#sel-city1").change(function(event) {
			/* Act on the event */
			if($("#sel-city1 :selected").text()=="---") {
				$("p").text("yEs");
				$("#sel-city2").val("");
			}
			else $("#sel-city2").val($("#sel-city1 :selected").text());
			if($("#sel-country :selected").text()!="Япон"){
				$("#sel-city2").val("");
			}
		});
		$('#sel-kosen-kanji').change(function() {
			/* Act on the event */
			if($("#sel-kosen-kanji :selected").text()=="---"){
				$("#sel-kosen-roman option").eq("0").prop('selected', true);
			}
			else{
				var index = $("#sel-kosen-kanji").prop("selectedIndex");
				// $("p").text(index);
				$("#sel-kosen-roman option").eq(index).prop('selected', true);
			}
		});
		
		
	});
</script>
<div class="post-container">
	<div class="users form">
		<?php echo $this->Form->create($model, array('name' =>'kosen-form', 'ng-controller' => 'TabController as tabCtrl')); ?>
		<legend><?php echo __d('users', 'Хэрэглэгчийн тохиргоо'); ?></legend>
		<div class="row user-view">
			<div class="col-xs-5 col-sm-4 col-md-3 prof-img-container">
				<?php
					echo $this->Html->image("profile/".$this->session->read('Auth.User.profile_image'), array('class'=>'prof-img'));
				?>
			</div>
			<div class="col-xs-5 col-sm-4 col-md-3 prof-img-container">
				<?php
													/*	echo $this->Form->create('Photo', array('controller'=>'photos', 'action' => 'profilephoto'), array('role' => 'form', 'type' => 'file'));
					echo $this->Form->input('id',array('type'=>'hidden'));
					echo $this->Form->input('title',array('type'=>'hidden', 'value'=>'profilePhoto_'.$this->session->read('Auth.User.username')));
					echo $this->Form->input('description',array('type'=>'hidden', 'value'=>'profile photo'));
					echo $this->Form->input('text',array('type'=>'hidden', 'value'=>'profile photo'));
					echo $this->Form->input('album',array('type'=>'hidden', 'value'=>'profilePhotos'));
					echo $this->Form->input('height',array('type'=>'hidden', 'value'=>100));
					echo $this->Form->input('width',array('type'=>'hidden', 'value'=>100));
					echo $this->Form->input('user_id',array('type'=>'hidden', 'value'=>$this->session->read('Auth.User.id')));
					echo $this->Form->file('file');
					echo $this->Form->end(__('Submit'));*/
				?>
			</div>
		</div>
		<div class="user-detail">
			<label>Үндсэн мэдээлэл</label>
			<div class="user-detail-container row">
				<div class="col-xs-12 col-sm-12 col-md-12 user-name-container">
					<div class="form-inline">
						<div class="form-group">
							<span class="user-table-1">Овог</span>
							<?php
								echo $this->Form->input('last_name', array('label' => false, 'class' => 'form-control'));
							?>
						</div>
						<div class="form-group">
							<span class="user-table-1">Нэр</span>
							<?php
								echo $this->Form->input('first_name', array('label' => false, 'class' => 'form-control'));
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="user-detail-container row">
				<div class="col-xs-12 col-sm-12 col-md-12 user-name-container">
					<div class="form-inline">
						<div class="form-group">
							<span class="user-table-1">Төрсөн өдөр</span><br>
							<div class="kosen-date-all">
								<?php
									echo $this->Form->input('birthday', array('label'=>false, 'dateFormat' => 'Y', 'maxYear' => date('Y'), 'minYear' => date('Y')-100, 'class' => 'form-control kosen-input-date', 'empty' => '---'));
									echo $this->Form->input('birthday', array('label'=>false, 'dateFormat' => 'M','monthNames' => false, 'class' => 'form-control kosen-input-date', 'empty' => '---'));
									echo $this->Form->input('birthday', array('label'=>false, 'dateFormat' => 'D','class' => 'form-control kosen-input-date', 'empty' => '---'));
								?>
							</div>
						</div>
						<div class="form-group">
							<span class="user-table-1">Хүйс</span>
							<?php
								echo $this->Form->input('gender', array('class' => 'form-control', 'options' => array(0 => 'Эм', 1 => 'Эр'),'empty' => '---', 'label' => false));
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="user-detail">
			<label>Холбогдох хаяг</label>
			<div class="user-detail-container row">
				<div class="col-xs-12 col-sm-12 col-md-12 user-name-container">
					<div class="form-inline">
						<div class="form-group">
							<span class="user-table-1">Имэйл</span>
							<?php
								echo $this->Form->input('email', array('label' => false, 'class' => 'form-control','id'=>'inputEmail3'));
							?>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 user-name-container">
					<div class="form-inline">
						<div class="form-group">
							<span class="user-table-1">Facebook акаунт</span>
							<?php
								echo $this->Form->input('fb_acc',array('label' => false, 'class' => 'form-control', 'placeholder' => 'bold01'));
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="user-detail-container row">
				<div class="col-xs-12 col-sm-12 col-md-12 user-name-container">
					<span class="user-table-1">Утасны дугаар</span>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 user-name-container">
					<div class="form-inline">
						<div class="form-group">
							<span class="user-table-1">[Япон болон бусад]</span>
							<?php echo $this->Form->input('phone_number_jap', array('label' => false, 'class' => 'form-control')); ?>
						</div>
						<div class="form-group">
							<span class="user-table-1">[Монгол]</span>
							<?php echo $this->Form->input('phone_number_mon', array('label' => false, 'class' => 'form-control')); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="user-detail-container row">
				<div class="col-xs-12 col-sm-12 col-md-12 user-name-container">
					<span class="user-table-1">Байршил</span>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 user-name-container">
					<div class="form-inline">
						<div class="form-group">
							<span class="user-table-1">Улс</span>
							<?php //echo $this->Form->input('country', array('label' => false, 'class' => 'form-control'));
							$country = array("Япон" => "Япон", "Монгол" => "Монгол", "Америк" => "Америк", "Орос" => "Орос", "Хятад" => "Хятад", "Бусад" => "Бусад");
							echo $this->Form->input('country', array('class' => 'form-control', 'id' => 'sel-country', 'options' => $country,'empty' => '---', 'label' => false));
							?>
						</div>
						<div class="form-group">
							<span class="user-table-1">Хот, Аймаг</span>
							<?php
							$prefectures = array("Хоккайдо" => "Хоккайдо", "Аомори" => "Аомори", "Иватэ" => "Иватэ", "Мияги" => "Мияги", "Акита" => "Акита", "Ямагата" => "Ямагата", "Фүкүшима" => "Фүкүшима", "Ибараки" => "Ибараки", "Точиги" => "Точиги", "Гүнма" => "Гүнма", "Сайтама" => "Сайтама", "Чиба" => "Чиба", "Токио" => "Токио", "Канагава" => "Канагава", "Нийгата" => "Нийгата", "Тояама" => "Тояама", "Ишикава" => "Ишикава", "Фүкүй" => "Фүкүй", "Яманаши" => "Яманаши", "Нагано" => "Нагано", "Гифү" => "Гифү", "Шизүока" => "Шизүока", "Айчи" => "Айчи", "Миэ" => "Миэ", "Шига" => "Шига", "Киото" => "Киото", "Осака" => "Осака", "Хиого" => "Хиого", "Нара" => "Нара", "Вакаяама" => "Вакаяама", "Тоттори" => "Тоттори", "Шиманэ" => "Шиманэ", "Окаяма" => "Окаяма", "Хирошима" => "Хирошима", "Ямагүчи" => "Ямагүчи", "Токушима" => "Токушима", "Кагава" => "Кагава", "Эхимэ" => "Эхимэ", "Кочи" => "Кочи", "Фүкүока" => "Фүкүока", "Сага" => "Сага", "Нагасаки" => "Нагасаки", "Кумамото" => "Кумамото", "Ойта" => "Ойта", "Мияазаки" => "Мияазаки", "Кагошима" => "Кагошима", "Окинава" => "Окинава");
							echo "<div class='japan-city'>";
									echo $this->Form->input('city', array('class' => 'form-control', 'id' => 'sel-city1', 'options' => $prefectures,'empty' => '---', 'label' => false));
							echo "</div>";
							echo "<div class='other-city'>";
									echo $this->Form->input('city', array('label' => false, 'class' => 'form-control', 'id' => 'sel-city2'));
							echo "</div>";
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="user-detail">
			<label>Ажил, Сургууль</label>
			<div class="user-detail-container row">
				<div class="col-xs-12 col-sm-12 col-md-12 user-name-container">
					<div class="form-inline">
						<div class="form-group">
							<span class="user-table-1">Косэн</span>
							<?php
								$kosens_jap = array("函館" => "函館", "苫小牧" => "苫小牧", "釧路" => "釧路", "旭川" => "旭川", "八戸" => "八戸", "一関" => "一関", "仙台" => "仙台", "宮城" => "宮城", "仙台電波" => "仙台電波", "秋田" => "秋田", "鶴岡" => "鶴岡", "福島" => "福島", "茨城" => "茨城", "小山" => "小山", "群馬" => "群馬", "木更津" => "木更津", "東京" => "東京", "長岡" => "長岡", "富山" => "富山", "富山商船" => "富山商船", "石川" => "石川", "福井" => "福井", "長野" => "長野", "岐阜" => "岐阜", "沼津" => "沼津", "豊田" => "豊田", "鳥羽商船" => "鳥羽商船", "鈴鹿" => "鈴鹿", "舞鶴" => "舞鶴", "明石" => "明石", "奈良" => "奈良", "和歌山" => "和歌山", "米子" => "米子", "松江" => "松江", "津山" => "津山", "広島商船" => "広島商船", "呉" => "呉", "徳山" => "徳山", "宇部" => "宇部", "大島商船" => "大島商船", "阿南" => "阿南", "香川" => "香川", "高松" => "高松", "詫間電波" => "詫間電波", "新居浜" => "新居浜", "弓削商船" => "弓削商船", "高知" => "高知", "久留米" => "久留米", "有明" => "有明", "北九州" => "北九州", "佐世保" => "佐世保", "熊本" => "熊本", "熊本電波" => "熊本電波", "八代" => "八代", "大分" => "大分", "都城" => "都城", "鹿児島" => "鹿児島", "沖縄" => "沖縄");
								$kosens_rom = array("Хакодатэ" => "Хакодатэ", "Томакомай" => "Томакомай", "Күширо" => "Күширо", "Асахикава" => "Асахикава", "Хачинохэ" => "Хачинохэ", "Ичиносэки" => "Ичиносэки", "Сэндай" => "Сэндай", "Мияги" => "Мияги", "Сэндай дэнпа" => "Сэндай дэнпа", "Акита" => "Акита", "Цүрүока" => "Цүрүока", "Фүкүшима" => "Фүкүшима", "Ибараки" => "Ибараки", "Кояама" => "Кояама", "Гүнма" => "Гүнма", "Кисаразу" => "Кисаразу", "Токио" => "Токио", "Нагаока" => "Нагаока", "Тояама" => "Тояама", "Тояама шōсэн" => "Тояама шōсэн", "Ишикава" => "Ишикава", "Фүкүй" => "Фүкүй", "Нагано" => "Нагано", "Гифү" => "Гифү", "Нумазу" => "Нумазу", "Тоёота" => "Тоёота", "Тоба шōсэн" => "Тоба шōсэн", "Сүзүка" => "Сүзүка", "Майзүрү" => "Майзүрү", "Акаши" => "Акаши", "Нара" => "Нара", "Вакаяама" => "Вакаяама", "Ёнаго" => "Ёнаго", "Мацүэ" => "Мацүэ", "Цүяама" => "Цүяама", "Хирошима шōсэн" => "Хирошима шōсэн", "Күрэ" => "Күрэ", "Токүяма" => "Токүяма", "Үбэ" => "Үбэ", "Ошима шōсэн" => "Ошима шōсэн", "Анами" => "Анами", "Кагава" => "Кагава", "Такамацу" => "Такамацу", "Такүмадэнпа" => "Такүмадэнпа", "Нийхама" => "Нийхама", "Югэ шōсэн" => "Югэ шōсэн", "Кочи" => "Кочи", "Күрүмэ" => "Күрүмэ", "Ариакэ" => "Ариакэ", "Китакюүшү" => "Китакюүшү", "Сасэбо" => "Сасэбо", "Күмамото" => "Күмамото", "Күмамотодэнпа" => "Күмамотодэнпа", "Яцуроши" => "Яцуроши", "Ойта" => "Ойта", "Мияаконожо" => "Мияаконожо", "Кагошима" => "Кагошима", "Окинава" => "Окинава");
								// echo $this->Form->input('kosen_kanji',array('label' => false, 'class' => 'form-control'));
								echo "<div class='kosen-kanji'>";
										echo $this->Form->input('kosen_kanji', array('class' => 'form-control', 'id' => 'sel-kosen-kanji', 'options' => $kosens_jap,'empty' => 'сонгох', 'label' => false));
								echo "</div>";
							?>
						</div>
						<div class="form-group">
							<div class="kosen-roman">
								<span class="user-table-1">Косэн кирилл</span>
								<?php
									echo $this->Form->input('kosen_roman', array('class' => 'form-control', 'id' => 'sel-kosen-roman', 'options' => $kosens_rom,'empty' => '---', 'label' => false));
								?>
							</div>
						</div>
						<div class="form-group">
								<span class="user-table-1">Косэн он</span>
								<?php echo $this->Form->input('kosen_year', array('type' => 'number','label' => false, 'min'=>'1990', 'max'=>date("Y"), 'class' => 'form-control')); ?>
						</div>
						<div class="form-group">
								<span class="user-table-1">Косэн мэргэшил</span>
								<?php 
								$kosen_major= array("Цахим IT" => "Цахим IT", "Электрик/Электроник" => "Электрик/Электроник", "Барилга/Архитектур" => "Барилга/Архитектур", "Хими/Биологи" => "Хими/Биологи", "Механик" => "Механик", "Бусад" => "Бусад");
								echo $this->Form->input('major', array('class' => 'form-control', 'options' => $kosen_major,'empty' => '---', 'label' => false));
								// echo $this->Form->input('major', array('label' => false, 'class' => 'form-control')); 
								?>
						</div>
					</div>
				</div>
			</div>
			<div class="user-detail-container row">
				<div class="col-xs-12 col-sm-12 col-md-12 user-name-container">
					<div class="form-inline">
						<div class="form-group">
							<span class="user-table-1">Ахлах сургууль</span>
							<?php
								echo $this->Form->input('high_school',array('label' => false, 'class' => 'form-control'));
							?>
						</div>
						<div class="form-inline">
						<div class="form-group">
							<span class="user-table-1">Их сургууль (Монгол)</span>
							<?php
								echo $this->Form->input('university1',array('label' => false, 'class' => 'form-control'));
							?>
						</div>
						<div class="form-group">
							<span class="user-table-1">Мэргэшил (Монголд)</span>
							<?php
								echo $this->Form->input('course1',array('label' => false, 'class' => 'form-control'));
							?>
						</div>
						</div>
						<div class="form-inline">
						<div class="form-group">
							<span class="user-table-1">Их сургууль (Япон)</span>
							<?php
								echo $this->Form->input('university2',array('label' => false, 'class' => 'form-control'));
							?>
						</div>
						<div class="form-group">
							<span class="user-table-1">Мэргэшил (Японд)</span>
							<?php
								echo $this->Form->input('course2',array('label' => false, 'class' => 'form-control'));
							?>
						</div>
						</div>
					</div>
				</div>
			</div>
			<div class="user-detail-container row">
				<div class="col-xs-12 col-sm-12 col-md-12 user-name-container">
					<div class="form-inline">
						<div class="form-group">
							<span class="user-table-1">Ажлын газар</span>
							<?php
								echo $this->Form->input('work1',array('label' => false, 'class' => 'form-control'));
							?>
						</div>
						<div class="form-group">
							<span class="user-table-1">Мэргэжил</span>
							<?php
								echo $this->Form->input('department1',array('label' => false, 'class' => 'form-control'));
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="user-detail-container row">
				<div class="col-xs-12 col-sm-12 col-md-12 user-name-container">
					<div class="form-inline">
						<div class="form-group">
							<span class="user-table-1">Статус</span>
							<?php
							$user_status = array("Оюутан" => "Оюутан", "Ажилтан" => "Ажилтан", "Бусад" => "Бусад");
							echo $this->Form->input('status', array('class' => 'form-control', 'options' => $user_status,'empty' => '---', 'label' => false)); 
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="user-detail-container row">
		<?php
		echo $this->Html->link(
		$this->Html->image("profile/".$this->session->read('Auth.User.profile_image'), array('width'=>'150')),
		array('plugin'=>NULL, 'controller'=>'photos', 'action'=>'profilephoto'),array('escape' => false)) ;
		?>
		</div>
		</div>
		
		<?php /*echo __d('users', 'Role'); ?>
			<?php echo $this->Form->input('role',
			array('label' => false, 'class' => 'form-control')); */?>
		<?php /* if (!empty($user['UserDetail'])) { */?>
				<!-- <tr>
					<td>
						<?php /* foreach ($user['UserDetail'] as $section => $details) {
						foreach ($details as $field => $value) {
							echo '<dt>' . $section . ' - ' . $field . '</dt>';
							echo '<dd>' . $value . '</dd>';
						}
						} */ ?>
					</td>
				</tr>  -->
		<?php /*}*/
		?>
		<?php echo $this->Form->submit('Submit',array('class' => 'btn btn-default')); ?>
		<?php echo $this->Form->end(); ?>
	</div>
</div>