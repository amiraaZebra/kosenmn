<div class="posts view">
<h2><?php  echo __('Post'); ?></h2>
	<?php echo  html_entity_decode(($post['Post']['title'])) ?>
	<?php echo  html_entity_decode(($post['Post']['text'])) ?>
	<?php echo  html_entity_decode(($post['Post']['created'])) ?>
	<?php echo  html_entity_decode(($post['User']['username'])) ?>
</div>
