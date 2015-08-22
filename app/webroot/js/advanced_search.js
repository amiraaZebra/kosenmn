$(function(){
	var userData = [];
	function getData(){
		$.ajax(
		{
			type: 'POST',
      		url: '/kosenmn/requests/index/graphdata.json',
      		dataType: 'json',
      		cache: false
    	}).done(function(data){
      		userData = data.Results;
      		console.log(userData);
    	}).fail(function(data){
      		alert('データ取得に失敗しました。');
    	});
	}
	
	getData();

});
