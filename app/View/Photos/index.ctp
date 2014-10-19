<head>
	<?php
		//echo $this->Html->css('photos.styles');
	?>
</head>

<div class="row">

	<div class="col-xs-10 col-xs-offset-1">
		<h2><?php echo __('Зургийн цомог'); ?></h2>
	
		<?php			
		foreach($allAlbum as $album){ 

			$dir = "img/photo_img/".$album."/thumb/";
			if (is_dir($dir)) {
				chdir($dir);
				array_multisort(array_map('filemtime', ($files = glob("*.*"))), SORT_ASC, $files); 
				
				?>

				<div class="col-xs-2">
					<div class="thumbnail">
					
    					<h5 class="text-center hideOverflow">
						<?php echo $this->Html->link($album, array('action' => 'view', $album), array( 'title'=>$album.' ('.count($files).' photos)')); ?>	
						</h5>
  					
  						<div class="">
  						<?php echo $this->Html->image('photo_img/'.$album.'/thumb/'.$files['0'], array(
							'url' => array('action' => 'view', $album),
							'width' => '250',
							'class' => 'img-rounded'));?>
  						</div>
				
					</div>
				</div>
				<?php
				chdir("../../../..");
			}
		}
		?>	
	</div>
</div>