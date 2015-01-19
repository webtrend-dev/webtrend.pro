$(document).ready(function(){
var wWindow = $(window).width();

var wt_maxSlides = 4;
var wt_moveSlides = 3;

if(wWindow >= 1200 && wWindow <= 1516)
{
  wt_maxSlides = 3;
}
else if(wWindow >= 768 && wWindow < 1200)
{
  wt_maxSlides = 2;
  wt_moveSlides = 2
}
else if(wWindow < 768)
{
  wt_maxSlides = 1;
  wt_moveSlides = 1
}

  $('#portfolio_slider').bxSlider({
    slideWidth: 332,
    minSlides: 1,
    maxSlides: wt_maxSlides,
    slideMargin: 0,
    moveSlides: wt_moveSlides,
    pager: false,
    nextText: ' '
  });
});