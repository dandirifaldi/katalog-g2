<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Dashboard Admin | @yield('title')</title>
    @include('dashboard.layout.link')
  </head>
  <body class="hold-transition sidebar-mini layout-navbar-fixed  layout-fixed layout-footer-fixed tex-sm">
    <!-- Site wrapper -->
    <div class="wrapper">
      <!-- Navbar -->
      @include('dashboard.layout.navbar')
      <!-- Main Sidebar Container -->
      @include('dashboard.layout.nav')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('dashboard.layout.bread')
        <!-- Main content -->
        @yield('content')
      </div>
      <!-- Footer -->
      @include('dashboard.layout.footer')
    </div>
    @include('dashboard.layout.script')
  </body>
</html>
