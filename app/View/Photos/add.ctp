<div class="row">
	<div class="col-xs-8 col-xs-offset-2">
		<?php echo $this->Form->create('Photo', array('type' => 'file', 'role' =>'form')); ?>
	
		<legend><?php echo __('Add Photo'); ?></legend>
		 
		<!--<input name="data[]" id="files" type="file" multiple="multiple">-->
		<div class="form-group">
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
		</div>
		<div class="form-group">
		
			<?php
			echo $this->Form->input('album_select', array(
    			'options' => $album_options,
    			'empty' => '(choose)',
				'label' => 'Album',
				'class' => 'form-control'));
			?>
		</div>
		<div class="form-group">	
			<?php
			echo $this->Form->input('album',array(
				'label' => 'New Album',
				'class' => 'form-control'
			));
			?>
		</div>
		<?php echo $this->Form->submit('Add', array('class' => 'btn btn-sm btn-default')); ?>
	</div>
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