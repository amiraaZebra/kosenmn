//Variables
var timer=5000;
var slideWidth;
var slideHeight;
var current=-1;
var slide=0;
var count = $(".slides div").length;
var count2 = $(".navigator div").length;
var ratioFrame;

$(document).ready(function(){
	slideTimer();
});
//Timer Functions
function slideTimer(){
	current++;
	if(current==count)current=0;
	setTimeout(slideTimer, timer);
}
//Scale Functions
function ScaleSlider() {

	slideWidth = $(".slide-container").width();
	slideHeight = $(".slide-container").height();
	ratioFrame = slideWidth/slideHeight;
	//slides div position inline
	$(".slides div").each(function(index, el) {
		if(current==index){
			slide=(-index)*slideWidth;
			$(".slides").css({
				'margin-left': slide
			});
		}
		$(this).css({
			'margin-left': slideWidth*index
		});
	});
	//navigator position and function
	$(".navigator div").each(function(index, el) {
		$(this).css({
			'margin-left': slideWidth/2+(index-count2/2)*20
		});
		if(current==index){
			$(".navigator div").not(this).removeClass('current-nav');
			$(this).addClass('current-nav');
		}
	});
	$(".slides img").each(function(index, el) {
		var ratioImage = $(this).width()/$(this).height();
		if(ratioFrame>ratioImage){
			$(this).width(slideWidth);
			$(this).css({
				'height': 'auto'
			});
		}
		else{
			$(this).height(slideHeight);
			$(this).css({
				'width': 'auto'
			});
		}
	});
	//print test
	// $(".test1").html(slideWidth);
	//refresh
	window.setTimeout(ScaleSlider, 30);


}
//execute ScaleSlider
ScaleSlider();
//
$(".navigator div").each(function(index, el) {
$(this).on('click', function(event) {
	event.preventDefault();
	/* Act on the event */
	current=index;
	slide=(-index)*slideWidth;
	$(".slides").css({
			'margin-left': slide
		});
	});
});
$(".navigator div").click(function(event) {
	/* Act on the event */
	$(".navigator div").not(this).removeClass('current-nav');
	$(this).addClass('current-nav');
});
//
$(".arrow-right").click(function(event) {
	if((-slide/slideWidth)==count-1){slide=0;}
	else{
		slide=slide - slideWidth;
	}
	/* Act on the event */
	current=(-slide)/slideWidth;
	$(".slides").css({
		'margin-left': slide
	});
});
$(".arrow-left").click(function(event) {
	if((-slide/slideWidth)==0){slide=-slideWidth*(count-1);}
	else{
		slide=slide + slideWidth;
	}
	/* Act on the event */
	current=(-slide)/slideWidth;
	$(".slides").css({
		'margin-left': slide
	});
});