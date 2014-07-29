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
	<legend><?php echo __d('users', 'Edit User'); ?></legend>
	
	<dl class="dl-horizontal"><?php $i = 0; $class = ' class="altrow"';?>
		<table class="table table-striped table-bordered">
			<tr>
				<td>		
					<dt><?php echo __d('users', 'Username'); ?></dt>
					<dd>
						<?php echo $this->Form->input('username',
						 array('label' => false, 'class' => 'form-control')); ?>
						&nbsp;						
					</dd>
				</td>
			</tr>
			<tr>
				<td>							
					<dt><?php echo __d('users', 'First name'); ?></dt>
					<dd>
						<?php echo $this->Form->input('first_name',
						 array('label' => false, 'class' => 'form-control')); ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt><?php echo __d('users', 'Last name'); ?></dt>
					<dd>
						<?php echo $this->Form->input('last_name',
						 array('label' => false, 'class' => 'form-control')); ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>							
					<dt><?php echo __d('users', 'Email'); ?></dt>
					<dd>
						<?php echo $this->Form->input('email', array(
						'label' => false, 'class' => 'form-control',
						'id'=>'inputEmail3')); ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt><?php echo __d('users', 'Role'); ?></dt>
					<dd>
						<?php echo $this->Form->input('role',
						 array('label' => false, 'class' => 'form-control')); ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt><?php echo __d('users', 'Gender'); ?></dt>
					<dd>						
						<?php echo $this->Form->input('gender', array('type' =>'radio', 'options'=>array(0=>'Female', 1 =>'Male'), 'legend' => false, 'div' => false)); ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt><?php echo __d('users', 'Birthday'); ?></dt>
					<dd>
						<?php echo $this->Form->input('birthday',
						 array('label' => false, 'class' => 'form-control')); ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt><?php echo __d('users', 'Working Or Studying'); ?></dt>
					<dd>
						<?php echo $this->Form->input('status',
						 array('label' => false, 'class' => 'form-control')); ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt><?php echo __d('users', 'Major'); ?></dt>
					<dd>
						<?php echo $this->Form->input('major',
						 array('label' => false, 'class' => 'form-control')); ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>
					<dt><?php echo __d('users', 'Kosen name kanji'); ?></dt>
					<dd>
						<?php echo $this->Form->input('kosen_kanji',
						 array('label' => false, 'class' => 'form-control')); ?>
						&nbsp;
					</dd>
					<dt><?php echo __d('users', 'Kosen name roman'); ?></dt>
					<dd>
						<?php echo $this->Form->input('kosen_roman',
						 array('label' => false, 'class' => 'form-control')); ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt><?php echo __d('users', 'Kosen year'); ?></dt>
					<dd>
						<?php echo $this->Form->input('kosen_year',
						 array('type' => 'number','label' => false, 'class' => 'form-control')); ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt><?php echo __d('users', 'Facebook account'); ?></dt>
					<dd>
						<?php echo $this->Form->input('fb_acc',
						 array('label' => false, 'class' => 'form-control')); ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt><?php echo __d('users', 'High school'); ?></dt>
					<dd>
						<?php echo $this->Form->input('high_school',
						 array('label' => false, 'class' => 'form-control')); ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt><?php echo __d('users', 'University(in Mongolia)'); ?></dt>
					<dd>
						<?php echo $this->Form->input('university1',
						 array('label' => false, 'class' => 'form-control')); ?>
						&nbsp;
					</dd>				
					<dt><?php echo __d('users', 'University course(in Mongolia)'); ?></dt>
					<dd>
						<?php echo $this->Form->input('course1',
						 array('label' => false, 'class' => 'form-control')); ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt><?php echo __d('users', 'University(in Japan)'); ?></dt>
					<dd>
						<?php echo $this->Form->input('university2',
						 array('label' => false, 'class' => 'form-control')); ?>
						&nbsp;
					</dd>				
					<dt><?php echo __d('users', 'University course(in Japan)'); ?></dt>
					<dd>
						<?php echo $this->Form->input('course2',
						 array('label' => false, 'class' => 'form-control')); ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt><?php echo __d('users', 'Work'); ?></dt>
					<dd>
						<?php echo $this->Form->input('work1',
						 array('label' => false, 'class' => 'form-control')); ?>
						&nbsp;
					</dd>					
					<dt><?php echo __d('users', 'Work Department'); ?></dt>
					<dd>
						<?php echo $this->Form->input('department1',
						 array('label' => false, 'class' => 'form-control')); ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt><?php echo __d('users', 'Address country'); ?></dt>
					<dd>
						<?php echo $this->Form->input('country',
						 array('label' => false, 'class' => 'form-control')); ?>
						&nbsp;
					</dd>					
					<dt><?php echo __d('users', 'Address city'); ?></dt>
					<dd>
						<?php echo $this->Form->input('city',
						 array('label' => false, 'class' => 'form-control')); ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt><?php echo __d('users', 'Phone number in Mongolie'); ?></dt>
					<dd>
						<?php echo $this->Form->input('phone_number_mon', array(
						'label' => false, 'class' => 'form-control')); ?>
						&nbsp;
					</dd>
					<dt><?php echo __d('users', 'Phone number in Japan'); ?></dt>
					<dd>
						<?php echo $this->Form->input('phone_number_jap', array(
						'label' => false, 'class' => 'form-control')); ?>
						&nbsp;
					</dd>
				</td>
			</tr>
								
			<?php
				if (!empty($user['UserDetail'])) { ?>
					<tr>
						<td>
						<?php foreach ($user['UserDetail'] as $section => $details) {
						foreach ($details as $field => $value) {
							echo '<dt>' . $section . ' - ' . $field . '</dt>';
							echo '<dd>' . $value . '</dd>';
						}
					}?>
						</td>
					</tr>
				<?php }
			?>
		</table>					
	</dl>
	<?php echo $this->Form->submit('Submit',array('class' => 'btn btn-default')); ?>		
	<?php echo $this->Form->end(); ?>
</div>