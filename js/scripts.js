$(window).scroll(function (){
  
  if($(window).width() >= 992){
    if ($(this).scrollTop() > 250){
      $("#up").fadeIn();
    } else{
      $("#up").fadeOut();
    }
  }
 
  if($('.header').hasClass("index_header")){
    if ($(this).scrollTop() > 5){
      $('.header').addClass('low-header');
      $('.top-slider').css({'padding-top': 71+'px'});
    }
    else{
      $('.header').removeClass('low-header');
      $('.top-slider').css({'padding-top': 0});
    }
  }
  return false;
});

$("#up").on('click', function(){
	$("body,html").animate({"scrollTop":0}, 'slow');
});

/*
  $(window).scroll(function (){
    if ($(this).scrollTop() > 464){
      $(".panel-services-menu").fadeIn();
	} else{
	  $(".panel-services-menu").fadeOut();
	}
	  return false;
  });
*/
  $('.panel-services-menu a').on("click", function(){
    var halo = $(this).attr("name");
    var scrollanchor = $("#"+ halo).offset().top;
    var scrollall = scrollanchor - 275;
    $("body,html").animate({"scrollTop":scrollall}, 'slow');
  });
