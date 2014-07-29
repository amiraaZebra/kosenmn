<div class="row row-centered">
<h2><?php echo __d('users', 'Reset your password'); ?></h2>
<?php
	echo $this->Form->create($model, array(
		'url' => array(
			'action' => 'reset_password',
			$token,
			'class' => 'form-horizontal',
			'role' => 'form',
			'id' => 'LoginForm')));
	?>
				
	<div class="form-group">
		<label for="inputPassword3" class="col-sm-3 control-label">new password</label>
		<div class="col-sm-9">
		  <?php
			  echo $this->Form->input('New_password', array(
				'label' => false,
				'type' => 'password',
				'class' => 'form-control',
				'id'=>'inputPassword3'));
		  ?>
		</div>
		<br>
	</div>
	<div class="form-group">
		<label for="inputPassword3" class="col-sm-3 control-label">Comfirm</label>
		<div class="col-sm-9">
		  <?php
			  echo $this->Form->input('confirm_password', array(
				'label' => false,
				'type' => 'password',
				'class' => 'form-control',
				'id'=>'inputPassword3'));
		  ?>
		</div>
	</div>
	<br>
	<div class="form-group">
	    <div class="col-sm-offset-2 col-sm-9">		      
	      <?php
				echo $this->Form->submit('Submit',array('class' => 'btn btn-default'));
				echo $this->Form->end();
	      ?>		      
	    </div>
	</div>
<!--							
<?php			
	echo $this->Form->input('new_password', array(
		'label' => __d('users', 'New Password'),
		'type' => 'password'));
	echo $this->Form->input('confirm_password', array(
		'label' => __d('users', 'Confirm'),
		'type' => 'password'));
	echo $this->Form->submit(__d('users', 'Submit'));
	echo $this->Form->end();
?>
-->
</div>