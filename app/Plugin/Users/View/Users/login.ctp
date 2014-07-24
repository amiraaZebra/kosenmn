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

<div class="row row-centered">
	<?php echo $this->Session->flash('auth');?>
		<?php
			echo $this->Form->create($model, array(
				'action' => 'login',
				'class' => 'form-horizontal',
				'role' => 'form',
				'id' => 'LoginForm'));
		?>
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
			  <?php
				  echo $this->Form->input('email', array(
	//				'label' => __d('users', 'Email'),
					'label' => false,
					'class' => 'form-control',
					'id'=>'inputEmail3'));
			  ?>
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
			  <?php
				  echo $this->Form->input('password', array(
	//				'label' => __d('users', 'Email'),
					'label' => false,
					'class' => 'form-control',
					'id'=>'inputPassword3'));
			  ?>
			</div>
		</div>	
		<div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <div class="checkbox">
		      	<?php
		      		echo '<p>' . $this->Form->input('remember_me', array('type' => 'checkbox', 'label' =>  __d('users', 'Remember Me'))) . '</p>';
		      	?>		        
		      </div>
		    </div>
		  </div>
		<div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		    	<?php
		      		echo '<p>' . $this->Html->link(__d('users', 'I forgot my password'), array('action' => 'reset_password')) . '</p>';
		      	?>		      
		    </div>
		</div>  
		<div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">		      
		      <?php
		      	echo $this->Form->hidden('User.return_to', array(
					'value' => $return_to));
				echo $this->Form->submit('Login',array('class' => 'btn btn-default'));
		      	echo $this->Form->end();
		      ?>		      
		    </div>
		</div>	
<!--
	without bootstrap		
		<?php
			echo $this->Form->input('email', array(
				'label' => __d('users', 'Email'),
				'lable' => false,
				'class' => 'form-control',
				'class'=>'form-control'));
			echo $this->Form->input('password',  array(
				'label' => __d('users', 'Password'),
				'lable' => false,
				'class' => 'form-control',
				'class'=>'form-control'));
			echo '<p>' . $this->Form->input('remember_me', array('type' => 'checkbox', 'label' =>  __d('users', 'Remember Me'))) . '</p>';
			echo '<p>' . $this->Html->link(__d('users', 'I forgot my password'), array('action' => 'reset_password')) . '</p>';

			echo $this->Form->hidden('User.return_to', array(
				'value' => $return_to));
			echo $this->Form->end(__d('users', 'Submit'));
		?>
-->
</div>

<!--
	<?php
				echo $this->Form->input('id');
				
			

				echo $this->Form->input('gender', array(
					'label' => __d('users', 'Gender')));	
				echo $this->Form->input('birthday', array(
					'label' => __d('users', 'Birthday')));	
				echo $this->Form->input('status', array(
					'label' => __d('users', 'Working or Studying')));	
				echo $this->Form->input('major', array(
					'label' => __d('users', 'Major')));	
				echo $this->Form->input('kosen_kanji', array(
					'label' => __d('users', 'Kosen name kanji')));	
				echo $this->Form->input('kosen_roman', array(
					'label' => __d('users', 'kosen name roman')));	
				echo $this->Form->input('kosen_year', array(
					'label' => __d('users', 'Kosen year')));	
				echo $this->Form->input('fb_acc', array(
					'label' => __d('users', 'Facebook account')));	
				echo $this->Form->input('high_school', array(
					'label' => __d('users', 'High school')));	
				echo $this->Form->input('university1', array(
					'label' => __d('users', 'University in Mongolia')));	
				echo $this->Form->input('course1', array(
					'label' => __d('users', 'Course')));
				echo $this->Form->input('university2', array(
					'label' => __d('users', 'University in Japan')));
				echo $this->Form->input('work1', array(
					'label' => __d('users', 'work1')));
				echo $this->Form->input('department1', array(
					'label' => __d('users', 'Department')));
				echo $this->Form->input('country', array(
					'label' => __d('users', 'Country')));
				echo $this->Form->input('city', array(
					'label' => __d('users', 'city')));
				echo $this->Form->input('phone_number_mon', array(
					'label' => __d('users', 'Phone number Mongolia')));	
				echo $this->Form->input('phone_number_jap', array(
					'label' => __d('users', 'Phone number Japan')));
			?>
-->












