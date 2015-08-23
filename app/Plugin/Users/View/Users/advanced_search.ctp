<?php
  echo $this->Html->script('advanced_search');
?>
<h1>Нарийвчилсан хайлт</h1>

<form class="form-inline">
	<div class="form-group">
    <p class="form-control-static"> Hэр </p>
  </div>
  <div class="form-group">	
    <input type="text" class="form-control" id="name" placeholder="Hэр">
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
    <select id="kosen-year">
 			<option value="2015">2015</option>
 			<option value="2014">2014</option>
 			<option value="2013">2013</option>
 			<option value="2012">2012</option>
 			<option value="2011">2011</option>
      <option value="2010">2010</option>
      <option value="2009">2009</option>
      <option value="2008">2008</option>
      <option value="2007">2007</option>
      <option value="2006">2006</option>
      <option value="2005">2005</option>
      <option value="2004">2004</option>
      <option value="2003">2003</option>
      <option value="2002">2002</option>
      <option value="2001">2001</option>
      <option value="2000">before 2000</option>     
		</select>
  	</div>
	<div class="form-group">
    	<p class="form-control-static"> Мэрэгжил </p>
    </div>
    <div class="form-group">	
    	<select id="prof-select">
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
    	<select class="loc-select">
 			<option>北海道</option>
 			<option>東北</option>
 			<option>関東</option>
 			<option>関西</option>
 			<option>九州</option>
		</select>
  	</div>  	  	
  <a href="javascript:void(0)" id="search-btn" class="btn btn-primary" role="button"> Хайх </a>
</form>

<div>
  <table id="search-result" style="border-collapse: separate; border-spacing: 20px;">
    <tr>
      <th> Hэр </th>
      <th> Косэн </th>
      <th> Косэнд ирсэн он </th>
      <th> Их сургууль </th>
      <th> Мэргэжил </th>
      <th> Байршил </th>
    </tr>
  </table>
</div>  

<!-- 
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
