$(document).ready(function()
{
	var path = window.location.pathname;
    var navListItems = $('.side-menu li > a');
    navListItems.each(function(i){
		var link = $(this).attr("href");
    	if (path == link){
    		$(this).closest('li').addClass('active');
    	}
    });
});