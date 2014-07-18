<div class="posts add">
<?php 

	echo $this->Html->script('ckeditor/ckeditor', array('inline' => false));

	echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend><?php echo __('Add Post'); ?></legend>
		
		<?php
	
		echo $this->Form->input('title');
		echo $this->Form->input('text', array(
			'class' => 'ckeditor',
			'id' => 'textarea_id'));
		

		?>
	</fieldset>
<?php echo $this->Form->end(__('Post')); ?>
</div>

<?php
	echo $this->element('actions');
?>