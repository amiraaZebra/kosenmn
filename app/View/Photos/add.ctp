<div class="photos add">
<?php echo $this->Form->create('Photo', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add Photo'); ?></legend>
		 
		<!--<input name="data[]" id="files" type="file" multiple="multiple">-->
		<?php
			echo $this->Form->input('pic', array(
				'name' => 'data[]',
				'id' => 'files',
				'type' => 'file',
				'multiple' => 'multiple',
				'label' => 'Upload photos'
			));
		?>
		<output id="list"></output>
		
		
		<?php
			echo $this->Form->input('album_select', array(
    			'options' => $album_options,
    			'empty' => '(choose)',
				'label' => 'Album'));
			echo $this->Form->input('album',array(
				'label' => 'New Album'
			)); 

		?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<script>
	function handleFileSelect(evt) {
    	var files = evt.target.files; // FileList object

    // files is a FileList of File objects. List some properties.
    	var output = [];
    	for (var i = 0, f; f = files[i]; i++) {
      		output.push('<li><strong>', escape(f.name), '</strong> (', f.type || 'n/a', ') - ',
                  f.size, ' bytes, last modified: ',
                  f.lastModifiedDate ? f.lastModifiedDate.toLocaleDateString() : 'n/a',
                  '</li>');
    	}
    	document.getElementById('list').innerHTML = '<ul>' + output.join('') + '</ul>';
  	}

  	document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>