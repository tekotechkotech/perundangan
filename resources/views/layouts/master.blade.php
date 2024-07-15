<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" > --}}
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}" >

    <title>@yield('title', 'My Application')</title>
  </head>
  <body>
    @include('layouts.navbar')
    

    <main class="container py-5">
        @yield('content')
    </main>
    


    <script src="{{ asset('dist/jquery.slim.min.js') }}" ></script>
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}" ></script>

  </body>
</html>