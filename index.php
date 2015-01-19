<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>webtrend.pro</title>
  
  <?/*<meta name="viewport" content="width=device-width, initial-scale=1">*/?>
  
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/1.0.0.css" rel="stylesheet">
</head>
<body>

<header class="header">
  <div class="navbar navbar-inverse " role="navigation"><!--navbar-fixed-top-->
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="/webtrend.pro">web trend</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#o-kompanii">о компании</a></li>
          <li><a href="uslugi.php">услуги</a></li>
          <li><a href="portfolio.php">портфолио</a></li>
          <li><a href="#blog">блог</a></li>
          <li><a href="contacts.php">контакты</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</header>
<div class="top-slider">
  <div class="tab-content">
    <div class="tab-pane fade in active" id="top-slider-1">
      <div class="container">
        <div class="jumbotron">
          <p class="h1 black-h1">Скидка 25%</p>
          <p class="top-slider-text slider-two-rows">Безлимитное сопровождение вашего проекта<br>
на постоянной основе</p>
          <p><a class="btn btn-black-red btn-lg btn-172" role="button">Подробнее</a></p>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="top-slider-2">
      <div class="container">
        <div class="jumbotron slide-internet-magazin">
          <p class="h1 white-h1">Интернет-магазин</p>
          <p class="slider-description">с высокой конверсией на 1С-Битрикс всего за</p>
          <p class="price"><span class="price-number">99 900</span> рублей</p>
          <p><a class="btn btn-white-red btn-lg btn-172" role="button">Подробнее</a></p>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="top-slider-3">
      <div class="container">
        <div class="jumbotron slide-rekordsmeni">
          <p class="h1 white-h1">Рекордсмены</p>
          <p class="top-slider-text slider-three-rows">Компания Webtrend стала золотым <br>партнером UMI.CMS, поставив рекорд <br>по времени получения золотого статуса</p>
          <p><a class="btn btn-white-red btn-lg btn-172" role="button">Подробнее</a></p>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="top-slider-4">
      <div class="container">
        <div class="jumbotron">
          <p class="h1">Hello, world!</p>
          <p>с высокой конверсией всего за</p>
          <p>99 900 рублей</p>
          <p><a class="btn btn-primary btn-lg" role="button">Подробнее</a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="tab-list slider-buttons">
    <div class="container">
      <ul class="list-inline" role="tablist">
        <li class="col-xs-3 active"><a href="#top-slider-1" role="tab" data-toggle="tab" class="tab-sale-icon">Скидка 25%</a></li>
        <li class="col-xs-3"><a href="#top-slider-2" role="tab" data-toggle="tab" class="tab-shop-icon">Интернет-магазин</a></li>
        <li class="col-xs-3"><a href="#top-slider-3" role="tab" data-toggle="tab" class="tab-records-icon">Рекордсмены</a></li>
        <li class="col-xs-3"><a href="#top-slider-4" role="tab" data-toggle="tab" class="tab-leaders-icon">Лидеры</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="company-stats">
  <div class="container">
    <ul class="list-inline clearfix">
      <li class="col-xs-4"><span class="black-comma">78</span> <span class="stats-description">довольных клиентов</span></li>
      <li class="col-xs-4"><span class="black-comma short-black-comma">116</span> действующих проектов</li>
      <li class="col-xs-4"><span class="black-comma">78</span> работ в портфолио</li>
    </ul>
  </div>
</div>

<footer> 
  <div class="container">
    <div class="footer-columns-block">
      <ul class="list-inline footer-columns clearfix">
        <li class="col-xs-4 footer-webtrend">
	      <div class="footer-column-title">Webtrend</div>
	      <p class="footer-webtrend-address">ул. Ленинская Слобода, д.19</p>
	      <p class="footer-webtrend-phone">ТЕЛ. +7 (499) 390-23-83</p>
	      <a href="#call-back" class="red-button call-back clearfix">Заказать звонок</a>
        </li>
        <li class="col-xs-4 footer-menu">
	      <div class="footer-column-title">Меню</div>
	      <div class="col-xs-12 col-md-6 footer-menu-list">
	        <ul class="footer-links-block">
	          <li><a href="#uslugi">Услуги</a></li>
	          <li><a href="#o-kompanii">О компании</a></li>
	          <li><a href="#portfolio">Портфолио</a></li>
	        </ul>
	      </div>
	      <div class="col-xs-12 col-md-6 footer-menu-list">
	        <ul class="footer-links-block">
	          <li><a href="#uslugi">Блог</a></li>
	          <li><a href="#o-kompanii">Вакансии</a></li>
	          <li><a href="#portfolio">Контакты</a></li>
	        </ul>
	      </div>
        </li>
        <li class="col-xs-4 footer-ask-question">
	      <div class="footer-column-title title-ask-question">Задать вопрос</div>
	      <div class="clearfix ask-two-texts">
	        <div class="col-xs-6 footer-fio"><input type="text" class="form-control input-text" placeholder="ФИО*"></div>
	        <div class="col-xs-6 footer-phone"><input type="text" class="form-control input-text" placeholder="Телефон*"></div>
	      </div>
	      <div class="footer-question">
	        <textarea class="form-control input-text" placeholder="Вопрос*" ></textarea>
	      </div>
	      <a href="#sell" class="red-button call-back clearfix">Отправить</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="copyright"><span>Copyright © 2014 По общим вопросам order@webtrend.pro</span></div>
      <div class="social-networks">
	    <ul class="list-inline">
	      <li class="social-network"><a href="#" class="fb"></a></li>
	      <li class="social-network"><a href="#" class="tw"></a></li>
	      <li class="social-network"><a href="#" class="vk"></a></li>
	      <li class="social-network"><a href="#" class="sk"></a></li>
	    </ul>
      </div>  
    </div>
  </div>
  <div id="up" class="up"></div>
</footer>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>
</body>
</html>