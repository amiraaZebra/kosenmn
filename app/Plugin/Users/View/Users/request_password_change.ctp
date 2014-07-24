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
<h2><?php echo __d('users', 'Forgot your password?'); ?></h2>
<br>
<p><?php echo __d('users', 'Please enter the email you used for registration and you\'ll get an email with further instructions.'); ?></p>
<br>



<?php
	echo $this->Form->create($model, array(
		'url' => array(
			'admin' => false,
			'action' => 'reset_password')));
?>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Your Email</label>
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
	    <div class="col-sm-offset-2 col-sm-10">
	    	<br>				      
			<?php
				echo $this->Form->submit('Submit',array('class' => 'btn btn-default'));
				echo $this->Form->end();
			?>		    
		</div>
	</div>		
</div>