<?php
echo $this->Html->script('advanced_search.js', array('inline' => false));
?>

<h1>Нарийвчилсан хайлт</h1>

<form class="form-inline">
	<div class="form-group">
    	<p class="form-control-static"> Овог нэр </p>
    </div>
    <div class="form-group">	
    	<input type="password" class="form-control" id="name" placeholder="Овог нэр">
  	</div>
  	<div class="form-group">
    	<p class="form-control-static"> Косэн </p>
    </div>
    	<div class="form-group">
    	<input type="text" class="form-control" id="kosen" placeholder="Косэн">
  	</div>
  	  	<div class="form-group">
    	<p class="form-control-static"> Их сургууль </p>
    </div>
        <div class="form-group">
    	<input type="text" class="form-control" id="university" placeholder="Их сургууль">
  	</div>
  	<br>
  	<br>
	<div class="form-group">
    	<p class="form-control-static"> Японд ирсэн он </p>
    </div>
        <div class="form-group">	
    	<!-- <input type="password" class="form-control" id="year" placeholder="Японд ирсэн он"> -->
    	<select class="form-control">
 			<option>2015</option>
 			<option>2014</option>
 			<option>2013</option>
 			<option>2012</option>
 			<option>2011</option>
		</select>
  	</div>
	<div class="form-group">
    	<p class="form-control-static"> Мэрэгжил </p>
    </div>
    <div class="form-group">	
    	<!-- <input type="password" class="form-control" id="profession" placeholder="Мэрэгжил"> -->
    	<select class="form-control">
 			<option>情報通信</option>
 			<option>電気電子</option>
 			<option>土木建築</option>
 			<option>物質材料</option>
 			<option>機械</option>
		</select>
  	</div>
  	<div class="form-group">
    	<p class="form-control-static"> Байршил </p>
    </div>
    	<div class="form-group">
    	<!-- <input type="text" class="form-control" id="location" placeholder="Байршил"> -->
    	<select class="form-control">
 			<option>北海道</option>
 			<option>東北</option>
 			<option>関東</option>
 			<option>関西</option>
 			<option>九州</option>
		</select>
  	</div>  	  	
  <button type="submit" class="btn btn-primary"> Хайх </button>
</form>

<!-- <div>
	<p>
	<?php
		echo $this->Paginator->counter(
			array(
				'format' => __d(
					'users', 'Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%'
				)
		    )
		);
	?>
    </p> -->

<!-- 	<table class="table table-striped table-bordered">
		<tr>
			<div id="advanced_search">
				<th><label><input type="checkbox" value="1"> Овог нэр</label></th>
				<th><label><input type="checkbox" value="1"> Косэн</label></th>
				<th><label><input type="checkbox" value="1"> Японд ирсэн он</label></th>
				<th><label><input type="checkbox" value="1"> Их сургууль</label></th>
				<th><label><input type="checkbox" value="1"> Мэрэгжил</label></th>
				<th><label><input type="checkbox" value="1"> Байршил</label></th>
			</div>
		</tr>
		<tr>
			<th>Овог нэр</th>
			<th>Косэн</th>
			<th>Японд ирсэн он</th>
			<th>Их сургууль</th>
			<th>Мэргэжил</th>
			<th>Байршил</th>
		</tr>

	</table>
</div>	 -->