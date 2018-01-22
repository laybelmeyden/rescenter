@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Панель пользователя</div>
              @if ($flash = session('mes'))
  <div class="alert1">
   <div id="toast" class="toast" 
   style="    
    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.2);
    position: absolute;
    left: 0px;
    top: 0px;
    transition: visibility 0s linear 0.3s, opacity 0.3s linear;
    visibility: visible;
    z-index: 2000000000;
    position: fixed;
    color: black;">
     {{ $flash }}
     </div>
   </div>
  @endif
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
<div class="tile is-ancestor frm1">
  <div class="tile is-vertical is-8">
    <div class="tile">
      <div class="tile is-parent is-vertical">
        <article class="tile is-child notification is-primary">
          <p class="title">Вашe имя</p>
          <p class="subtitle">{{ Auth::user()->name }}</p>
        </article>
        <article class="tile is-child notification is-warning">
          <p class="title">Ваша почта</p>
          <p class="subtitle">{{ Auth::user()->email }}</p>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child notification is-info">
          <p class="title">Регистрация на мероприятие</p>
          <p class="subtitle">Введите краткую информацию по мероприятию</p>
          <form action="/info" method="POST">
        {{ csrf_field() }}
          <div class="content">
            <div class="hiden">
            <div class="field">
            <div class="control has-icons-left has-icons-right">
              <input class="input" type="email" name="email" placeholder="Email input" value="{{ Auth::user()->email }}">
              <span class="icon is-small is-left">
                <i class="fa fa-envelope"></i>
              </span>
            </div>
          </div>
          <div class="field">
            <div class="control has-icons-left has-icons-right">
              <input class="input" id="name" type="text" name="name" placeholder="Email input" value="{{ Auth::user()->name }}">
              <span class="icon is-small is-left">
                <i class="fa fa-envelope"></i>
              </span>
            </div>
          </div>
          </div>
          <div class="select">
          <select name="title" required>
            <option>Список мероприятий</option>
            @foreach ( $meros as $mero )
            <option value="{{ $mero->title }}">{{ $mero->title }}</option>
            @endforeach
          </select>
        </div>
        <button type="submit" class="button">Выбрать</button>
        </div>
        </form>
        </article>
      </div>
    </div>
    <div class="tile is-parent">
      <article class="tile is-child notification is-danger">
        <p class="title">Возникли вопросы ?</p>
        <p class="subtitle">Свяжитесь с нами !</p>
        <div class="content">
          <a class="button" href="/Contacti">Связаться</a>
        </div>
      </article>
    </div>
  </div>
  <div class="tile is-parent">
    <article class="tile is-child notification is-success">
      <div class="content">
        <p class="title">Доска объявлений</p>
        <p class="subtitle">Тут будут публиковаться важные объявления !</p>
        <div class="content">
        </div>
      </div>
    </article>
  </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
