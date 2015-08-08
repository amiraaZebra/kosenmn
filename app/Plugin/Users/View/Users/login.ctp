<?php
	if ($this->Session->read('Auth.User')){
		echo 'you already logged in.';
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
					<h1 id="kosenName">Kosen.mn</h1>
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
							'action' => 'login',
							'class' => 'form-signin',
							'role' => 'form',
							'id' => 'LoginForm'));
							echo '<h4>'.'Косэн клубын гишүүд нэвтрэх эрхтэй.'.'</h4><br>';
							echo $this->Form->input('email', array(
							'label' => false,
							'placeholder' => 'имэйл хаяг',
							'class' => 'form-control',
							'id'=>'inputEmail3'));
							echo $this->Form->input('password', array(
							'label' => false,
							'placeholder' => 'нууц үг',
							'class' => 'form-control',
							'id'=>'inputPassword3'));
							//echo '<p>' . $this->Form->input('remember_me', array('type' => 'checkbox', 'label' =>  __d('users', 'Намайг сана'))) . '</p>';
							echo '<cite class="sura-right">' . $this->Html->link(__d('users', 'Нууц үгээ мартсан'), array('action' => 'reset_password')) . '</cite>';
							echo $this->Form->submit('Нэвтрэх',array('class' => 'btn btn-lg btn-primary btn-block'));
							echo $this->Form->hidden('User.return_to', array(
							'value' => $return_to));
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