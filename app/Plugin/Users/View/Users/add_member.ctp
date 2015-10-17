<?php
	if ($this->Session->read('Auth.User')){
		echo 'you already logged in.';
	}elseif($is_valid){
?>
<div class="users form">
	<h2><?php echo __d('users', 'Add User'); ?></h2>
	<fieldset>
		<?php
			echo $this->Form->create($model);
			echo $this->Form->input('username', array(
				'label' => __d('users', 'Username')));
			echo $this->Form->input('email', array(
				'label' => __d('users', 'E-mail (used as login)'),
				'error' => array('isValid' => __d('users', 'Must be a valid email address'),
				'isUnique' => __d('users', 'An account with that email already exists'))));
			echo $this->Form->input('password', array(
				'label' => __d('users', 'Password'),
				'type' => 'password'));
			echo $this->Form->input('temppassword', array(
				'label' => __d('users', 'Password (confirm)'),
				'type' => 'password'));
			echo $this->Form->input('passwordold', array(
				'type' => 'hidden',
				'default' => $secret));
			$tosLink = $this->Html->link(__d('users', 'Terms of Service'), array('controller' => 'pages', 'action' => 'tos', 'plugin' => null));
			echo $this->Form->input('tos', array(
				'label' => __d('users', 'I have read and agreed to ') . $tosLink));
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
					<h1 class="kosenName">Kosen.mn</h1>
					<?php
						$currentAction = $this->params['action'];
						if($currentAction == 'add'){}
							else{
								echo "<div class='contact-link'>";
								echo $this->Html->link(
								__d('contact','бидэнтэй холбогдъё...'),
								array('plugin'=>null, 'controller'=>'questions', 'action'=>'add'),
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
							echo '<h4>'.'Косэн клубын гишүүд нэвтрэх эрхтэй.'.'</h4><br>';
							echo $this->Form->input('passwordold', array(
							'type' => 'password',
							'label' => false,
							'placeholder' => 'нууц үг',
							'class' => 'form-control',
							'id'=>'inputPassword3'));
							echo $this->Form->submit('Нэвтрэх',array('class' => 'btn btn-lg btn-primary btn-block'));
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