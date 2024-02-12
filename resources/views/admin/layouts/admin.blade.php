<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Quantum | Dashboard</title>

  <!-- Tell the browser to be responsive to screen width -->

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">

  <!-- Ionicons -->

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Tempusdominus Bbootstrap 4 -->

  <link rel="stylesheet" href="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">

  <!-- iCheck -->

  <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

  <!-- JQVMap -->

  <link rel="stylesheet" href="{{asset('adminlte/plugins/jqvmap/jqvmap.min.css')}}">

  <!-- Theme style -->

  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">

  <!-- overlayScrollbars -->

  <link rel="stylesheet" href="{{asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

  <!-- Daterange picker -->

  <link rel="stylesheet" href="{{asset('adminlte/plugins/daterangepicker/daterangepicker.css')}}">

  <!-- summernote -->

  <link rel="stylesheet" href="{{asset('adminlte/plugins/summernote/summernote-bs4.css')}}">



  <link rel="stylesheet" href="{{asset('adminlte/plugins/sweetalert.css')}}">



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

  <!-- Google Font: Source Sans Pro -->

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">



<style type="text/css">

  .error {

    color: red;

  }

</style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

  @include('admin.partials.header')

  @include('admin.partials.sidebar')

  <div class="content-wrapper">

    @yield('content')

  </div>

  @include('admin.partials.footer')



  </div>

<!-- ./wrapper -->



<!-- jQuery -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.js"></script>

<!-- jQuery UI 1.11.4 -->

<script src="{{asset('adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>

  $.widget.bridge('uibutton', $.ui.button)

</script>

<!-- Bootstrap 4 -->

<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- ChartJS -->

<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>

<!-- Sparkline -->

<script src="{{asset('adminlte/plugins/sparklines/sparkline.js')}}"></script>



<!-- jQuery Knob Chart -->

<script src="{{asset('adminlte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>

<!-- daterangepicker -->

<script src="{{asset('adminlte/plugins/moment/moment.min.js')}}"></script>

<script src="{{asset('adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>

<!-- Tempusdominus Bootstrap 4 -->

<script src="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Summernote -->

<script src="{{asset('adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>

<!-- overlayScrollbars -->

<script src="{{asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<!-- AdminLTE App -->

<script src="{{asset('adminlte/dist/js/adminlte.js')}}"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<script src="{{asset('adminlte/dist/js/pages/dashboard.js')}}"></script>

<!-- AdminLTE for demo purposes -->

<script src="{{asset('adminlte/dist/js/demo.js')}}"></script>



<script src="{{asset('js/sweetalert.js')}}"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


@yield('after-script')

</body>

</html>