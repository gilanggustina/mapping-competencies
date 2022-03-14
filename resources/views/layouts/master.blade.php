<!DOCTYPE html>

<html class="loading semi-dark-layout" lang="en" data-textdirection="ltr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
  <meta name="description" content="">
  <meta name="keywords" content="Mapping Competencies">
  <meta name="author" content="Rezki Ramadhan">
  <title>@yield('title')</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('theme/images/ico/favicon.ico')}}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @include('include.style')
  @stack('style')
</head>

<body>
  <div class="container-scroller">

    @include('include.header')

    <div class="container-fluid page-body-wrapper">
      @include('include.sidebar')

      <!-- BEGIN: Content-->
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
      </div>
      <!-- END: Content-->
    </div>
  </div>
  @include('include.script')
  @stack('script')
</body>

</html>