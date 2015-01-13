$(window).scroll(function (){
			if ($(this).scrollTop() > 250){
				$("#up").fadeIn();
			} else{
				$("#up").fadeOut();
			}
			return false;
		});

$("#up").on('click', function(){
	$("body,html").animate({"scrollTop":0}, 'slow');
});
