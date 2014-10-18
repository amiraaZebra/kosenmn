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
			<div class="col-xs-2">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->element('link_list')?>
			</div>
  			<div class="col-xs-6 users overview">
  				<h2><?php echo __d('users', 'Welcome'); ?> <?php echo $user[$model]['username']; ?></h2>
				<h3><?php echo __d('users', 'Recent broadcasts'); ?></h3>
  			</div>
  			<div class="col-xs-4">
  				<?php echo $this->element('actions'); ?>  				
  			</div>  			  			
		</div>



<?php 
//	debug($user);
?>

