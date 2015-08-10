function footerPosition(){
	// var docHeight = $(document).height();
	var wrapperHeight = $(".kosen-wrapper").height();
	var winHeight = $(window).height();
	if(wrapperHeight<winHeight){
		$(".kosen-footer").css({
				position: 'absolute',
				top: winHeight-70
			});
	}else{
		$(".kosen-footer").css({
				position: 'absolute',
				top: wrapperHeight+150
			});
		
		
	}
	$(".test").html(wrapperHeight);
	window.setTimeout(footerPosition, 30);
}
footerPosition();