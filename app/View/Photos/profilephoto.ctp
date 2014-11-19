<div class="albums form">
<?php echo $this->Form->create('Photo', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Profile Photo'); ?></legend>
	<?php
		echo $this->Form->input('id',array('type'=>'hidden'));
		echo $this->Form->input('title',array('type'=>'hidden', 'value'=>'profilePhoto_'.$this->session->read('Auth.User.username')));
		echo $this->Form->input('description',array('type'=>'hidden', 'value'=>'profile photo'));
		echo $this->Form->input('text',array('type'=>'hidden', 'value'=>'profile photo'));
		echo $this->Form->input('album',array('type'=>'hidden', 'value'=>'profilePhotos'));
		echo $this->Form->input('height',array('type'=>'hidden', 'value'=>100));
		echo $this->Form->input('width',array('type'=>'hidden', 'value'=>100));
		echo $this->Form->input('user_id',array('type'=>'hidden', 'value'=>$this->session->read('Auth.User.id')));
		echo $this->Form->file('file');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>