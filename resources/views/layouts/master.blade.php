<!DOCTYPE html>
<html lang="en">
  <div class="container">
    <head>
      <meta charset="UTF-8">
      <title>@yield('title')</title>
      <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">
      @yield('styles')
    </head>
    <body>
      @include('inc.messages')

      <script type="text/javascript" src="{{ URL::to('js/jquery.min.js') }}"></script>
      <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
      @yield('scripts')
          
    </body>
  </div>
</html>