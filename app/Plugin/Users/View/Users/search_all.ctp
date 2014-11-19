<div>
	<h3>Хайлт</h3>
	
	<?php
		
			//echo $user_id;
			//echo $user_data['User']['id'];		
			echo $this->Form->create();
			
			$options = array(1 => 'ONE', 'TWO', 'THREE');
			$selected = array(1, 3);
			echo $this->Form->input('items', array('multiple' => 'checkbox', 'options' => $options, 'selected' => $selected));
			
			echo $this->Form->input('keyword');
			echo $this->Form->end('Search');
		if(!empty($data)){	
			echo var_dump($data);
			//echo $data['User']['items']['0'];	
		}		
	?>
</div>