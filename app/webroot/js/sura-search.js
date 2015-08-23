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

// Орон нутгийн сонголт

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

//Хийгээгүй байгаа

function SearchSort(){
	// $(".user-container-1 tr").contents().unwrap();
	// $(".user-container-1").contents().unwrap();
	//Дараа шалгаж үз
	// $(".sort-btns a:first-child").attr('selected', 'selected');
	// $(".sort-btns a").click(function(event) {
	// 	 Act on the event 
	// 	event.preventDefault();
	// });
}
SearchSort();

$(".user-container").click(function(event) {
	/* Act on the event */
	$(this).children().contents().show();
	$(".user-container").not(this).hide();
	$(".sort-box").hide();
	$(".back-btn").show();
	$(".user-container").parent().removeClass('col-sm-6 col-md-6');
	$(".user-container").removeClass('cursor');
	window.scrollTo(0, 0);
	// $(this).parent().removeClass('col-md-6');
	// $(this).addClass('col-sm-12');
	// $(this).addClass('col-md-12');
});

// Буцах кноп

$(".back-btn").click(function(event) {
	/* Act on the event */
	$(".media-notshow").hide();
	$(".user-container").show();
	$(".sort-box").show();
	$(this).hide();
	$(".user-container").parent().addClass('col-sm-6');
	$(".user-container").addClass('cursor');

	if($("#sel1 :selected").text()==$("#sel1 option:first-child").text()){
		$(".test").html("hello");
		$(".user-container").show();
	}
	else{
		$(".user-container").each(function(index, el) {
			var kYear = $(this).children(':nth-child(2)').children(':nth-child(2)').text();
			if($("#sel1 :selected").text()== kYear){
				 // $(".test").append(index + ", ");
				 $(this).show();
				// $(this).parent().show();
				// $(".kosen-media").not(this).hide();
				//$(".kosen-year").not(this).parent().parent().hide();
			}else{
				$(this).hide()
			}
		});
	}
});

//Оноор нь ангилах

$("#sel1").change(function(event) {
	/* Act on the event */
	// $(".test").html($(this).children(':nth-child(2)').text());
	// $(".test").html($(".kosen-media").children(':nth-child(2)').text());
	// $(".test").html($(".user-container").children(':nth-child(2)').children(':nth-child(2)').text());
	// $(".test").html($("#sel1:first").text());
	if($("#sel1 :selected").text()==$("#sel1 option:first-child").text()){
		//$(".test").html("hello");
		$(".user-container").show();
	}
	else{
		$(".user-container").each(function(index, el) {
			var kYear = $(this).children(':nth-child(2)').children(':nth-child(2)').text();
			if($("#sel1 :selected").text()== kYear){
				 // $(".test").append(index + ", ");
				 $(this).show();
				// $(this).parent().show();
				// $(".kosen-media").not(this).hide();
				//$(".kosen-year").not(this).parent().parent().hide();
			}else{
				$(this).hide()
			}
		});
	}
});


