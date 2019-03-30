$(document).ready(function() {
	var currID = 0;
	var current;
	var previous;
	$(".banner_content_slide").css({opacity: 0});
	var banners = $(".banner_content_slide");
	current = banners[currID];
	previous = banners[banners.length-1];
	performaShowHide = function()
	{
		console.log(currID);
	    $(current).animate({
	        opacity: 1
	    }, 750 );
	    $(previous).animate({
	        opacity: 0
	    }, 750 );
		currID++;
		if(currID>=banners.length) currID = 0;
		previous = current;
		current = banners[currID];
	}
	play = setInterval(function(){
		performaShowHide();
		}, 5000);
	performaShowHide();
});