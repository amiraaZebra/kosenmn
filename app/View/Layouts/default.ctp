<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<head>
	<?php echo $this->Html->charset(); ?>
	<?php echo $scripts_for_layout; ?>
	
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		
//		echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->Html->script('jquery');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
	?>
</head>


 
<body>
	<div class="container-fluid">			
		<div class="row">
		  <div class="col-xs-6">
		 	<?php 
				$currentAction = $this->params['action'];
				if($currentAction == 'contactus'){
					echo $this->Html->link(
					$this->Html->image('logo3.png', array('alt'=>'Kosen Club', 'border' => '0', 'width'=>'180px', 'height'=>'60px' )),
						array('controller'=>'users', 'action'=>'login'),
						array('escape' => false));
				}else{
					echo $this->Html->link(
					$this->Html->image('logo3.png', array('alt' => $cakeDescription, 'border' => '0', 'width'=>'180px', 'height'=>'60px' )),
						array('controller'=>'users', 'action'=>'contactus'),
						array('escape' => false));	
				}
			?>
		  </div>
		</div>
		
		<div class="row row-centered">
		  <div class="col-sm-6 col-centered">
		  		<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
		  </div>
		</div>
	</div>	
</body>



</html>
