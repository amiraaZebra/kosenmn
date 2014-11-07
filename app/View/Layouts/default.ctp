<!DOCTYPE html?>
<head>
	<?php echo $this->Html->charset(); ?>
	<?php echo $scripts_for_layout; ?>

	<title>
		<?php echo $title_for_layout; ?>
	</title>

	<?php
		echo $this->Html->meta('icon');		
		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->Html->script('jquery');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<style>body {min-width: 800px;}</style>
</head>
<body>
	<div class="container">			
		<div class="row">
		  <div class="col-xs-3" style="padding-left:10px; padding-top:10px; padding-bottom: 100px;">
		 	<?php 
				$currentAction = $this->params['action'];
				if($currentAction == 'contactus'){
					echo $this->Html->link(
					$this->Html->image('logo3.png', array('alt'=>'KosenClub logo','width'=>'120px', 'height'=>'60px' )),
						array('controller'=>'users', 'action'=>'login'),
						array('escape' => false));
				}else{
					echo $this->Html->link(
					$this->Html->image('logo3.png', array('alt' => 'KosenClub logo','width'=>'120px', 'height'=>'60px' )),
						array('controller'=>'users', 'action'=>'contactus'),
						array('escape' => false));	
				}
			?>
		  </div>
		</div>
		
		<div class="row row-centered" style="padding-bottom: 50px;">
			<?php 
				$currentAction = $this->params['action'];
				if($currentAction == 'contactus'){
					echo '<div class="col-xs-8 col-centered" style="border: 1px solid;">';
		  			echo $this->Session->flash();
					echo $this->fetch('content'); 
				}else{
					echo '<div class="col-xs-3 col-centered">';
		  			echo $this->Session->flash();
					echo $this->fetch('content'); 
				}
				echo '</div>'
			?>
		  </div>
		</div>
	</div>	
</body>



</html>
