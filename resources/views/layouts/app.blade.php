<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Copenhagen Theatre Circle</title>
    <!-- <link rel=\"stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
    @include('layouts.navbar')
    @yield('content')
    <script type="text/javascript" src="/js/app.js"></script>
    @yield('scripts')
  </body>
</html>

