$(function()
{
	var userData = [];
	
	function getData()
	{
		console.log(testBase);
		$.ajax(
		{
			type: 'GET',
      		url: baseDir + '/requests/index/graphdata.json',
      		dataType: 'json',
      		cache: false
    	}).done(function(data){
      		userData = data.Results;
      		console.log(userData);
    	}).fail(function(data){
      		alert('データ取得に失敗しました。');
    	});
	}
	
	function userSearch()
	{
		var name = $('#name').val();
		var kosen = $('#kosen').val();
		var univ = $('#university').val();
		var kosen_year = $('#kosen-year').val();
		console.log(kosen_year);
		var html = "<tr><th> Hэр </th><th> Косэн </th><th> Косэнд ирсэн он </th><th> Их сургууль </th><th> Мэргэжил </th><th> Байршил </th></tr>";
		for (var i = userData.length - 1; i >= 0; i--) {
			var row = '';
			if(userData[i].GraphData.kosen_year == kosen_year){
				row = pushRow(row, i);
			} 
			if(kosen_year == '2000' && userData[i].GraphData.kosen_year <= 2000){
				row = pushRow(row, i);		
			}
			html += row;
			console.log(html);
		}
		$('#search-result').html(html);
	}

	function pushRow(row, i)
	{
		row += '<tr>' 
			+ '<td>' + userData[i].GraphData.name + '</td>' 
			+ '<td>' + userData[i].GraphData.kosen_roman + '</td>' 
			+ '<td>' + userData[i].GraphData.kosen_year + '</td>'
			+ '<td>' + userData[i].GraphData.uni + '</td>'
			+ '<td>' + userData[i].GraphData.major + '</td>'
			+ '<td>' + userData[i].GraphData.location + '</td>'
			+ '</tr>';
		return row;
	}

	getData();

	$('#search-btn').click(function(){
		userSearch();
		return false;
	});


});
