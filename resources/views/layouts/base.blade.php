<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>@yield('title') - Aplikasi Inventaris</title>
  <link 
    href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.min.css') }}" 
    rel="stylesheet"
  >
  <link 
    href="{{ asset('bootstrap-icons-1.7.2/bootstrap-icons.css') }}" 
    rel="stylesheet"
  >
  <script 
    src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.min.js') }}"
    defer
  ></script>
  @yield('style')
</head>
<body>
  @yield('body')
</body>
</html>