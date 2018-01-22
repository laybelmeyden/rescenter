@extends('layouts.app')

@section('content')

<section class="hero is-medium is-primary is-bold">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Документация:
      </h1>
<div class="columns is-multiline">
  @foreach ( $dds as $dd )
  <div class="column is-12">
    <a class="a1" href="{{ $dd->ssilka }}">
    {{ $dd->title }}
    </a>
  </div>
  @endforeach
</div>
    </div>
  </div>
</section>
@endsection