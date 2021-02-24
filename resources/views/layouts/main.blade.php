<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movies</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


  </head>

  <style>
    table img {
      width: 100px;
    }
  </style>

  <body style="background-color:#EEEEEE;">
    <div class="container">
      <header>
        @yield('header')
      </header>
      <main>
        @yield('content')
      </main>
      <footer>
        @yield('footer')
      </footer>
    </div>
  </body>
</html>
