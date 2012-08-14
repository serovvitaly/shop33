<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a href="/merchant/" class="brand">Народная закупка</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li class="">
            <a href="/merchant/offers/"><i class="icon-star-empty icon-white"></i> Мои предложения</a>
          </li>
          <li class="">
            <a href="/merchant/catalog/"><i class="icon-shopping-cart icon-white"></i> Каталог товаров</a>
          </li>
          <li class="">
            <a href="/merchant/profile/"><i class="icon-briefcase icon-white"></i> Профиль</a>
          </li>
          <li class="active">
            <a href="/messages/"><i class="icon-envelope icon-white"></i> Сообщения</a>
          </li>
        </ul>
        
        <ul class="nav pull-right">
        <?
            if (APP::user()) {
        ?>
            <li class="hello-user">Добро пожаловать <?= APP::user('name') ?>!</li>
            <li class="divider-vertical"></li>
            <li>
              <a href="/auth/logout/"><i class="icon-off icon-white"></i> Выход <b class="caret"></b></a>
            </li>
        <?
            }
            else {
        ?>
            <li><a href="/auth/login/">Вход</a></li>
            <li class="divider-vertical"></li>
            <li><a href="/auth/registration/">Регистрация</a></li>
        <?
            }
        ?>
            
        </ul>
        
      </div>
    </div>
  </div>
</div>