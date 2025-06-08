$(document).ready(function(){
$('.nav-bar').on('click', function(){
		//$(this).prev()
		/*if($('.menu-lateral').hasClass('active')) {
			$('.menu-lateral').removeClass('active');
		}else{
			$('.menu-lateral').addClass('active');
		}*/
		$('.menu-lateral').toggleClass('active');
		$('.nav-bar i').toggleClass('fa-circle-xmark fa-bars-staggered');		
//<i class="fa-solid fa-circle-xmark"></i>
		});

$('.videos .itens').slick({
	dots: true,
	arrows: false,
	infinite: true,
	speed: 300,
	autoplay: true,
	slidesToShow: 3,
	slidesToScroll: 3,
	responsive: [
	  {
	    breakpoint: 1024,
	    settings: {
	     slidesToShow: 3,
	     slidesToScroll: 3
	   }
	 },
	 {
	   breakpoint: 600,
	   settings: {
	     slidesToShow: 2,
	     slidesToScroll: 2
	   }
	 },
	{
	   breakpoint: 480,
	   settings: {
	     slidesToShow: 1,
	     slidesToScroll: 1
	   }
	 }
	]
	});

	$('a').on('click', function(){
		if($(this).is('[href]')){
			var link = $(this).attr('href');
			if(link.indexOf('#') > -1){
				$('.menu-lateral').removeClass('active');
				$('.nav-bar i.fa-circle-xmark').toggleClass('fa-circle-xmark fa-bars-staggered');
				event.preventDefault();
				$('html, body').animate({scrollTop: $(link).offset().top
					- 50}, 1500);/*animate recebe animação e tempo dela*/
			}
		}
	});
});