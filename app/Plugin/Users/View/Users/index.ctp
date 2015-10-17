<script type="text/javascript">
	$("#sidebar-kosen-wrapper").show('fast');
</script>
<div class="post-container">
	<div class="row kosen-post">
		<ul class="search-box">
			<li class="search-input">
				<input type="text" class="form-control" placeholder="хайлт">
			</li>
			<li class="search-button">
				<button id="search-button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
				<button id="btn-more" class="btn btn-default"><span class="glyphicon glyphicon-option-vertical"></span></button>
			</li>
		</ul>
		<div class="more-menu" id="search-toggle">
			<div class="col-xs-12 col-sm-12" style="width:100%; height:1px; background-color:#eee; margin:15px"></div>
			<div class="col-xs-12 col-sm-6">
				<label for="sel1">Косэн он:</label>
				<select class="form-control" id="sel1">
					<?php
						echo "<option value='0'>";
												echo "-Косэн он-";
						echo "</option>";
						for($i=idate("Y"); $i>=1990; $i-- ){
						echo "<option>";
												echo $i;
						echo "</option>";
						}
					?>
				</select>
			</div>
			<div class="col-xs-12 col-sm-6">
				<label for="sel2">Мэргэжил:</label>
				<select class="form-control" id="sel2">
					<?php
						$majors = array("Цахим IT", "Электрик/Электроник", "Барилга/Архитектур", "Хими/Биологи", "Механик");
						echo "<option value='0'>";
							echo "-Мэргэжил-";
						echo "</option>";
						foreach ($majors as $key => $value){
							echo "<option>";
												echo $value;
							echo "</option>";
						}
					?>
				</select>
			</div>
			<div class="col-xs-12 col-sm-6">
				<label for="sel2">Их сургууль:</label>
				<select class="form-control" id="sel2">
					<?php
						$majors = array("東京大学", "千葉大学", "電気通信大学", "東京工業大学", "大阪大学", "Бусад");
						echo "<option value='0'>";
							echo "-Их сургууль-";
						echo "</option>";
						foreach ($majors as $key => $value){
							echo "<option>";
												echo $value;
							echo "</option>";
						}
					?>
				</select>
			</div>
			<div class="col-xs-12 col-sm-6">
				<label for="sel3">Байршил/Коллеж:</label>
				<div class="btn-group location-select" role="group" aria-label="...">
					<button type="button" id="mn" class="btn btn-default">Монгол</button>
					<button type="button" id="jp" class="btn btn-default">Япон</button>
					<button type="button" id="ex" class="btn btn-default">Бусад</button>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<br>
				<select class="form-control" id="sel3">
					<?php
						$places = array("北海道", "青森", "岩手", "宮城", "秋田", "山形", "福島", "茨城", "栃木", "群馬", "埼玉", "千葉", "東京", "神奈川", "新潟", "富山", "石川", "福井", "山梨", "長野", "岐阜", "静岡", "愛知", "三重", "滋賀", "京都", "大阪", "兵庫", "奈良", "和歌山", "鳥取", "島根", "岡山", "広島", "山口", "徳島", "香川", "愛媛", "高知", "福岡", "佐賀", "長崎", "熊本", "大分", "宮崎", "鹿児島", "沖縄");
						echo "<option value='0'>";
											echo "-都道府県-";
						echo "</option>";
						foreach ($places as $key => $value){
							echo "<option>";
												echo $value;
							echo "</option>";
						}
					?>
				</select>
			</div>
			<div class="col-xs-12 col-sm-12">
				<table class="japan-map" border="0" cellspacing="1" cellpadding="2" align="center">
					<tr>
						<td valign="top" colspan="14" rowspan="4"></td>
						<td class="prefecture" colspan="2" height="60" bgcolor="#66CC00" nowrap align="center"><a>北海道</a></td>
					</tr>
					<tr><td>　</td><td></td></tr>
					<tr>
						<td class="prefecture" colspan="2" bgcolor="#00CCFF" align="center"><a>青森</a></td>
					</tr>
					<tr>
						<td class="prefecture" bgcolor="#00CCFF"><a>秋田</a></td>
						<td class="prefecture" bgcolor="#00CCFF"><a>岩手</a></td>
					</tr>
					<tr>
						<td colspan="10" rowspan="2"></td>
						<td class="prefecture" rowspan="2" bgcolor="#FF6633"><a>石川</a></td>
						<td colspan="3"></td>
						<td class="prefecture" bgcolor="#00CCFF"><a>山形</a></td>
						<td class="prefecture" bgcolor="#00CCFF"><a>宮城</a></td>
					</tr>
					<tr>
						<td class="prefecture" bgcolor="#FF6633"><a>富山</a></td>
						<td class="prefecture" colspan="2" bgcolor="#FF6633" align="center"><a>新潟</a></td>
						<td class="prefecture" colspan="2" bgcolor="#00CCFF" align="center"><a>福島</a></td>
					</tr>
					<tr>
						<td colspan="9"></td>
						<td class="prefecture" colspan="2" bgcolor="#FF6633" align="center"><a>福井</a></td>
						<td class="prefecture" rowspan="2" bgcolor="#FF6633"><a>岐阜</a></td>
						<td class="prefecture" rowspan="2" bgcolor="#FF6633"><a>長野</a></td>
						<td class="prefecture" bgcolor="#00CC33" align="center"><a>群馬</a></td>
						<td class="prefecture" bgcolor="#00CC33"><a>栃木</a></td>
						<td class="prefecture" owspan="2" bgcolor="#00CC33"><a>茨城</a></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td class="prefecture" bgcolor="#6666FF"><a>山口</a></td>
						<td class="prefecture" bgcolor="#6666FF"><a>島根</a></td>
						<td class="prefecture" bgcolor="#6666FF"><a>鳥取</a></td>
						<td class="prefecture" rowspan="2" bgcolor="#FF3399"><a>兵<br>庫</a></td>
						<td class="prefecture" bgcolor="#FF3399"><a>京都</a></td>
						<td class="prefecture" colspan="2" bgcolor="#FF3399" align="center"><a>滋賀</a></td>
						<td class="prefecture" bgcolor="#00CC33" colspan="2" align="center"><a>埼玉</a></td>
					</tr>
					<tr>
						<td class="prefecture" rowspan="2" bgcolor="#FF9933"><a>長<br>崎</a></td>
						<td class="prefecture" rowspan="2" bgcolor="#FF9933"><a>佐<br>賀</a></td>
						<td class="prefecture" colspan="2" bgcolor="#FF9933" align="center"><a>福岡</a></td>
						<td rowspan="5"></td>
						<td class="prefecture" bgcolor="#6666FF"><a>広島</a></td>
						<td class="prefecture" bgcolor="#6666FF"><a>岡山</a></td>
						<td class="prefecture" bgcolor="#FF3399"><a>大阪</a></td>
						<td class="prefecture" bgcolor="#FF3399"><a>奈良</a></td>
						<td class="prefecture" rowspan="2" bgcolor="#FF3399"><a>三重</a></td>
						<td class="prefecture" bgcolor="#FF6633"><a>愛知</a></td>
						<td class="prefecture" rowspan="2" bgcolor="#FF6633"><a>静岡</a></td>
						<td class="prefecture" bgcolor="#FF6633" align="center"><a>山梨</a></td>
						<td class="prefecture" bgcolor="#00CC33"><a>東京</a></td>
						<td class="prefecture" rowspan="2" bgcolor="#00CC33"><a>千葉</a></td>
					</tr>
					<tr>
						<td class="prefecture" rowspan="3" bgcolor="#FF9933"><a>熊<br>本</a></td>
						<td class="prefecture" bgcolor="#FF9933"><a>大分</a></td>
						<td colspan="3"></td>
						<td class="prefecture" colspan="2" bgcolor="#FF3399" align="center"><a>和歌山</a></td>
						<td></td>
						<td class="prefecture" bgcolor="#00CC33"><a>神奈川</a></td>
						<td></td>
					</tr>
					<tr>
						<td colspan="2" rowspan="3"></td>
						<td class="prefecture" rowspan="2" bgcolor="#FF9933"><a>宮崎</a></td>
						<td class="prefecture" bgcolor="#339966"><a>愛媛</a></td>
						<td class="prefecture" bgcolor="#339966"><a>香川</a></td>
						<td rowspan="3" colspan="9"> </td>
					</tr>
					<tr>
						<td class="prefecture" bgcolor="#339966"><a>高知</a></td>
						<td class="prefecture" bgcolor="#339966"><a>徳島</a></td>
					</tr>
					<tr>
						<td class="prefecture" colspan="2" bgcolor="#FF9933" align="center"><a>鹿児島</a></td>
						<td colspan="2"></td>
					</tr>
					<tr>
						<td class="prefecture" colspan="2" bgcolor="#FF9933"><a>沖縄</a></td>
						<td colspan="14"></td>
					</tr>
				</table>
			</div>
			<p class="test"></p>
		</div>
		<div class="col-sm-12 col-xs-12" id="search-toggle1" style="text-align:center">
			<button id="search-button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Хайх</button>
		</div>
	</div>
	<div class="user-list-container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 sort-box">
				<label for="sel3">Жагсаалт:</label>
				<div class="btn-group sort-btns" role="group" aria-label="...">
					<?php // echo $this->Paginator->sort('username', array(), array('class' => 'btn btn-default')); ?>
					<?php echo $this->Paginator->sort('first_name', 'Нэр', array('direction' => 'desc', 'lock' => true,'class' => 'btn btn-default')); ?>
					<?php // echo $this->Paginator->sort('last_name', array(), array('class' => 'btn btn-default')); ?>
					<?php echo $this->Paginator->sort('kosen_year', 'Жил', array('class' => 'btn btn-default')); ?>
					<?php echo $this->Paginator->sort('kosen_roman', 'Косэн', array('class' => 'btn btn-default')); ?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 back-btn">
				<button class="btn btn-default"><span class="glyphicon glyphicon-triangle-left"></span></button>
			</div>
			<?php
			foreach ($users as $user):
			?>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="user-container cursor" onclick="location.href='<?php echo $this->html->url('/users/view/' . $user[$model]['id']);?>';">
					<?php echo $this->Html->image("profile/".$user[$model]['profile_image'], array('width'=>'100')); ?>
					<div class="kosen-media">
						<strong>
							<?php 
								echo $user[$model]['first_name']; 
								//=$user[$model]['last_name'];
								//echo $lName[0];
							?>
						</strong>
						<div class="kosen-year"><?php echo $user[$model]['kosen_year']; ?></div>
						<div class="kosen-roman"><?php echo $user[$model]['kosen_roman'];  ?></div>
						<div class="media-notshow">
							<?php
								$userModels = array("username", "last_login", "is_admin", "gender", "major", "kosen_kanji", "kosen_roman", "kosen_year", "fb_acc", "high_school", "university1", "course1", "university2", "course2", "university3", "course3", "work1", "department1", "work2", "department2", "work3", "department3", "country", "city");
								foreach ($userModels as $key => $value) {
									# code...
									if(isset($value)){
									echo "<div>";
										echo $user[$model][$value];
									echo "</div>";
									if($value=="fb_acc"){
										echo $this->Html->link($user[$model][$value], 'http://www.facebook.com/'.$user[$model][$value]);
									}
									}
								}
							?>
							<!-- <span><?php// echo $user[$model]['kosen_year']; ?></span><br> -->
						</div>
					</div>
				</div>
			</div>
			
			<?php
			// echo $this->Html->image("profile/".$user[$model]['profile_image'], array('width'=>'100'));
			// echo $this->Html->link($user[$model]['username'], array('action' => 'view', $user[$model]['id']));
			// echo $user[$model]['last_name'];
			?>
			<?php endforeach; ?>
			<div class="col-xs-12 col-sm-12 col-md-12">
				<p>
					<?php
						echo $this->Paginator->counter(array(
							'format' => __d('users', 'Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')
						));
					?>
				</p>
			</div>
		</div>
		<div style="height:400px;"></div>
		<!-- SuRa gar hureegui heseg -->
		<?php
			echo $this->Form->create($model,
				array(
					'action' => 'index',
					'class' => 'form-horizontal',
					'role' => 'form',
					'id' => 'LoginForm'));
		?>
		<div class="form-group">
			<label for="inputEmail3" class="control-label">Username</label>
			<div>
				<?php
					echo $this->Form->input('username', array(
						'label' => false,
						'class' => 'form-control',
						'id'=>'username'));
				?>
			</div>
		</div>
		<div class="col-xs-offset-6 col-xs-10">
			<?php
				echo $this->Form->submit('Хэрэглэгч хайх', array('class' => 'btn btn-default'));
				echo $this->Form->end();
				echo $this->Html->link('Нарийвчилж хайх', array('controller' => 'users', 'action' => 'advanced_search'), array('class' => 'btn btn-primary'));
				// echo "<a href='users/users/advanced_search' class='btn btn-primary'>Нарийвчилж хайх</a>";
			?>
		</div>
		<div class="user-container-1">
		<table class="table table-striped table-bordered">
			<tr>
				<th><?php echo "profilePhoto"; ?></th>
				<th><?php echo $this->Paginator->sort('username'); ?></th>
				<th><?php echo $this->Paginator->sort('first_name'); ?></th>
				<th><?php echo $this->Paginator->sort('last_name'); ?></th>
				<th><?php echo $this->Paginator->sort('kosen_year'); ?></th>
				<th><?php echo $this->Paginator->sort('kosen_roman'); ?></th>
			</tr>
			<?php
			$i = 0;
			foreach ($users as $user):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			?>
			<tr <?php echo $class; ?> >
				<td><?php echo $this->Html->image("profile/".$user[$model]['profile_image'], array('width'=>'100')); ?></td>
				<td><?php echo $this->Html->link($user[$model]['username'], array('action' => 'view', $user[$model]['id'])); ?></td>
				<td><?php echo $user[$model]['first_name']; ?></td>
				<td><?php echo $user[$model]['last_name']; ?></td>
				<td><?php echo $user[$model]['kosen_year']; ?></td>
				<td><?php echo $user[$model]['kosen_roman']; ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
		</div>
		<?php echo $this->element('Users.pagination'); ?>
	</div>
</div>