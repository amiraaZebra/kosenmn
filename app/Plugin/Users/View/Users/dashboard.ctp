<?php
/**
 * Copyright 2010 - 2013, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2013, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>

<div class="row">
			<div class="col-xs-2" style="text-align:left">
				<?php echo $this->element('link_list');?>
			</div>
  			<div class="col-xs-8 users overview">
  				<p><?php echo $this->Session->flash(); ?></p>
  				<p><?php echo __d('users', 'Welcome'); ?> <?php echo $user[$model]['username']; ?></p>
				<p><?php echo __d('users', 'Recent broadcasts'); ?></p>
  			</div>
  			<div class="col-xs-2 style="text-align:right">
  				<?php echo $this->element('actions'); ?>  				
			</div>  			  			
</div>

<?php 
//	debug($user);
?>

