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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<?php echo $scripts_for_layout; ?>
	
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
	?>
</head>
<body>

	<div id="header" >
		
		<!--<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>-->
			
			
            
		
		<!--(create menu)-->
		<div id="menu" class="body-limit">
			<?php $this->start('menu'); ?>
				<ul class="pull-left">
					<li><?php echo $this->Html->link(__('Home'), '/users/dashboard'); ?></li>
					<li><?php echo $this->Html->link(__('Posts'), array('plugin'=>null, 
						'controller' => 'posts', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Users'), array('plugin'=>null, 
						'controller' => 'users', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Files'), array('plugin'=>null, 
						'controller' => 'kakomons', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Photos'), array('plugin'=>null, 
						'controller' => 'photos', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Search'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'search')); ?></li>
					<li><?php echo $this->Html->link(__('Contact Us'), array('plugin'=>'users', 'controller'=>'users', 'action' => 'contactus')); ?></li>
				</ul>
				
				
				
				<div style="height:0px;width:120px;margin:0 auto;">
			    	<?php //echo $this->Html->image('logo.png', array('alt'=>'logo', 'id' => 'logo', 'url'=>'/'))?>
				</div>
			
				<ul class="pull-right logout">					
					
					<li><?php echo $this->Html->link(__('Admin tools'), array(
						'controller' => 'users', 'action' => 'admin_tools')); ?></li>
					<li><?php echo $this->Html->link(__('Logout'), array('plugin'=>'users', 
						'controller' => 'users', 'action' => 'logout')); ?></li>
				</ul>

			<?php $this->end(); ?>

    		<?php echo $this->fetch('menu'); ?>
		</div>
							
		
                			
	</div>

	<div id="container" class="body-limit">
		
		
		
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>


		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
