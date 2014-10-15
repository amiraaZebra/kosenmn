
<div class="posts form">
	<?php	echo $this->Html->script('ckeditor/ckeditor', array('inline' => false)); ?>

	<?php echo $this->Form->create($model); ?>
		<fieldset>
			<legend><?php echo __d('posts', 'Edit Post'); ?></legend>
			<?php
				echo $this->Form->hidden('id');
				echo $this->Form->hidden('user_id');
				echo $this->Form->hidden('file');
				echo $this->Form->hidden('created');
				echo $this->Form->hidden('modified');
				echo $this->Form->hidden('deleted');
				echo $this->Form->hidden('extra1');
				echo $this->Form->hidden('extra2');
									
				echo $this->Form->input('title', array(
					'label' => __d('posts', 'title')));
				echo $this->Form->input('text', array(
					'label' => __d('posts', 'text'),
					'class' => 'ckeditor'));
					                
			?>
		</fieldset>
	<?php echo $this->Form->end('Submit'); ?>
</div>