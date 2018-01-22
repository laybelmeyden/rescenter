@extends('layouts.app')

@section('content')
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Мероприятия
      </h1>
    </div>
  </div>
</section>
<section class="section sec1">
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

@endsection