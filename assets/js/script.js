$(function() {
	$(".btt-click").click(function() {
    	$("html, body").animate({ scrollTop: 0 }, "slow");
  		return false;
    	
	});

	//last social media icon top no margin
	$("#social_icons_top").css("margin-right","-15px");

});
