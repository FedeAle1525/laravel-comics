<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

  <!-- Fonts -->
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  @vite('resources/js/app.js')
</head>

<body>

  <!-- Includo una View 'Header' tramite direttiva Blade -->
  @include('partials.header')

  <main>
    <!-- Stiamo creando un "buco" (segnaposto) che poi riempiremo con del 'contenuto' -->
    @yield('content')
  </main>

  <!-- Includo una View 'Footer' tramite direttiva Blade -->
  @include('partials.footer')


</body>

</html>