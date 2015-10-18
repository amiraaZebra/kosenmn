<div class="question-container">
	<div class="container">
		<div class="question-form">
<?php
	if ($this->Session->read('Auth.User')){
		echo 'you already logged in.';
	}elseif($is_valid){
?>
<div class="users form">
	<br><h2><?php echo "Kosen.mn-д нэгдэж байгаад таатай байна."; ?></h2>
	<br><h4><?php echo "Бүртгүүлсэн имэйл хаяг руу бүртгэлийг баталгаажуулах мэйл явуулах болно. Мэйл доторх линкийг дараад бүртгэлээ баталгаажуулаарай."; ?></h4>
	<fieldset>
		<?php
			echo $this->Form->create($model);
			echo $this->Form->input('username', array(
				'label' => __d('users', 'Username'),
				'class' => 'form-control'));
			echo $this->Form->input('email', array(
				'label' => __d('users', 'E-mail (used as login)'),
				'class' => 'form-control',
				'error' => array('isValid' => __d('users', 'Must be a valid email address'),
				'isUnique' => __d('users', 'An account with that email already exists'))));
			echo $this->Form->input('password', array(
				'label' => __d('users', 'Password'),
				'class' => 'form-control',
				'type' => 'password'));
			echo $this->Form->input('temppassword', array(
				'label' => __d('users', 'Password (confirm)'),
				'class' => 'form-control',
				'type' => 'password'));
			echo $this->Form->input('passwordold', array(
				'type' => 'hidden',
				'class' => 'form-control',
				'default' => $secret));
			?>
			<div class="registerCheckbox">
				<?php
				echo $this->Form->input('tos', array(
					'label' => "Kosenclub-т идэвхтэй байж нэг нэгнийгээ дэмжиж ажилна."));
				?>
			</div>
			<?php
			echo $this->Form->end(__d('users', 'Submit'));
		?>
	</fieldset>
</div>
<?php
	}else{
?>

<div id="slider" class="s-slider-wrapper">
	<div class="s-slider">
		<div class="slide">
			<div class="s-slide-inner">
				<div>
					<?php
					echo $this->Html->image("test/1.jpg", array('class'=>'s-bg-img'));
					?>
				</div>
			</div>
		</div>
		<div class="slide">
			<div class="s-slide-inner">
				<div>
					<?php
					echo $this->Html->image("test/2.jpg", array('class'=>'s-bg-img'));
					?>
				</div>
			</div>
		</div>
		<div class="slide">
			<div class="s-slide-inner">
				<div>
					<?php
					echo $this->Html->image("test/3.jpg", array('class'=>'s-bg-img'));
					?>
				</div>
			</div>
		</div>
		</div><!-- /s-slider -->
		</div><!-- /s-slider-wrapper -->
		<div class="kosen-login-container">
			<div class="row kosen-login-form">
				<div class="col-xs-12 col-sm-6 col-md-7 login-menu">
					<h1 class="plsJoin">Kosen.mn-д нэгдэж байгаад тань таатай байна.</h1>
					<?php
						$currentAction = $this->params['action'];
						if($currentAction == 'add'){}
							else{
								echo "<div class='contact-link'>";
								echo $this->Html->link(
								__d('contact','login хуудас руу ...'),
								array('action'=>'login'),
								array('escape' => false));	
								echo "</div>";				
							}	
					?>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-5">
					<div class="kosen-login-box jumbotron">
						<?php
							echo $this->Form->create($model, array(
							'action' => 'add_member',
							'class' => 'form-signin',
							'role' => 'form',
							'id' => 'LoginForm'));
							echo '<h4>'.'Хэрвээ та Косэнд сурч байсан бол нэвтрэх эрхтэй. Нууц үгээ оруулаад kosen.mn-д нэгдэнэ үү.'.'</h4><br>';
							echo $this->Form->input('passwordold', array(
							'type' => 'password',
							'label' => false,
							'placeholder' => 'нууц үг',
							'class' => 'form-control',
							'id'=>'inputPassword3'));
							echo $this->Form->submit('Бүртгүүлж эхлэх',array('class' => 'btn btn-lg btn-primary btn-block'));
							echo '<h4>'.'Нууц үгээ мэдэхгүй байгаа бол kosenclub-н Facebook group ээс хараарай.'.'</h4>';
							echo $this->Form->end();
							echo "<div class='login-message'>";
							echo $this->Session->flash('auth');
							echo "</div>";
						?>
					</div>
				</div>
			</div>
		</div>
		<script>
				$(document).ready(function () {
				    var intputElements = document.getElementsByTagName("INPUT");
				    for (var i = 0; i < intputElements.length; i++) {
				        intputElements[i].oninvalid = function (e) {
				            e.target.setCustomValidity("");
				            if (!e.target.validity.valid) {
				            	$field = "Мэдээлэл";
				                if (e.target.name == "data[User][email]") {
				                    e.target.setCustomValidity("Имейл хаяг буруу байна.");
				                }
				                if (e.target.name == "data[User][password]") {
				                    e.target.setCustomValidity("Нууц үг ээ оруулна уу.");
				                }
				            }
				        };
				    }
				})
				var slideWidth;
				var slideHeight;
				var ratioFrame;
				function ScaleSlider() {

				slideWidth = $(document).width();
				slideHeight = $(document).height();
				ratioFrame = slideWidth/slideHeight;

				$(".s-slide-inner img").each(function(index, el) {
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
				window.setTimeout(ScaleSlider, 30);
				}
				ScaleSlider();
				$(".s-slider > div:gt(0)").hide();
				setInterval(function() {
					$('.s-slider > div:first').fadeOut(1000).next().fadeIn(2000).end().appendTo('.s-slider');
				}, 10000);
		</script>
		<?php
		}
		?>
<?php $this->Html->scriptStart(array('inline' => false)); ?>
	if (!navigator.cookieEnabled){
		alert('Таны browser-д cookie бичиж чадахгүй байна та "cookie block" хийсэн тохиргоогоо өөрчилнө үү.');
	}
<?php $this->Html->scriptEnd(); ?>
		</div>
	</div>
</div>