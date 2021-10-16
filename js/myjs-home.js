
$(function(){
	menuStyle();
	scrollSectionMenu();
	scrollSectionMenuClick();
	scrollSectionMenuLink();
	formularios();
});

function menuStyle(){
	$(this).scroll(function() {
		if($(this).scrollTop() < 100)
		{
			$('nav').addClass("navbar-bottom-home");
			$('nav .logo').addClass("color-white-9-bcode").addClass("logo-border-white-9");
			$('nav .logo .logo-sub').addClass("bg-white-9-bcode").addClass("color-black-bcode");
			$('nav').removeClass("bg-blue-bcode");
			$('nav .logo').removeClass("bg-white-bcode");
			$('nav .logo .logo-princ').removeClass("color-blue-bcode");
			$('nav .logo .logo-sub').removeClass("bg-blue-bcode").removeClass("color-white-bcode");
		} else {
			$('nav').addClass("bg-blue-bcode");
			$('nav .logo').addClass("bg-white-bcode");
			$('nav .logo .logo-princ').addClass("color-blue-bcode");
			$('nav .logo .logo-sub').addClass("bg-blue-bcode").addClass("color-white-bcode");
			$('nav').removeClass("navbar-bottom-home");
			$('nav .logo').removeClass("color-white-9-bcode").removeClass("logo-border-white-9");
			$('nav .logo .logo-sub').removeClass("bg-white-9-bcode").removeClass("color-black-bcode");
		}
	});
};

function scrollSectionMenuLink(){
	if($('target').length > 0){
		var elemento = '#'+$('target').attr('target');
		var divScroll = $(elemento).offset().top - 77;
		$('html,body').animate({scrollTop:divScroll},2000);
	}
}


function scrollSectionMenuClick(){
	$('header nav ul li a').click(function(){
		var href = $(this).attr('href');
		var divScroll = $(href).position().top - 77;
		$('html,body').animate({scrollTop:divScroll},1000);
	});
}

function scrollSectionMenu(){
	var links = $('header nav ul li a');
	$(window).scroll(function(){
 		var topScroll = $(window).scrollTop();
 		var cont = 0;
 		links.each(function(){
 			cont++;
 			if(cont <= 4){
	 			var href = $(this).attr('href');
	 			var el = $(href);
	 			var posSection = el.offset().top - 78;
	 			var hSection = el.height();

	 			if(posSection <= topScroll && (posSection + hSection) > topScroll){
	 				links.removeClass('active');
	 				$(this).addClass('active');
	 				
	 				var pagina = $(this).attr('realtime');
	 				window.history.pushState('Object', pagina, pagina);

	 			}
 			} else {
 				return;
 			}
 		});
	});
}

function formularios(){
	
	$('body').on('submit', 'form', function(){
		// try{
		// 	var form = $(this);
		// 	$.ajax({
		// 		url: include_path+'enviar.php',
		// 		method: 'post',
		// 		dataType: 'json',
		// 		data: form.serialize()
		// 	})
		// 	alert('Mensagem enviada com sucesso');
		// 	form.each(function(){
		// 		this.reset();
		// 	})
		// 	return false;
		// } catch(e){
		// 	alert(e);
		// }
		alert('Você esta na demonstração do site, o envio de formulário esta desabilitado.');		
	});
}