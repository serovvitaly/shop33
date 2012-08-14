<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title><?=(isset($title)?$title:'')?></title>
  
  <script type="text/javascript" src="/lib/jquery/jquery-1.7.2.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="/lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/lib/bootstrap/css/bootstrap-responsive.min.css">
  <script type="text/javascript" src="/lib/bootstrap/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="/skins/default/css/style.css">
  
</head>
<body>
  <div class="container main">
  
    <div class="row header"></div>
  
    <div class="row top_menu">
      <div class="navbar" style="margin-left: 30px;">
        <div class="navbar-inner">
          <div class="container">
            <ul class="nav">
              <li><a href="#">Каталог</a></li>
              <li><a href="#">Каталог</a></li>
              <li><a href="#">Каталог</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  
    <div class="row toppanel">
      <div class="span5">
        <img src="/data/map.png" alt="">
      </div>
      <div class="span3">
        <h2>Закупки по городам</h2>
        <div>
          <div>Москва<p>закупок - 10</p></div>
          <div>Самара<p>закупок - 10</p></div>
          <div>Саратов<p>закупок - 10</p></div>
          <div>Новосибирск<p>закупок - 10</p></div>
          <div>Чита<p>закупок - 10</p></div>
          <div>Хабаровск<p>закупок - 10</p></div>
        </div>
      </div>
      <div class="span4">
      <?
      if (App::user()) {
      ?>
        <p>Привет <?=App::user('name')?></p>
        <p style="color: #FF8000;">новый покупатель</p>
        <div>баланс: 20`000 руб.</div>
        <ul>
          <li><a href="">Закупки</a> - 12</li>
          <li><a href="">Профиль</a></li>
          <li><a href="">Каталог</a></li>
          <li><a href="">История платежей</a></li>
        </ul>
      <?
      } else {
      ?>
        <div class="btn-group">
          <a class="btn" href="/auth/login">Вход</a>
          <a class="btn" href="/auth/login">Регистрация</a>
        </div>
      <?
      }
      ?>
        
      </div>
    </div>
  
    <div class="row medium_menu">
      <div class="navbar" style="margin-left: 30px;">
        <div class="navbar-inner">
          <div class="container">
            <ul class="nav">
              <li><a href="#">Каталог</a></li>
              <li><a href="#">Каталог</a></li>
              <li><a href="#">Каталог</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  
    <div class="row catalog show-grid">
      <div class="span2"></div>
      <div class="span2"></div>
      <div class="span2"></div>
      <div class="span2"></div>
      <div class="span2"></div>
      <div class="span2"></div>
      <div class="span2"></div>
      <div class="span2"></div>
      <div class="span2"></div>
      <div class="span2"></div>
      <div class="span2"></div>
      <div class="span2"></div>
      <div class="span2"></div>
      <div class="span2"></div>
      <div class="span2"></div>
      <div class="span2"></div>
      <div class="span2"></div>
      <div class="span2"></div>
      <div class="span2"></div>
      <div class="span2"></div>
      <div class="span2"></div>
      <div class="span2"></div>
      <div class="span2"></div>
      <div class="span2"></div>
    </div>
    <div style="text-align: center;"><a class="btn">Показать еще</a></div>
  
    <div class="row medium_panel">
      <h1>популярные закупки</h1>
        <div>
          <div class="span4"></div>
          <div class="span4"></div>
          <div class="span4"></div>
        </div>
    </div>
  
    <div class="row footer"></div>
    
  </div>
  
</body>
</html>