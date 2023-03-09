<!DOCTYPE html>
<html lang="ja" class="h-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', config('app.name'))</title>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="d-flex flex-column h-100">
  @include('layouts.header')

  <main class="py-4 bg-light flex-shrink-0">
    <div class="container ">
      @yield('mainContent')
    </div>
  </main>

  @include('layouts.footer')
</body>

</html>
