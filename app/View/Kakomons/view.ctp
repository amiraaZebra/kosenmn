<div class="view">

<?php $dir='/app/webroot/'; ?>
<h2><?php  echo __('Kakomon'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($post['Kakomon']['id']); ?>
			
			&nbsp;
		</dd>
		<dt><?php echo __('File name'); ?></dt>
		<dd>
			<?php echo h($post['Kakomon']['name']); ?>
			
			&nbsp;
		</dd>
		<dt><?php echo __('University'); ?></dt>
		<dd>
			<?php echo h($post['Kakomon']['university']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gakubu'); ?></dt>
		<dd>
			<?php echo h($post['Kakomon']['gakubu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('year'); ?></dt>
		<dd>
			<?php echo h($post['Kakomon']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('other'); ?></dt>
		<dd>
			<?php echo h($post['Kakomon']['other']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($post['Kakomon']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($post['Kakomon']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($post['Kakomon']['deleted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['User']['id'], array('controller' => 'users', 'action' => 'view', $post['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Download'); ?></dt>
		<dd>
			<?php echo $this->Html->link(h($post['Kakomon']['name']), $dir.$post['Kakomon']['dir']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

