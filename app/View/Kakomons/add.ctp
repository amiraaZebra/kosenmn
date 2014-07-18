<div class="add">
<?php echo $this->Form->create('Kakomon', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Kakomon'); ?></legend>
	<?php
		
		echo $this->Form->input('Kakomon.file', array('type' => 'file'));

		echo $this->Form->input('university_select', array(
    		'options' => $university_options,
    		'empty' => '(choose)',
			'label' => 'University'));
		echo $this->Form->input('university', array('type'=>''));
		echo $this->Form->input('gakubu_select', array(
    		'options' => $gakubu_options,
    		'empty' => '(choose)',
			'label' => 'Gakubu'));
		echo $this->Form->input('gakubu');
		
		echo $this->Form->input('year');
		echo $this->Form->input('other');
		//echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<?php
	echo $this->element('actions');
?>