<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        @yield('css')
        <link rel="stylesheet" href="css/default.css">
    </head>
    <body>
      <div class="background">
        <div class="nav">
          <ul>
            @yield('navbar')
          </ul>
        </div>
      </div>

      @yield('content')
    </body>
</html>
