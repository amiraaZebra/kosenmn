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
<div>
        <ul>
            <li><?php echo $this->Html->link(__('Add User'), array('plugin'=>'users', 'controller' => 'users', 'action' => 'admin_add')); ?></li>
            <li><?php echo $this->Html->link(__('See Users'), array('plugin'=>'users', 'controller' => 'users', 'action' => 'admin_index')); ?></li>
        </ul>
</div>
