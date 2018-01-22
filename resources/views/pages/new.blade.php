@extends('layouts.app')

@section('content')
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Новости
      </h1>
    </div>
  </div>
</section>
<section class="section sec1">
    <div class="columns is-multiline">
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