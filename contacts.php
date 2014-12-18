<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>webtrend.pro - Контакты</title>
  
  <?/*<meta name="viewport" content="width=device-width, initial-scale=1">*/?>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/1.0.0.css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".navbar-example">
  <header class="header low-header">
    <div class="navbar navbar-inverse " role="navigation"><!--navbar-fixed-top-->
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">web trend</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#o-kompanii">о компании</a></li>
            <li><a href="uslugi.php">услуги</a></li>
            <li><a href="portfolio.php">портфолио</a></li>
            <li><a href="#kontakty">блог</a></li>
            <li class="active"><a href="#blog">контакты</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </header>
  
  <div class="contacts" id="contacts">
    <div class="contacts-form-page" id="contacts-form-page">
      <header class="panel-red-big">
        <div class="container">
          <div class="jumbotron">
            <div class="h1">Контакты</div>
            <div class="contacts-methods-block">
              <ul class="list-inline contacts-methods clearfix">
                <li>
	              <div class="contact-type type-phone">Телефон</div>
	              <div class="contact-value">+7 (495) 777-95-87</div>
                </li>
                <li>
	              <div class="contact-type type-mail">e-mail</div>
	              <div class="contact-value">order@webtrend.pro</div>
                </li>
                <li>
	              <div class="contact-type type-skype">skype</div>
	              <div class="contact-value">order@webtrend.pro</div>
                </li>
                <li>
	              <div class="contact-type type-fb">facebook</div>
	              <div class="contact-value">order@webtrend.pro</div>
                </li>
                <li>
	              <div class="contact-type type-vk">vkontakte</div>
	              <div class="contact-value"><a href="https://vk.com/webtrends">vk.com/webtrends</a></div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>
      <div class="contacts-form-block">
	    <div class="container">
	      <div class="request-title">Заявка</div>
	      <div class="request-text">Заполните заявку и мы свяжемся с вами в ближайшее время</div>
	      <div class="contacts-form">
	        <div class="contacts-form-upper-row clearfix">
	          <div class="col-xs-12 col-sm-4 contacts-request-fio"><input type="text" class="form-control input-text" placeholder="ФИО*"></div>
	          <div class="col-xs-12 col-sm-4 contacts-request-phone"><input type="text" class="form-control input-text" placeholder="Телефон*"></div>
	          <div class="col-xs-12 col-sm-4 contacts-request-mail"><input type="text" class="form-control input-text" placeholder="E-mail*"></div>
	        </div>
	        <textarea class="form-control input-text contacts-question-text" placeholder="Комментарий*" ></textarea>
	        <a href="#sell" class="btn btn-black-red to-send">Отправить</a>
	      </div>
	    </div>
      </div>
    </div>
  
   <?/* <div class="contacts-map-page" id="contacts-map-page">
      <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=PatLjj6aGT-AZI0vovWVbMcmcAu_8JWG&width=600&height=517"></script>
    </div>*/?>
    <div class="wt-map" id="wt_map"></div>
    
  </div><!-- #contacts -->
  
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
  <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
  <script src="js/map.js" type="text/javascript"></script>
  
</body>