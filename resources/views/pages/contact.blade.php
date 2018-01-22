@extends('layouts.app')

@section('content')
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Обратная свзяь
      </h1>
      <h2 class="subtitle">
        Заполните форму ниже, чтобы связаться с нами !
      </h2>
    </div>
  </div>
</section>
<section class="section">
    <div class="container">
<form action="/footerform" method="POST">
{{ csrf_field() }}
<div class="field">
  <label class="label">Ваше имя</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input validate" type="text" name="name" placeholder="Введите ваше имя" required>
    <span class="icon is-small is-left">
      <i class="fa fa-user"></i>
    </span>
  </div>
</div>

<div class="field">
  <label class="label">Ваш Email</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input validate" type="email" name="email" placeholder="Введите ваш Email" required>
    <span class="icon is-small is-left">
      <i class="fa fa-envelope"></i>
    </span>
  </div>
</div>


<div class="field">
  <label class="label">Сообщение</label>
  <div class="control">
    <textarea class="textarea" name="message" placeholder="Введите текст сообщения"></textarea>
  </div>
</div>

<div class="field is-grouped">
  <div class="control">
    <button class="button" type="submit">Отправить</button>
  </div>
</div>
</form>
    </div>
</section>

@endsection