<!DOCTYPE html>
<html lang="en">

<head>
  @include('partials._head')
</head>

<body id="page-top">

  <div id="wrapper">
    @include('partials._sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        @include('partials._topbar')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          @yield('content')

        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
      @include('partials._footer')
    </div>
  </div>

  @include('partials._scroll')
  @include('partials._logoutmodal')

  @include('partials._javascripts')
  @stack('scripts')

</body>

</html>