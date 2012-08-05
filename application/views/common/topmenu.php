<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a href="/" class="brand">Народная закупка</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li class="">
            <a href="/purchase/"><i class="icon-star-empty icon-white"></i> Мои закупки</a>
          </li>
          <li class="">
            <a href="/cart/"><i class="icon-shopping-cart icon-white"></i> Корзина</a>
          </li>
          <li class="">
            <a href="/wallet/"><i class="icon-briefcase icon-white"></i> Кошелек</a>
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
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-user icon-white"></i> Профиль <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="/auth/logout/">Выход</a></li>
              </ul>
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