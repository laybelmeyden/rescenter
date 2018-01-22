@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Панель входа на сайт</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="frm form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-6">
<div class="field">
  <label class="label">Ваша почта</label>
  <div class="control has-icons-left has-icons-right">
    <input class="input" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Введите вашу почту" required autofocus>
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

                        <div class="frm form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-6">
<div class="field">
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

                        <div class="form-group frm">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Запомнить ?
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group frm">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary button">
                                    Войти
                                </button>

                                <!--<a class="btn btn-link btn1" href="{{ route('password.request') }}">-->
                                <!--    Забыли пароль ?-->
                                <!--</a>-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
