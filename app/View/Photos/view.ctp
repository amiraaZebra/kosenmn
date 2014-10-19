
<head>
	<?php
		echo $this->Html->css('photoswipe');
		echo $this->Html->script('photos/klass.min');
		echo $this->Html->script('photos/code.photoswipe-3.0.5.min');
		
		
	?>
</head>

<div class="row">
  <div class="col-xs-offset-1">
    <?php echo $this->Html->link('<span class="glyphicon glyphicon-arrow-left"></span>'."Back to Albums", array(
                'controller' => 'photos', 'action' => 'index'), array('escape'=>false)); ?>
  </div>
</div>
<div class="row">
	
	<?php
		
		$thumbdir = "img/photo_img/".$albumName."/thumb/";

		
		if (is_dir($thumbdir)) {

			$dir = $thumbdir; 
			chdir($dir); 
			array_multisort(array_map('filemtime', ($files = glob("*.*"))), SORT_ASC, $files);
	?>

	<div class="col-xs-10 col-xs-offset-1">
			<h2>
				<?php  echo __($albumName); ?>
				<small><?php  echo __(' ('.count($files).' photos)'); ?></small>
			</h2>
			

	<div id="Gallery1" class="">

	<?php 
			foreach($files as $file) { 
	?>
				<div class="col-xs-2 noPadding">
					<div class="">
					<?php echo $this->Html->image('photo_img/'.$albumName.'/thumb/'.$file, array(
						'url' => '../app/webroot/img/photo_img/'.$albumName.'/full/'.$file,
						'class' => 'img-thumbnail',
						'width' => '250',)); ?>
					</div>
				</div>
		<?php
			}  
		}
	?>
	</div>
	
	</div>
	
</div>

<script type="text/javascript">

		(function(window, PhotoSwipe){
		
			document.addEventListener('DOMContentLoaded', function(){
			
				var
					options = {},
					gallery1Instance = PhotoSwipe.attach( window.document.querySelectorAll('#Gallery1 a'), options );
			
			}, false);
			
			
		}(window, window.Code.PhotoSwipe));
		
	</script>