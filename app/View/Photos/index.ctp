<head>
	<?php
		echo $this->Html->css('photos.styles');
	?>
</head>

<div class="photos index">
	<h2><?php echo __('Albums'); ?></h2>
	
	<?php
		
			
		foreach($allAlbum as $album){
			
			echo '<div class="album">';
				
			
			$dir = "img/photo_img/".$album."/thumb/";
			if (is_dir($dir)) {
				chdir($dir);
				array_multisort(array_map('filemtime', ($files = glob("*.*"))), SORT_ASC, $files); 
				
				echo '<div class="album_name">';
				echo $this->Html->link($album.' ('.count($files).' photos)', array('action' => 'view', $album));
				echo '</div>';
				
				echo '<div class="album_img">';
				echo $this->Html->image('photo_img/'.$album.'/thumb/'.$files['0'], array(
						'url' => array('action' => 'view', $album),
						'width' => '150'));
				echo '</div>';
				chdir("../../../..");
			}
			echo '</div>';
		}
	?>	
</div>