<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>G2 Helm @yield('title')</title>
    @include('layout.link')
  </head>
  <body class="hold-transition layout-top-nav layout-navbar-fixed">
    <div class="wrapper">
      @include('layout.v_nav')
      <div class="content-wrapper">
        @yield('pagehead')
        @yield('carousel')
        @yield('slider')
        @yield('exterminator')
        @yield('optimax')
        @yield('centrino')
        @yield('bogo')
        @yield('content')
      </div>
      @include('layout.footer')
    </div>
    @include('layout.script')
  </body>
</html>
