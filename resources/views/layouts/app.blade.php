<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', config('app.name'))</title>
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
  @include('layouts.header')

  <main class="py-4 bg-light">
    <div class="container ">
      @yield('main-content')
    </div>
  </main>

  @include('layouts.footer')
</body>

</html>
