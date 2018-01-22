@extends('layouts.app')

@section('content')
<section class="hero is-medium is-primary is-bold">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        «IT-START» –
      </h1>
      <h2 class="subtitle">
        Ресурсный центр развития технических видов спорта и робототехники
      </h2>
    </div>
  </div>
</section>
<section class="section sec1">
      <h1 class="title">
        МЕРОПРИЯТИЯ
      </h1>
    <div class="columns is-gapless is-multiline">
      @foreach ( $meros as $mero )
    <div class="column is-4">
    <a href="/mero{{ $mero->id }}" class="a3">
    <div class="hovereffect">
        <img class="img-responsive" src="storage/{{ $mero->img }}" alt="350x200">
        <div class="overlay">
           <h2>{{ $mero->title }}</h2>
           <p>{{ $mero->body }}</p>
        </div>
    </div>
    </a>
    </div>
    @endforeach
    </div>
</section>
<section class="hero is-medium is-primary is-bold">
  <div class="hero-body right">
    <div class="container">
      <h1 class="title">
        Есть вопросы ?
      </h1>
        <a href="/Contacti" class="button is-primary is-large modal-button" data-target="modal-ter">Напиши нам !</a>
    </div>
  </div>
</section>
<section class="section sec1">
      <h1 class="title">
        АКТУАЛЬНЫЕ НОВОСТИ
      </h1>
    <div class="columns">
  @foreach ($neews as $neew)
    <div class="column is-4">
    <a href="/new{{ $neew->id }}">
  <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img src="storage/{{ $neew->img }}" alt="Placeholder image">
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-content">
        <p class="title tt1 is-4">{{ $neew->title }}</p>
        <time datetime="2016-1-1">{{ $neew->data }}</time>
      </div>
    </div>

    <div class="content tt2">
    {!! $neew->body !!}
    </div>
  </div>
  </div>
  </a>
  </div>
  @endforeach
  </div>
</section>

@endsection
