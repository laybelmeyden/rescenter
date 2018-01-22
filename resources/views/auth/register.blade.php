@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Регистрация на сайте</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-6">
<div class="field frm">
  <label class="label">Ваше ФИО</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input" id="name" type="text" placeholder="Введите ваше ФИО" name="name" value="{{ old('name') }}" required autofocus>
    <span class="icon is-small is-left">
      <i class="fa fa-user"></i>
    </span>
  </div>
</div>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-6">
<div class="field frm">
  <label class="label">Ваша почта</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input" id="email" type="email" placeholder="Введите ваш Email" name="email" value="{{ old('email') }}" required>
    <span class="icon is-small is-left">
      <i class="fa fa-envelope"></i>
    </span>
  </div>
</div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-6">
<div class="field frm">
<label class="label">Ваш пароль</label>
  <p class="control has-icons-left">
    <input class="input" id="password" type="password" placeholder="Введите ваш пароль" name="password" required>
    <span class="icon is-small is-left">
      <i class="fa fa-lock"></i>
    </span>
  </p>
</div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
<div class="field frm">
<label class="label">Введите пароль еще раз</label>
  <p class="control has-icons-left">
    <input class="input" id="password-confirm" type="password" placeholder="Введите ваш пароль еще раз" name="password_confirmation" required>
    <span class="icon is-small is-left">
      <i class="fa fa-lock"></i>
    </span>
  </p>
</div>
                            </div>
                        </div>

                        <div class="form-group frm">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn button btn-primary">
                                    Регистрация
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
