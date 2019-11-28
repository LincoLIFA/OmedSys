<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OmedSys</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{csrf_token() }}"  />
  <!-- App favicon -->
  <link rel="shortcut icon"  href="{{asset('images/logo.png')}}"/>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('dashboard/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('dashboard/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dashboard/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('dashboard/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('dashboard/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- fullcalendar party css -->
  <link  href="{{asset('fullcalendar4/packages/core/main.css')}}" rel="stylesheet"/>
  <link  href="{{asset('fullcalendar4/packages/daygrid/main.css')}}" rel="stylesheet"/>
  <link  href="{{asset('fullcalendar4/packages/timegrid/main.css')}}" rel="stylesheet"/>
  <link  href="{{asset('fullcalendar4/packages/list/main.css')}}" rel="stylesheet"/>
  <link  href="{{asset('fullcalendar4/packages/timeline/main.min.css')}}" rel='stylesheet' />
  <link  href="{{asset('fullcalendar4/packages/resource-timeline/main.min.css')}}" rel='stylesheet' />

<<<<<<< HEAD


              
<!-- tablas de Jquery -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
	<!-- DataTables JS-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


=======
>>>>>>> LKO
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include('components.nav')
@include('components.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
   @yield('card')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('components.footer')
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{asset('dashboard/plugins/jquery/jquery.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('dashboard/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('dashboard/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- ChartJS -->
<script src="{{asset('dashboard/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('dashboard/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('dashboard/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('dashboard/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('dashboard/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('dashboard/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dashboard/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dashboard/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dashboard/dist/js/demo.js')}}"></script>
<<<<<<< HEAD
<!-- fullcalendar party JS -->  
  <script src="{{asset('fullcalendar4/packages/core/main.js')}}"></script>
=======

<!-- fullcalendar party JS -->  
<script src="{{asset('fullcalendar4/packages/core/main.js')}}"></script>
>>>>>>> LKO
  <script src="{{asset('fullcalendar4/packages/interaction/main.js')}}"></script>
  <script src="{{asset('fullcalendar4/packages/daygrid/main.js')}}"></script>
  <script src="{{asset('fullcalendar4/packages/timegrid/main.min.js')}}"></script>
  <script src="{{asset('fullcalendar4/packages/list/main.js')}}"></script>
  <script src="{{asset('fullcalendar4/packages/timeline/main.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/es.js" integrity="sha256-bETP3ndSBCorObibq37vsT+l/vwScuAc9LRJIQyb068=" crossorigin="anonymous"></script>
  <script src="{{asset('fullcalendar4/packages/resource-common/main.js')}}"></script>
  <script src="{{asset('fullcalendar4/packages/resource-timeline/main.js')}}"></script>  

<<<<<<< HEAD
=======
  
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>  
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>  
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>  
  <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>  


  <script>
  $(document).ready(function() {
    $('.Tablas').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
  </script>
>>>>>>> LKO
</body>
</html>
