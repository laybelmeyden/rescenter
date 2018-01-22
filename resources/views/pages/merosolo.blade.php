@extends('layouts.app')

@section('content')

<section class="hero is-medium is-primary is-bold">
  <div class="hero-body">
    <div class="container">
      <div class="columns">
          <div class="column is-5">
        <img src="storage/{{ $solo->img }}" class="">
        </div>
        <div class="column is-7">
        <h1 class="title">
            {{ $solo->title }}
        </h1>
        <h2 class="subtitle">
            {{ $solo->data }}
        </h2>
        <h2 class="subtitle">
            {!! $solo->body !!}
        </h2>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection