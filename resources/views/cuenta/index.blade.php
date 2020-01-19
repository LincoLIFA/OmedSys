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
  <link  href="{{asset('dashboard/plugins/fullcalendar4/packages/core/main.css')}}" rel="stylesheet"/>
  <link  href="{{asset('dashboard/plugins/fullcalendar4/packages/daygrid/main.css')}}" rel="stylesheet"/>
  <link  href="{{asset('dashboard/plugins/fullcalendar4/packages/timegrid/main.css')}}" rel="stylesheet"/>
  <link  href="{{asset('dashboard/plugins/fullcalendar4/packages/list/main.css')}}" rel="stylesheet"/>
  <link  href="{{asset('dashboard/plugins/fullcalendar4/packages/timeline/main.min.css')}}" rel='stylesheet' />
  <link  href="{{asset('dashboard/plugins/fullcalendar4/packages/resource-timeline/main.min.css')}}" rel='stylesheet' />

  <!-- Select 2 css -->
  <link rel="stylesheet" href="{{asset('dashboard/plugins/select2/css/select2.css')}}">

  <!-- datatables  css -->
  <link rel="stylesheet" href="{{asset('dashboard/plugins/datatables/datatables.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('dashboard/plugins/datatables/DataTables-1.10.20/css/dataTables.bootstrap4.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('dashboard/plugins/datatables/AutoFill-2.3.4/css/autoFill.bootstrap4.min.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('dashboard/plugins/datatables/Buttons-1.6.1/css/buttons.bootstrap4.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('dashboard/plugins/datatables/Responsive-2.2.3/css/responsive.bootstrap4.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('dashboard/plugins/datatables/RowGroup-1.1.1/css/rowGroup.bootstrap4.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('dashboard/plugins/datatables/RowReorder-1.2.6/css/rowReorder.bootstrap4.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('dashboard/plugins/datatables/Scroller-2.0.1/css/scroller.bootstrap4.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('dashboard/plugins/datatables/SearchPanes-1.0.1/css/searchPanes.bootstrap4.css')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('dashboard/plugins/datatables/Select-1.3.1/css/select.bootstrap4.css')}}"/>
  
  <!-- multiselect jquery css --> 
  <link rel="stylesheet" href="{{asset('dashboard/plugins/multiselect/css/multi-select.css')}}">
  <link rel="stylesheet" href="{{asset('dashboard/plugins/multiselect/css/multi-select.dev.css')}}">
  <link rel="stylesheet" href="{{asset('dashboard/plugins/multiselect/css/multi-select.dist.css')}}">


 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include('components.nav')
@include('components.sidebar-FM')
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

<!-- jQuery UI 1.11.4 -->
<script src="{{asset('dashboard/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- Bootstrap 4 -->
<script src="{{asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- ChartJS -->
<script src="{{asset('dashboard/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('dashboard/plugins/sparklines/sparkline.js')}}"></script>
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

<!-- Verificador de rut -->
<script src="{{asset('js/jquery.rut.chileno.min.js')}}"></script>

<!-- multiselect jquery js -->
<script src="{{asset('dashboard/plugins/multiselect/js/jquery.multi-select.js')}}"></script>

<!-- select2 -->
<script src="{{asset('dashboard/plugins/select2/js/select2.js')}}"></script>

<!-- DataTables -->
<script src="{{asset('dashboard/plugins/datatables/datatables.min.js')}}"></script>

<script type="text/javascript" src="{{asset('dashboard/plugins/datatables/pdfmake-0.1.36/pdfmake.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dashboard/plugins/datatables/DataTables-1.10.20/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dashboard/plugins/datatables/Buttons-1.6.1/js/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dashboard/plugins/datatables/Buttons-1.6.1/js/buttons.colVis.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dashboard/plugins/datatables/Buttons-1.6.1/js/buttons.flash.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dashboard/plugins/datatables/Buttons-1.6.1/js/buttons.html5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dashboard/plugins/datatables/Buttons-1.6.1/js/buttons.print.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dashboard/plugins/datatables/Responsive-2.2.3/js/dataTables.responsive.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dashboard/plugins/datatables/RowGroup-1.1.1/js/dataTables.rowGroup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dashboard/plugins/datatables/RowReorder-1.2.6/js/dataTables.rowReorder.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dashboard/plugins/datatables/Scroller-2.0.1/js/dataTables.scroller.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dashboard/plugins/datatables/SearchPanes-1.0.1/js/dataTables.searchPanes.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dashboard/plugins/datatables/Select-1.3.1/js/dataTables.select.min.js')}}"></script>


<!-- fullcalendar party JS -->  
  <script src="{{asset('dashboard/plugins/fullcalendar4/packages/core/main.js')}}"></script>
  <script src="{{asset('dashboard/plugins/fullcalendar4/packages/interaction/main.js')}}"></script>
  <script src="{{asset('dashboard/plugins/fullcalendar4/packages/daygrid/main.js')}}"></script>
  <script src="{{asset('dashboard/plugins/fullcalendar4/packages/timegrid/main.min.js')}}"></script>
  <script src="{{asset('dashboard/plugins/fullcalendar4/packages/list/main.js')}}"></script>
  <script src="{{asset('dashboard/plugins/fullcalendar4/packages/timeline/main.min.js')}}"></script>
  <script src="{{asset('dashboard/plugins/fullcalendar4/packages/resource-common/main.js')}}"></script>
  <script src="{{asset('dashboard/plugins/fullcalendar4/packages/resource-timeline/main.js')}}"></script>  

  

  <script>
    var myDate = $('.Fecha');
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1;
    var yyyy = today.getFullYear();
    if(dd < 10)
      dd = '0' + dd;
    if(mm < 10)
      mm = '0' + mm;
    today = yyyy + '-' + mm + '-' + dd;
    myDate.attr("min", today);

    function myFunction(){
      var date = myDate.val();
      if(Date.parse(date)){
        if(date < today){
          alert('La fecha no puede ser menor a la actual');
          myDate.val("");
        }
      }
    } 
    </script>
    <script>
      var myDate = $('.Fecha-Nacimiento');
      var today = new Date();
      var dd = today.getDate();
      var mm = today.getMonth() + 1;
      var yyyy = today.getFullYear();
      if(dd < 10)
        dd = '0' + dd;
      if(mm < 10)
        mm = '0' + mm;
      today = yyyy + '-' + mm + '-' + dd;
      myDate.attr("max", today);
  
      function myFunction(){
        var date = myDate.val();
        if(Date.parse(date)){
          if(date > today){
            alert('La fecha no puede ser menor a la actual');
            myDate.val("");
          }
        }
      } 
      </script>
  <script>
  $(document).ready(function() {
    $('.Tablas').DataTable( {
      responsive: true,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );

    $('.buscador').DataTable( {
    } );
} );
  </script>
  <script type="text/javascript">
    jQuery(document).ready(function($){
      $('.valid_rut').rut({
        format_on: 'keyup',
        
      });

    });
    </script>
     </script>
  <script type="text/javascript">
    $(document).ready(function() {
    $('.Select2').select2({
      theme: "classic"
    });
    });
    </script>
    <script>
   
      $(function() {
        $('.Date').datepicker({
        locale: 'es',
        theme: "bootstrap"
          });
      });
</script>


</body>
</html>
