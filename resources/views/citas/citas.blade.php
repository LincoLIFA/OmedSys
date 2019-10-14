@extends('index')
@section('card')

<?php
$mysqli = new mysqli("localhost", "root", "", "laravel");
if ($mysqli->connect_errno) { 
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
  $sql=$mysqli->query("select * from `events, citas` where  events.id = citas.events_id ");

	

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
                        
                    


                   
                    
                    
                    

                                        <!-- Modal -->
                                        <div class="modal fade" id="event-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                          <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" ><input type="text" readonly class="form-control-plaintext"  id="title2" ></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                  
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                 <form name="elementos"  action="{{route('Reservar')}}" method="POST">
                                                     
                                                     @csrf
                                                     <input type="hidden" readonly class="form-control-plaintext" name="id" id="id" >
                                                     <input type="hidden" readonly class="form-control-plaintext" name="title" id="title" >
                                                     <input type="hidden"  name="classNames" id="classNames" >
                                                     <input type="hidden"  class="form-control" maxlength="19" name="start"id="start" >
                                                     <input type="hidden"  class="form-control" maxlength="19" name="end" id="end" >
                                                     
                                                    <div class="form-row">
                                                        <div class="col-6">
                                                            <label for="staticFecha" class="col-sm-2 col-form-label">Fecha</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" readonly class="form-control-plaintext" name="date" id="date" > 
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="staticPRO" class="col-sm-2 col-form-label">Hora</label>
                                                            <div class="col-sm-10">
                                                                <input type="time" readonly class="form-control-plaintext" name="hora" id="hora"> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Descripción</label>
                                                        <textarea type="textarea" class="form-control" id="description"  name="description" >Descripción</textarea>
                                                        
                                                    </div>
                                                
                                              </div>
                                              <div class="modal-footer">
                                                    <div class="text-right pb-4 pr-4">
                                                        
                                                         <button type="submit" class=" btn btn-danger delete-event"  name="Reservar" >Suspender</button>
                                                          </form>
                                               
                                               
                                           
                                            <button type="button" class="btn btn-light " data-dismiss="modal">Close</button>
                                            </div>
                                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                
                               
                                
                                
                               

      
                        
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                
                                                 <div id='external-events' class="m-t-20">
    
                                                      
                                                            <div class="external-event fc-event Suspender bg-danger" data-class="bg-warning">
                                                                <i class="mdi mdi-checkbox-blank-circle mr-2 vertical-middle"></i>Suspender bloque
                                                            </div>
                                                            
    
                                                <!--<div class="mt-5 d-none d-xl-block">
                                                    <h5 class="text-center">How It Works ?</h5>
    
                                                    <ul class="pl-3">
                                                        <li class="text-muted mb-3">
                                                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                        </li>
                                                        <li class="text-muted mb-3">
                                                            Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.
                                                        </li>
                                                        <li class="text-muted mb-3">
                                                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                        </li>
                                                    </ul>
                                                </div> -->
                                            </div> <!-- end col-->
                                        </div>  <!-- end row -->
                                            <div class="col">
                                                    <div id="calendar"></div>
                                            </div> <!-- end col -->
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div>
                        </div> <!-- end row -->
                        
                    </div> <!-- container -->
<!-- Fin fullcalendar -->
<!-- Tabla de citas  -->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-4">
                                                <a href="{{url('Citas/aggcitas')}}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle mr-2"></i> Crear nueva cita</a>
                                            </div>
                                           
                                        </div>
                
                                        <div class="table-responsive">
                                            <table class="table table-centered w-100 dt-responsive nowrap display" id="citas">
                                                <thead class="thead-light">
                                                    <tr>
                                                        
                                                        <th class="all">N° Cita</th>
                                                        <th>Fecha</th>
                                                        <th>Hora</th>
                                                        <th>Paciente</th>
                                                        <th>Especialista</th>
                                                        <th>Especialidad</th>
                                                        <th>Estado</th>
                                                        <th>Met. Confirm.</th>
                                                        <th>Acción</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($result as $item2)
                                                    <tr>
                                                        <td>
                                                            <a href="">{{$item2->id}}</a>
                                                        </td>
                                                        <td>
                                                           {{$item2->citfecha}}
                                                        </td>
                                                        <td>
                                                          {{$item2->cithora}}
                                                        </td>
                                                        <td>
                                                            <a href="{{route('PerfilPC', $item2->citPaciente)}}" class="text-success">{{$item2->citPaciente}} </a>
                                                           
                                                        </td>
                                                        <td>
                                                            {{$item2->citMedico}}
                                                        </td>
                    
                                                        <td>
                                                           {{$item2->citEsp}}
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-success">{{$item2->citEstado}}</span>
                                                        </td>
                                                        <td>
                                                           {{$item2->confirmacion}}
                                                        </td>
                    
                                                        <td>
                                                             <div class="row">
                                                            <a href="{{route('UpdateC', $item2->id)}}" class="btn btn-primary mr-1"> <i class="far fa-edit"></i></a>
                                                            <form method="post" action="{{route('DeleteC', $item2->id)}}">
                                                                    @method('DELETE') 
                                                                    @csrf
                                                              <button  class="btn btn-primary" type="submit"><i class="far fa-trash-alt"></i></button>
                                                            </form>
                                                            </div>
                                                            
                                                        </td>
                                                       
                                                    </tr>
                                                    @endforeach();
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->        
                        
                    </div> <!-- container -->
<!-- Fin de tabla de citas -->
              
@endsection