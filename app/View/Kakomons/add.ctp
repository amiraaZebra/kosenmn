<div class="row">
	<div class="col-xs-8 col-xs-offset-2">
<?php echo $this->Form->create('Kakomon', array('type' => 'file', 'role' =>'form')); ?>

		<legend><?php echo __('Add Kakomon'); ?></legend>
		<div class="form-group">
			<?php echo $this->Form->input('Kakomon.file', array('type' => 'file'));?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('university_select', array(
    		'options' => $university_options,
    		'empty' => '(choose)',
			'label' => 'University',
			'class' => 'form-control'));?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('university', array('type'=>'','class' => 'form-control')); ?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('gakubu_select', array(
    		'options' => $gakubu_options,
    		'empty' => '(choose)',
			'label' => 'Gakubu',
			'class' => 'form-control')); ?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('gakubu', array('class' => 'form-control')); ?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('year', array('class' => 'form-control')); ?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('other', array('class' => 'form-control', 'placeholder' => 'math, english ..')); ?>
		</div>

		<?php echo $this->Form->submit('Add', array('class' => 'btn btn-sm btn-default')); ?>
	</div>
</div>
