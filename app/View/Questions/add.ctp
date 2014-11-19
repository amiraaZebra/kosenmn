<div class="questions form">
<?php echo $this->Form->create('Question'); ?>
		<legend><?php echo __('Бидэнд илгээх санал хүсэлт байвал чөлөөтэй бичнэ үү.'); ?></legend>
	<?php
		//echo var_dump($this->request);
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('text');
		echo $this->Form->input('ip_address', array('type'=>'hidden', 'value'=>$this->request->clientIp()));
	?>
<?php echo $this->Form->end(__('Submit')); ?>
</div>