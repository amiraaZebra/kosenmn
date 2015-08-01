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
            <li><?php echo $this->Html->link(__('Add Post'), array('plugin'=>NULL, 'controller' => 'posts', 'action' => 'add')); ?></li>
            <li><?php echo $this->Html->link(__('Add Photo'), array('plugin'=>NULL, 'controller' => 'photos', 'action' => 'add')); ?></li>
            <li><?php echo $this->Html->link(__('Add Kakomon'), array('plugin'=>NULL, 'controller' => 'kakomons', 'action' => 'add')); ?></li>
        </ul>
</div>
