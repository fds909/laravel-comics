<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
  <link rel="stylesheet" href=" {{ asset('css/style.css') }} ">

  <title>DC - @yield('title')</title>
</head>
<body>
  <!-- HEADER -->
  @include('partials.header')

  <!-- MAIN -->
  <main>
    @yield('content')
  </main>

  @include('partials.blueMenu')

  <!-- FOOTER -->
  @include('partials.footer')
</body>
</html>