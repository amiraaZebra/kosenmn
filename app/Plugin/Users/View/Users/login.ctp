<?php
	if ($this->Session->read('Auth.User')){
		echo 'you already logged in.'; 
	}else{
				echo $this->Session->flash('auth');
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
	      		echo '<p>' . $this->Form->input('remember_me', array('type' => 'checkbox', 'label' =>  __d('users', 'Намайг сана'))) . '</p>';

	      		echo '<p>' . $this->Html->link(__d('users', 'Нууц үгээ мартсан'), array('action' => 'reset_password')) . '</p>';

				echo $this->Form->submit('Нэвтрэх',array('class' => 'btn btn-lg btn-primary btn-block'));

		      	echo $this->Form->hidden('User.return_to', array(
							'value' => $return_to));
		      	echo $this->Form->end();
	}
?>