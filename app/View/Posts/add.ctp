<?php echo $this->Html->script('ckeditor/ckeditor', array('inline' => false)); ?>
<div class="row">	
	<div class="col-xs-8 col-xs-offset-2">
		<legend><?php echo __('New Post'); ?></legend>
		<?php echo $this->Form->create('Post',array('role' => 'form')); ?>
		<div class="panel panel-info">
			<div class="panel-heading">
    			<h3 class="panel-title">
    				<?php echo $this->Form->input('title', 
    					array('label' => "", 'placeholder' => "Гарчиг")); ?></h3>
				
  			</div>
			<div class="">
    			<?php echo $this->Form->input('text', array(
						'class' => 'ckeditor',
						'id' => 'textarea_id',
						'label' => "")); ?>
  			</div>

		</div>
			<?php echo $this->Form->submit('Post hiih', array('class' => 'btn btn-sm btn-info')); ?>
	</div>

</div>
