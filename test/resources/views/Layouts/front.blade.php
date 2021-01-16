
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>@yield('title', config('app.name'))</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    @include('partials.style')

  </head>

  <body>

    <header>
      @include('partials.header')
    </header>

    <main role="main">

      <div class="album py-5 bg-light">
        <div class="container">
            @yield('content')
      </div>

    </main>

    <footer class="text-muted">
      @include('partials.footer')
    </footer>

    @include('partials.scripts')
  </body>
</html>
