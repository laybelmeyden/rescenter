<nav class="navbar is-transparent">
  <div class="navbar-brand">
    <a class="navbar-item nav1" href="/">
    <h1 class="title">
    <img src="assets/img/Logo.png">
      </h1>
    </a>
    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navbarExampleTransparentExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="/Meropriyatiya">
        Мероприятия
      </a>
      <a class="navbar-item" href="/Novosti">
        Новости
      </a>
      <a class="navbar-item" href="/Documents">
        Документы
      </a>
      <a class="navbar-item" href="/Contacti">
        Контакты
      </a>
    </div>
    <div class="navbar-end">
    <div class="navbar-item">
    <div class="field is-grouped">
      <p class="control">
      @guest
    <div class="navbar-item has-dropdown is-hoverable">
      <a href="{{ route('login') }}" class="navbar-item">Вход</a>
      <a href="{{ route('register') }}" class="navbar-item">Регистрация</a>
    </div>
      @else
    <div class="navbar-item has-dropdown is-hoverable">
      <a class="navbar-link" href="/home">
      Добро пожаловать, {{ Auth::user()->name }} !<span class="caret"></span>
      </a>
    <div class="navbar-dropdown is-boxed">
      <a href="{{ route('logout') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();" class="nv1">
      Выйти
      </a>
    </div>
    </div>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
      </form>
      @endguest
      </p>
    </div>
    </div>
    </div>
  </div>
</nav>