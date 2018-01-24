<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="css/default.css">
        @yield('css')
    </head>
    <body>
      <h1 class="hidden">Cedric Vleminckx</h1>
        <div class="background">
          <div class="nav">
            <ul>
              @yield('navbar')
            </ul>
          </div>
        </div>

      @yield('content')

      @yield('footer')
    </body>
</html>
