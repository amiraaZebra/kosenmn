<div class="users view">
<legend><?php echo __d('users', 'User Profile'); ?></legend>
	<dl class="dl-horizontal"><?php $i = 0; $class = ' class="altrow"';?>
		<table class="table table-striped table-bordered">
			<tr>
				<td>		
					<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'Profile Photo'); ?></dt>
					<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
						<?php echo $this->Html->image('profile//profilePhoto_'.$user[$model]['username'].'.jpg', array('width'=>'150')); ?>
						&nbsp;						
					</dd>
				</td>
			</tr>
			<tr>
				<td>		
					<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'Username'); ?></dt>
					<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
						<?php echo $user[$model]['username']; ?>
						&nbsp;						
					</dd>
				</td>
			</tr>
			<tr>
				<td>
					
					<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'First name'); ?></dt>
					<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
						<?php echo $user[$model]['first_name']; ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'Last name'); ?></dt>
					<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
						<?php echo $user[$model]['last_name']; ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>							
					<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'Email'); ?></dt>
					<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
						<?php echo $user[$model]['email']; ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'Role'); ?></dt>
					<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
						<?php echo $user[$model]['role']; ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'Gender'); ?></dt>
					<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
						<?php 
							if($user[$model]['gender']){
								echo 'male';
							}else{
								echo 'female';
							}; 
						?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'Birthday'); ?></dt>
					<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
						<?php echo $user[$model]['birthday']; ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'Working Or Studying'); ?></dt>
					<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
						<?php echo $user[$model]['status']; ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'Major'); ?></dt>
					<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
						<?php echo $user[$model]['major']; ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>
					<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'Kosen name'); ?></dt>
					<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
						<?php echo $user[$model]['kosen_kanji'].'('.$user[$model]['kosen_roman'].')'; ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'Kosen year'); ?></dt>
					<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
						<?php echo $user[$model]['kosen_year']; ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'Facebook account'); ?></dt>
					<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
						<?php echo $user[$model]['fb_acc']; ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'High school'); ?></dt>
					<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
						<?php echo $user[$model]['high_school']; ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'University(in Mongolia)'); ?></dt>
					<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
						<?php echo $user[$model]['university1'].' '.$user[$model]['course1']; ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'University(in Japan)'); ?></dt>
					<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
						<?php echo $user[$model]['university2'].' '.$user[$model]['course2']; ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'Work'); ?></dt>
					<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
						<?php echo $user[$model]['work1'].' '.$user[$model]['department1']; ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'Address'); ?></dt>
					<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
						<?php echo $user[$model]['city'].' '.$user[$model]['country']; ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<dt<?php if ($i % 2 == 0) echo $class; ?>><?php echo __d('users', 'Phone number'); ?></dt>
					<dd<?php if ($i++ % 2 == 0) echo $class; ?>>
						<?php echo $user[$model]['phone_number_mon'].'(Mongolia) '.$user[$model]['phone_number_jap'].'(Japan)'; ?>
						&nbsp;
					</dd>
				</td>
			</tr>
			<tr>
				<td>					
					<?php
					if (!empty($user['UserDetail'])) {
						foreach ($user['UserDetail'] as $section => $details) {
							foreach ($details as $field => $value) {
								echo '<dt>' . $section . ' - ' . $field . '</dt>';
								echo '<dd>' . $value . '</dd>';
							}
						}
					}
					?>
				</td>
			</tr>
		</table>					
	</dl>	
</div>