<!DOCTYPE html?>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php 
			$login_page_title="KosenClub";
			echo $login_page_title; 
			?>
	</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<?php
		echo $this->Html->meta('icon');		
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('signin');
		echo $this->Html->script('jquery');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="container">			
		 	<?php
		 		
		 		
				/*$currentAction = $this->params['action'];
				if($currentAction == 'add'){
					echo $this->Html->link(
					$this->Html->image('logo3.png', array('alt'=>'KosenClub logo','width'=>'120px', 'height'=>'60px' )),
						array('controller'=>'users', 'action'=>'login'),
						array('escape' => false));						
				}else{
					echo $this->Html->link(
					$this->Html->image('logo3.png', array('alt' => 'KosenClub logo','width'=>'120px', 'height'=>'60px' )),
						array('plugin'=>null, 'controller'=>'questions', 'action'=>'add'),
						array('escape' => false));						
				}*/		
				
			?>
	</div><!-- /container -->
			<?php
				echo $this->fetch('content');			 
			?>
	 
</body>



</html>
