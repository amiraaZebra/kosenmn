//Hailt function
$("#btn-more").click(function(event) {
	event.preventDefault();
	/* Act on the event */
	$(this).toggleClass('search-toggled');
	if($(this).hasClass('search-toggled')){
		$("#search-toggle").show();
		$("#search-toggle1").show();
	}
	else{
		$("#search-toggle").hide();
		$("#search-toggle1").hide();
		$("#sel1").val("0");
		$("#sel2").val("0");
		$("#sel3").val("0");

	}
});

$(".location-select button").click(function(event) {
	event.preventDefault();
	/* Act on the event */
	if($(this).attr('id')=="jp"){
		$(".japan-map").show();
		$("#sel3").show();
	}
	else{
		$(".japan-map").hide();
		$("#sel3").hide();
		$("#sel3").val("0");
	}
});

$(".prefecture").click(function(event) {
	/* Act on the event */
	var mapText = $(this).text();
	$(this).addClass('active');
	$(".prefecture").not(this).removeClass('active');
	$("#sel3 option").each(function(index, el) {
		if($(this).text()==mapText){
			$(this).attr({
				'selected': 'selected'
			});
		}
	});
});
$("#sel3").change(function(event) {
	/* Act on the event */
	$(".prefecture").each(function(index, el) {
	if($('#sel3 :selected').text()==$(this).text()){
		$(this).addClass('active');
		$(".prefecture").not(this).removeClass('active');
	}
});
});