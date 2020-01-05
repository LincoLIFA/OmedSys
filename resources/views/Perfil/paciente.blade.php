@extends('index')
@section('card')


<?php
$mysqli = new mysqli("localhost", "root", "", "laravel");

if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
       
  $sql=$mysqli->query("select * from `events`  ");
  	
?>




<script type="text/javascript">
    $(document).ready( function () {
    $('#registro-citas').DataTable();
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


            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                            <div class="col-sm-12">
                                <!-- Profile -->
                                <div class="card bg-primary">
                                    <div class="card-body profile-user-box">

                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="media">
                                                    <span class="float-left m-2 mr-4">
                                                        <img class="profile-user-img img-fluid img-circle"
                                                        src="{{Storage::url($pacientes->avatar)}}"
                                                        alt="User profile picture"
                                                        width="100px" height="100px">
                                                    </span>
                                                    <div class="media-body">

                                                        <h4 class="mt-1 mb-1 text-white">{{$pacientes->pacnombre}} {{$pacientes->pacapellidoP}} {{$pacientes->pacapellidoM}}</h4>
                                                        <p class="font-13 text-white-50">Nombre completo del paciente</p>

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
                                 <!-- Button trigger modal -->
                                
                            <button type="button" class="mb-2 btn btn-primary" data-toggle="modal" data-target="#crear-ficha">
                            Crear nueva ficha clìnica
                            </button>


                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Historial de Fichas</h4>
                                    @foreach ($ficha as $item)
                                    <div class="inbox-widget">
                                        <div class="inbox-item">
                                            <div class="inbox-item-img"><img class="profile-user-img img-fluid img-circle"
                                                        src="{{Storage::url($pacientes->avatar)}}"
                                                        alt="User profile picture"
                                                        width="100px" height="100px"></div>
                                                        <h3 class="timeline-header"><a href="#">{{$pacientes->pacnombre}} {{$pacientes->pacapellidoP}}  {{$pacientes->pacapellidoM}}</a> </h3>
                                            <p class="inbox-item-author"><span class="bg-red">{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y')}}</span></p>
                                            <p class="inbox-item-text">  {{$item->observaciones}}</p>
                                            <p class="inbox-item-date">
                                                <a href="#" class="btn btn-sm btn-link text-info font-13"> Reply </a>
                                            </p>
                                        </div>
                                    </div> <!-- end inbox-widget -->
                                    @endforeach
                                </div> <!-- end card-body-->
                            </div>
                            </div> <!-- end col-->



                            <!-- Modal -->
                            <div class="modal fade" id="crear-ficha" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">{{$pacientes->pacnombre}} {{$pacientes->pacapellidoP}} </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    
                                <form class="my-2" action="{{route ('AgregarC')}}" method="POST">
                                               @method('POST') 
                                                @csrf
                                             
                                              
                    						
                                            <div class="form-group">
                    						    <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Profesional</label>
                                                    <div class="col-sm-10">
                                                      <select id="ESP" name="especialistas_id"  class="custom-select mr-sm-1" required>
                    							        <option value="Seleccione un profesional">Seleccione un profesional</option>
                    							        @foreach ($result2 as $mostrar)
                    							        <option value="{{$mostrar->id}}">{{$mostrar->medidentificacion}}</option>
                    							        
                    							        @endforeach
                    							        </select>
                                                    </div>
                                                </div>    
                                            </div>
                                            <div class="form-group">
                    						    <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Especialidad</label>
                                                    <div class="col-sm-10">
                                                      <select name="citEsp"  class="custom-select mr-sm-1" required>
                    							        <option value="Seleccione una especialidad">Seleccione una especialidad</option>
                    							         @foreach ($result3 as $mostrar)
                    							        <option value="{{$mostrar->id}}">{{$mostrar->espNombre}}</option>
                    							        @endforeach
                    							        </select>
                                                    </div>
                                                </div>    
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Observaciones sobre la ficha mèdica </label>
                                               <textarea class="form-control" placeholder="Observación" value="Observaciones"name="citObservaciones">Observación</textarea>
                                            </div>
                                            <input type="submit" name="enviar" class="btn btn-danger btn-block" value="Ingresar registro de reserva">
                    					</form>
                        


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Validar Ficha</button>
                                </div>
                                </div>
                            </div>
                            </div>



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
                                <!-- End Chart -->

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
                                    </div>

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
                                    </div>
                                </div>
                                <!-- end row -->


                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Mis Citas</h4>
                                        <div class="table-responsive">
                                        <table class="table Tablas table-centered w-100 dt-responsive nowrap display" id="registro-citas">
                                                <thead class="thead-light">
                                                    <tr>
                                                        
                                                        <th class="all">N° </th>
                                                        <th>Fecha</th>
                                                        <th>Hora</th>
                                                        <th>Especialista</th>
                                                        <th>Especialidad</th>
                                                        <th>Observaciones</th>
                                                        <th>Acción</th>
                                                        
                                                    </tr>
                                                </thead>

                                         
                                                <tbody>
                                                @foreach($result as $item)
                                                    <tr>
                                                        <td>
                                                            <a href="">{{$item->id}}</a>
                                                        </td>
                                                        
                                                        <td>
                                                            {{ \Carbon\Carbon::parse($item->events->start)->format('d-m-Y')}} 
                                                        </td>
                                                        <td>
                                                            {{ \Carbon\Carbon::parse($item->events->start)->format('h:i:s A')}} 
                                                        </td>
                                                        <td>
                                                           {{$item->especialistas->medidentificacion}}
                                                        </td>
                                                        <td>
                                                           {{$item->especialidades->espNombre}}
                                                        </td>
                                                        <td>
                                                           {{$item->observaciones}}
                                                        </td>
                                                       
                                                        <td>
                                                            <div class="row">
                                                            <a href="{{route('Update-convenios', $item->id)}}" class="btn btn-primary mr-1"> <i class="far fa-edit"></i></a>
                                                            <form method="post" action="{{route('Delete-convenios', $item->id)}}">
                                                                    @method('DELETE') 
                                                                    @csrf
                                                              <button  class="btn btn-primary" type="submit"><i class="far fa-trash-alt"></i></button>
                                                            </form>
                                                            </div>
                                                        </td>
                                                       
                                                    </tr>
                                                    @endforeach()
                                                </tbody>
                                            </table>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->  
                </div>
            </section>              
<!-- Fin de tabla de citas -->
              
@endsection