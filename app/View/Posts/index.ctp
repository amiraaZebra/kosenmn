<script type="text/javascript">
	$("#sidebar-kosen-wrapper").show('fast');
</script>
<div class="post-container">
	<div class="row">
		<?php
		if($this->Session->read('Auth.User.role') === 'admin'){
		?>
		<?php echo $this->Html->script('ckeditor/ckeditor', array('inline' => false)); ?>
		<div class="col-lg-12 kosen-post">
			<h3 class="post-title">
			<?php echo __('Шинэ пост'); ?>
			</h3>
			<div class="post-content">
				<?php echo $this->Form->create('Post',
					array(
						'controller' => 'posts',
						'action' => 'add'),
					array('role' => 'form'));
				?>
				<?php echo $this->Form->input('title',
				array('class' => 'form-control', 'label' => "", 'placeholder' => "Гарчиг")); ?>
				<div class="">
					<?php echo $this->Form->input('text', array(
								'class' => 'ckeditor',
								'id' => 'textarea_id',
					'label' => "")); ?>
				</div>
			</div>
			<div class="insert-post">
				<?php echo $this->Form->submit('Оруулах', array('class' => 'btn btn-default kosen-btn')); ?>
			</div>
		</div>
		<?php
		}
		?>
		<?php foreach ($posts as $post): ?>
		<div class="col-lg-12 kosen-post">
			<h3 class="post-title">
			<?php echo $this->Html->link(
				h($post['Post']['title']),
				array(
					'controller' => 'posts',
					'action' => 'view',
					$post['Post']['id']),
			array('escape'=>false)); ?>
			</h3>
			<div class="post-info">
				<?php
				echo $this->Html->link($this->Html->image("profile/".$this->Session->read('Auth.User.profile_image'),
				array("alt" => "", "class" => "prof-pic")) . $this->Session->read('Auth.User.username'), array(
				'plugin'=>'users',
				'controller'=>'users',
				'action' => 'view',
				$this->Session->read('Auth.User.id')), array('class'
				=>'', 'escape' => false));
				echo " ";
				?>
				<!--
				<span class="post-date"><?php #echo h($this->Time->format('Y.m.d',$post['Post']['created'])); ?></span>
			-->
				
				<span class="until today"><?php 

					// Нийтлэлийн өдөр болон өнөөдөр
					$post_date=h($this->Time->format("Y-m-d H:i:s",$post['Post']['created']));
					$today_date=date("Y-m-d H:i:s");
					// Өдөр хувиргалт
					$post_date1=new DateTime($post_date);
					$today_date1=new DateTime($today_date);

					// Өдөр хоног цагийн зөрүү
					$diff = $post_date1->diff($today_date1)->format("%a");
					$min=$post_date1->diff($today_date1)->format('%i');
					$sec=$post_date1->diff($today_date1)->format('%s');
					$hour=$post_date1->diff($today_date1)->format('%h');

					// Хэвлэлт
					if($diff==0 && $hour==0 && $min==0){
						echo $sec.' секундын өмнө';
					}
					else if($diff==0 && $hour==0){
						echo $min.' минутын өмнө';
					}
					else if($diff==0){
						echo $hour.' цагийн өмнө';
					}
					else if($diff==1){

						echo "өчигдөр";
					}
					else if($diff==2){

						echo "уржигдар";
					}
					else if($diff<=14){

						echo $diff." хоногийн өмнө";
					}
					else {
						echo $post_date;
					}
				?>
				</span>
				<!--
				<span class="today"><?php #echo date('Y.m.d'); ?> </span>
			-->

			</div>
			<div class="post-separator"></div>
			<div class="post-content">
				<?php echo html_entity_decode(h($post['Post']['text'])); ?>&nbsp;
			</div>
			<div class="post-separator"></div>
			<div class="post-more">
				<div class="post-icons">
					<a href="" class="glyphicon glyphicon-heart"></a>
					<a href="" class="glyphicon glyphicon-comment"></a>
				</div>
				<?php
					echo $this->Html->link('Цааш унших...', array(
						'controller' => 'posts',
						'action' => 'view',
						$post['Post']['id']),
						array('escape'=>false
						));
				?>
				
			</div>
		</div>
		<?php endforeach; ?>
		<div class="paging">
			<nav>
				<ul class="pagination text-center" style="text-align:center;">
					<li>
						<a href="" aria-label="Previous">
							<?php
								echo $this->Paginator->prev(mb_convert_encoding('&#x27e8;&#x27e8;', 'UTF-8', 'HTML-ENTITIES'), array(), null, array('class' => 'prev disabled', 'aria-hidden' => "true"));
							?>
						</a>
					</li>
<!-- 					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li> -->
					<li>
						<a href="#" aria-label="Next">
							<?php
								echo $this->Paginator->next(mb_convert_encoding('&#x27e9;&#x27e9;', 'UTF-8', 'HTML-ENTITIES'), array(), null, array('class' => 'next disabled'));
							?>
						</a>
					</li>
				</ul>
			</nav>
			<p>
				<?php
				echo $this->Paginator->counter(array(
				'format' => __('Нийт {:pages} хуудаснаас {:page}-г үзүүлж байна. <br> Энэ хуудсан дахь мэдээллийн тоо: {:current} ширхэг')
				));
				//{:count} total, starting on record {:start}, ending on {:end}
				?>
			</p>
			<?php
				echo $this->Paginator->prev(mb_convert_encoding('&#x27e8;&#x27e8;', 'UTF-8', 'HTML-ENTITIES'), array(), null, array('class' => 'prev disabled', 'aria-hidden' => "true"));
				echo $this->Paginator->numbers(array('separator' => ''));
				echo $this->Paginator->next(mb_convert_encoding('&#x27e9;&#x27e9;', 'UTF-8', 'HTML-ENTITIES'), array(), null, array('class' => 'next disabled'));
			?>
		</div>
	</div>
</div>