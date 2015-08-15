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
<div class="row">
	<div class="question-container">
		<div class="question-form">
			<?php
				echo $this->Html->link(
							$this->Html->image('logo3.png',
								array(
									'alt'=>'KosenClub logo',
									'class' => 'login-logo'
									)
							),
							array(
								'controller'=>'users',
								'action'=>'login'
							),
							array('escape' => false)
												);
			?>
			<legend></legend><div class="spacer-small"></div>
			<div class="text-center">
			<h2><?php echo __d('users', 'Нууц үгээ мартсан уу?'); ?></h2>
			<p><?php echo __d('users', 'Та бүртгүүлсэн имэйл хаяг уруугаа орж нэвтрэх зааварчилгааг хүлээн аваарай'); ?></p>
			</div>
			<?php
				echo $this->Form->create($model, array(
					'url' => array(
						'admin' => false,
						'action' => 'reset_password')));
			?>
			<div class="form-group">
				<label for="inputEmail3" class="control-label">Таны имэйл</label><br>
					<?php
						echo $this->Form->input('email', array(
							'label' => false,
							'class' => 'form-control',
							'id'=>'inputEmail3'));
						echo $this->Form->submit('Илгээх', array('class' => 'btn btn-block question-btn'));
						echo $this->Form->end();
					?>
			</div>
		</div>
	</div>
</div>