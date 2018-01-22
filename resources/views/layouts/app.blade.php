<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ $titl or 'IT-START' }}</title>
  <!--meta-->
  <meta charset="UTF-8">
  <meta name="description" content="{{ $meta or 'IT-START' }}"/>
  <META NAME="keywords" CONTENT="{{ $keywords or 'IT-START' }}">
  <META NAME="AUTHOR" CONTENT="https://vk.com/glrlcocks">
  <meta name="revisit-after" content="5 days">
  <link rel="SHORTCUT ICON" href="assets/img/soc.png" type="image/x-icon">
    
  <!--соц сети-->
  <meta property="og:type" content="article" />
  <meta property="og:title" content="{{ $titl or 'IT-START' }}" />
  <meta property="og:description" content="{{ $meta or 'IT-START' }}" />
  <meta property="og:image" href="storage/{{ $img or 'pages/soc.png' }}" content="storage/{{ $img or 'pages/soc.png' }}"  />
  <meta property="og:url" content="IT-START" />
  <meta property="og:site_name" content="IT-START" />

  <link rel="stylesheet" href="assets/main.css">
  <link rel="stylesheet" href="assets/bulma.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div id="app">
    @include('layouts.nav')
    @yield('content')
    @include('layouts.footer')
    @include('layouts.scripts')
    </div>
</body>
</html>
