$(function(){
	menuStyle();
});

function menuStyle(){
	$('nav').addClass("bg-blue-bcode");
	$('nav .logo').addClass("bg-white-bcode");
	$('nav .logo .logo-princ').addClass("color-blue-bcode");
	$('nav .logo .logo-sub').addClass("bg-blue-bcode").addClass("color-white-bcode");
	$('nav').removeClass("navbar-bottom-home");
	$('nav .logo').removeClass("color-white-9-bcode").removeClass("logo-border-white-9");
	$('nav .logo .logo-sub').removeClass("bg-white-9-bcode").removeClass("color-black-bcode");
};