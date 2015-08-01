<?php
	if ($this->Session->read('Auth.User')){
		echo 'you already logged in.';
	}else{
echo $this->Session->flash('auth');?>
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
					echo $this->Html->image("test/1.jpg", array('class'=>'s-bg-img'));
					?>
				</div>
			</div>
		</div>
		<div class="slide">
			<div class="s-slide-inner">
				<div>
					<?php
					echo $this->Html->image("test/1.jpg", array('class'=>'s-bg-img'));
					?>
				</div>
			</div>
		</div>
		</div><!-- /s-slider -->
		</div><!-- /s-slider-wrapper -->
		<div class="kosen-login-container">
			<div class="row kosen-login-form">
				<div class="col-xs-12 col-sm-6 col-md-7" id="kosenName">
					<h1>Kosen.mn</h1>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-5">
					<div class="kosen-login-box jumbotron">
						<?php
							echo $this->Form->create($model, array(
							'action' => 'login',
							'class' => 'form-signin',
							'role' => 'form',
							'id' => 'LoginForm'));
							echo '<strong>'.'Уг мэдээллийн санд зөвхөн Коосэн Клуб-н гишүүд нэвтрэх эрхтэй. Та имэйл хаяг болон нууц үгээ оруулна уу.'.'</strong>';
							echo $this->Form->input('email', array(
							'label' => false,
							'placeholder' => 'Email address',
							'class' => 'form-control',
							'id'=>'inputEmail3'));
							echo $this->Form->input('password', array(
							'label' => false,
							'placeholder' => 'Password',
							'class' => 'form-control',
							'id'=>'inputPassword3'));
							//echo '<p>' . $this->Form->input('remember_me', array('type' => 'checkbox', 'label' =>  __d('users', 'Намайг сана'))) . '</p>';
							echo '<p>' . $this->Html->link(__d('users', 'Нууц үгээ мартсан'), array('action' => 'reset_password')) . '</p>';
							echo $this->Form->submit('Нэвтрэх',array('class' => 'btn btn-lg btn-primary btn-block'));
							echo $this->Form->hidden('User.return_to', array(
							'value' => $return_to));
							echo $this->Form->end();
						?>
					</div>
				</div>
			</div>
		</div>
		<script>
				$(".s-slider > div:gt(0)").hide();
				setInterval(function() {
					$('.s-slider > div:first').fadeOut(1000).next().fadeIn(2000).end().appendTo('.s-slider');
				}, 10000);
		</script>
		<?php
		}
		?>