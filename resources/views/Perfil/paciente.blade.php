@extends('index')
@section('card')
<?php
$mysqli = new mysqli("localhost", "root", "", "laravel");

if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
       
  $sql=$mysqli->query("select * from `events`  ");
  $sql2=$mysqli->query("select * from `citas` where citPaciente = '{$pacientes->pacnombre}' ");
	
?>



<script type="text/javascript">
    $(document).ready( function () {
    $('#citas').DataTable();
} );
</script>
   <!-- Script de fullcalendar -->
<script type="text/javascript">

  document.addEventListener('DOMContentLoaded', function() {
    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendarInteraction.Draggable;
    var containerEl = document.getElementById('external-events');
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');
    
  var calendar = new FullCalendar.Calendar(calendarEl, {
    plugins: [ 'timeGrid','bootstrap','interaction'  ],
    
    defaultView: 'timeGridWeek',
    hiddenDays: [ 0, 6 ],
    timeZone: 'locale',
    locale :'es',
    defaultTimedEventDuration:'02:00:00',
    
    droppable: true,
    header: {
        left: 'prev,next today',
        center: 'title',
        right: 'timeGridWeek,timeGridDay'
     },
    eventoStartEditable: true,
    eventResizableFromStart: true,
      minTime:'09:00:00',
      maxTime:'19:00:00',
      navLinks: true, // can click day/week names to navigate views
      allDaySlot: false, // hidden option allday on top calendar
      themeSystem : 'bootstrap',
      editable:true,
      nowIndicator:true,
      
      businessHours: [
        {
            daysOfWeek: [ 1, 2, 3, 4 ], 
            startTime: '10:00',
            endTime: '18:00'
        },
     
       ],
        events:[
        <?php
        foreach ($sql as $fila)
        {
            
        ?>
          {
            id:"<?php echo $fila['id'];?>",
            title:"<?php echo $fila['title'];?>",
            start:"<?php echo $fila['start'];?>",
            end:"<?php echo $fila['end'];?>",
            classNames:"<?php echo $fila['classNames'];?>",
            description:"<?php echo $fila['description'];?>",
          },
          <?php } ?>
          <?php
        foreach ($sql2 as $fila2)
        {
            
        ?>
          {
            id:"<?php echo $fila2['id'];?>",
            title:"<?php echo $fila2['citMedico'];?>",
            start:"<?php echo $fila2['citfecha']."T".$fila2['cithora'];?>",
            classNames:"<?php echo $fila2['citEstado'];?>",
           
          },
          <?php } ?>
    
          
          ],
     
        dateClick: function(info ,jsEvent, date) {
            var fecha = info.dateStr;
                if (info.view.type == 'timeGridWeek') {
                   $('#modalReserva').modal('show');
                   
                   
                }   
        },
        
         eventClick: function(info , jsEvent , date) {
             var id = info.event.id;
             var title = info.event.title;
             var classNames = info.event.classNames;
             var startTime = info.event.start.toISOString();
             var endTime  = info.event.end.toISOString();
             
               var start = calendar.formatIso(startTime);
               var end = calendar.formatIso(endTime);
               var fecha = calendar.formatDate(startTime ,{
               
                month: '2-digit',
                year: 'numeric',
                day: 'numeric'
               });
                
               var hora = calendar.formatDate(startTime ,{
               hour:'2-digit',
               minute:'2-digit',
              
               });
               var horaEnd = calendar.formatDate(endTime ,{
               hour:'2-digit',
               minute:'2-digit',
               second:'2-digit',
               });
               
             $('#event-modal').modal('show');
                    $('#title').val(title);
                    $('#id').val(id);
                    $('#title2').val(title);
                    $('#classNames').val(classNames);
                   	$('#date').val(fecha);
                	$('#hora').val(hora);
                	$('#end').val(end);
                	$('#start').val(start);
            
           
          }

        
       
       
       
  });

  calendar.render();
 
  
  new Draggable(containerEl, {
      itemSelector: '.Suspender',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText,
           duration: '02:00',
            classNames:'bloquear',
            
          
          
        };
      }
    });
   
    
    
});

</script>
<!-- Fin Script de fullcalendar -->
<!-- Tamaño y estilos de fullcalendar -->
<style>
  #calendar {
    max-width: 700px;
    max-height: 550px;
  }
   #external-events .fc-event {
    cursor: move;
  }
  .bloquear{
  background:#fa5c7c;
}

    .No-confirmado{
     background:#ffbc00;
    }
    
    .Confirmado{
     background:#0acf97;
    }
    

</style>
<!-- Fin de estilos de fullcalendar -->
 <!-- fullcalendar -->
   

         <div class="container-fluid">
                                        
                                        <!-- Modal -->
                                        <div class="modal fade" id="modalReserva" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Reserva de Cita</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                 <form>
                                                <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-5 col-form-label">Paciente antiguo</label>
                                                    <div class="col-sm-7">
                                                        <a href="{{url('Citas/aggcitas')}}" class="rounded-pill float-right btn btn-primary" >Registrado</a>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="staticEmail" class="col-sm-5 col-form-label">Paciente nuevo</label>
                                                    <div class="col-sm-7">
                                                      <a href="{{url('Pacientes/New')}}" class="rounded-pill float-right btn btn-primary" >No registrado</a>
                                                       
                                                    </div>
                                                </div>  
                                                  </form>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                        
                        <!-- end page title --> 

                        <div class="row my-2">
                            <div class="col-12">

                              

                                <!-- Add New Event MODAL -->
                                <div class="modal fade" id="event-modal" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header pr-4 pl-4 border-bottom-0 d-block">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Add New Event</h4>
                                            </div>
                                            <div class="modal-body pt-3 pr-4 pl-4">
                                            </div>
                                            <div class="text-right pb-4 pr-4">
                                                <button type="button" class="btn btn-light " data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success save-event  ">Create event</button>
                                                <button type="button" class="btn btn-danger delete-event  " data-dismiss="modal">Delete</button>
                                            </div>
                                        </div> <!-- end modal-content-->
                                    </div> <!-- end modal dialog-->
                                </div>
                                <!-- end modal-->
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->
                        
                    </div> <!-- container -->
<!-- Fin fullcalendar -->
                    <div class="row">
                            <div class="col-sm-12">
                                <!-- Profile -->
                                <div class="card bg-primary">
                                    <div class="card-body profile-user-box">

                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="media">
                                                    <span class="float-left m-2 mr-4"><i  class="fas fa-user text-white"></i></span>
                                                    <div class="media-body">

                                                        <h4 class="mt-1 mb-1 text-white">{{$pacientes->pacnombre}}</h4>
                                                        <p class="font-13 text-white-50">{{$pacientes->pacapellidoP}} {{$pacientes->pacapellidoM}}</p>

                                                        <ul class="mb-0 list-inline text-light">
                                                            <li class="list-inline-item mr-3">
                                                                <h5 class="mb-1">{{$pacientes->pacidentificacion}}</h5>
                                                                <p class="mb-0 font-13 text-white-50">RUT</p>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <h5 class="mb-1">{{$pacientes->pacfechaN}}</h5>
                                                                <p class="mb-0 font-13 text-white-50"> Fecha de nacimiento</p>
                                                            </li>
                                                        </ul>
                                                    </div> <!-- end media-body-->
                                                </div>
                                            </div> <!-- end col-->

                                            <div class="col-sm-4">
                                                <div class="text-center mt-sm-0 mt-3 text-sm-right">
                                                    <a type="button"href="{{route('UpdateP',$pacientes->id)}}" class="btn btn-primary">
                                                        <i class="fas fa-user-edit"></i> Editar Perfil
                                                    </a>
                                                </div>
                                            </div> <!-- end col-->
                                        </div> <!-- end row -->

                                    </div> <!-- end card-body/ profile-user-box-->
                                </div><!--end profile/ card -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-4">
                                <!-- Personal-Information -->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0 mb-3">Información general</h4>

                                        <hr/>

                                        <div class="text-left">
                                            <p class="text-muted"><strong>Nombre: </strong> <span class="ml-2">{{$pacientes->pacnombre}} {{$pacientes->pacapellidoP}} {{$pacientes->pacapellidoM}}</span></p>

                                            <p class="text-muted"><strong>Rut :</strong><span class="ml-2">{{$pacientes->pacidentificacion}}</span></p>
                                            
                                            <p class="text-muted"><strong>Teléfono :</strong><span class="ml-2">{{$pacientes->pactelefono}}</span></p>

                                            <p class="text-muted"><strong>Email :</strong> <span class="ml-2">{{$pacientes->paccorreo}}</span></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Personal-Information -->

                                <!-- Toll free number box-->
                                <div class="card text-white bg-info overflow-hidden">
                                    <div class="card-body">
                                        <div class="toll-free-box text-center">
                                            <h4><i class="fas fa-mobile"></i>Contacto : {{$pacientes->pactelefono}}</h4>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                                <!-- End Toll free number box-->

                               

                            </div> <!-- end col-->

                            <div class="col-md-8">

                                <!-- Chart-->
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Calendario</h4>
                                         
                                        <div class="col">
                                                <div id="calendar"></div>
                                        </div> <!-- end col -->
                                    </div>
                                </div>
                                <!-- End Chart

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card tilebox-one">
                                            <div class="card-body">
                                                <i class="dripicons-basket float-right text-muted"></i>
                                                <h6 class="text-muted text-uppercase mt-0">Orders</h6>
                                                <h2 class="m-b-20">1,587</h2>
                                                <span class="badge badge-primary"> +11% </span> <span class="text-muted">From previous period</span>
                                            </div> 
                                        </div> 
                                    </div><

                                    <div class="col-sm-4">
                                        <div class="card tilebox-one">
                                            <div class="card-body">
                                                <i class="dripicons-box float-right text-muted"></i>
                                                <h6 class="text-muted text-uppercase mt-0">Revenue</h6>
                                                <h2 class="m-b-20">$<span>46,782</span></h2>
                                                <span class="badge badge-danger"> -29% </span> <span class="text-muted">From previous period</span>
                                            </div> 
                                        </div> 
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="card tilebox-one">
                                            <div class="card-body">
                                                <i class="dripicons-jewel float-right text-muted"></i>
                                                <h6 class="text-muted text-uppercase mt-0">Product Sold</h6>
                                                <h2 class="m-b-20">1,890</h2>
                                                <span class="badge badge-primary"> +89% </span> <span class="text-muted">Last year</span>
                                            </div>
                                        </div> 
                                    </div><

                                </div>
                                <!-- end row -->


                                <!--<div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Mis Citas</h4>
                                        <div class="table-responsive">
                                            <table class="table table-hover table-centered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Paciente</th>
                                                        <th>Fecha</th>
                                                        <th>Hora</th>
                                                    </tr>
                                                </thead>
                                                
                                               
                                                
                                                
                                                <tbody>
                                                    <tr>
                                                       
                                                        
                                                        <td><span class="badge badge-primary">82 Pcs</span></td>
                                                        <td>$6,518.18</td>
                                                    </tr>
                                                   
                                            
                                                </tbody>
                                            </table>
                                        </div> 
                                        
                                    </div> 
                                </div>  end row-->

                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->
                        
                  
<!-- Fin de tabla de citas -->
              
@endsection