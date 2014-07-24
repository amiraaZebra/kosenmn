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
<div class="users form">
	<?php echo $this->Form->create($model); ?>
		<fieldset>
			<legend><?php echo __d('users', 'Edit User'); ?></legend>
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('username', array(
					'label' => __d('users', 'Username')));
				echo $this->Form->input('email', array(
					'label' => __d('users', 'Email')));					
				echo $this->Form->input('first_name', array(
					'label' => __d('users', 'First name')));
				echo $this->Form->input('last_name', array(
					'label' => __d('users', 'Last name')));
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
                if (!empty($roles)) {
                    echo $this->Form->input('role', array(
                        'label' => __d('users', 'Role'), 'values' => $roles));
                }
                echo $this->Form->input('is_admin', array(
                        'label' => __d('users', 'Is Admin')));
                    echo $this->Form->input('active', array(
                        'label' => __d('users', 'Active')));
			?>
		</fieldset>
	<?php echo $this->Form->end('Submit'); ?>
</div>