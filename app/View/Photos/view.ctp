
<head>
	<?php
		echo $this->Html->css('photos.styles');
		echo $this->Html->css('photoswipe');
		echo $this->Html->script('photos/klass.min');
		echo $this->Html->script('photos/code.photoswipe-3.0.5.min');
		
		
	?>
</head>

<div class="photos" id="MainContent">
	
	<?php $this->Html->image('log.png', array('alt' => 'logo', 'url'=>'/'));	?>
	
	<div class="page-content">
		<h2><?php  echo __($albumName); ?></h2>
	</div>

	<ul id="Gallery1" class="gallery">
		
		
	<?php
		
		$thumbdir = "img/photo_img/".$albumName."/thumb/";

		
		if (is_dir($thumbdir)) {
			
    		/*if ($dh = opendir($thumbdir)) {
        		while (($file = readdir($dh)) !== false) {
					if( "." == $file || ".." == $file || "Thumbs.db" == $file){
           				continue;
        			}
									
					echo "<li>";
					echo $this->Html->image('photo_img/'.$albumName.'/thumb/'.$file, array(
						'url' => '../app/webroot/img/photo_img/'.$albumName.'/full/'.$file));
					echo "</li>";

        		}
        	closedir($dh);
    		}*/
			$dir = $thumbdir; 
			chdir($dir); 
			array_multisort(array_map('filemtime', ($files = glob("*.*"))), SORT_ASC, $files); 
			foreach($files as $file) { 
				  echo "<li>";
					echo $this->Html->image('photo_img/'.$albumName.'/thumb/'.$file, array(
						'url' => '../app/webroot/img/photo_img/'.$albumName.'/full/'.$file));
					echo "</li>";
			}  

			/*$files = glob($thumbdir.'*');
				usort($files, function($a, $b) {
   					 return filemtime($a) < filemtime($b);
				});
			foreach($files as $file){
				echo "<li>";
				echo $this->Html->image('photo_img/'.$albumName.'/thumb/'.$file, array(
						'url' => '../app/webroot/img/photo_img/'.$albumName.'/full/'.$file));
				echo "</li>";
				pr($file);
			}*/
		}
	?>
	</ul>
	
	
	
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