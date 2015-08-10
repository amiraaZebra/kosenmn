function footerPosition(){
	var docHeight = $(document).height();
	var winHeight = $(window).height();
	if(docHeight<winHeight){
		$(".kosen-footer").css({
				position: 'absolute',
				bottom: '0px'
			});
	}else{
		$(".kosen-footer").css({
				position: 'absolute',
				top: docHeight-70
			});
		
		
	}
	// $("p").html(docHeight);
	// window.setTimeout(footerPosition, 30);
}
footerPosition();