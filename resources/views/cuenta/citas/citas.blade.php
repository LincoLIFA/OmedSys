@extends('cuenta.index')
@section('card')

<?php
$mysqli = new mysqli("localhost", "root", "", "laravel");
if ($mysqli->connect_errno) { 
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
  $sql=$mysqli->query("select * from `events` ");
?>
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
        }
      }
    });
   
    
    
});

</script>
<!-- Fin Script de fullcalendar -->
<!-- Tamaño y estilos de fullcalendar -->
<style>
  #calendar {
    max-width: 750px;
    max-height: 750px;
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
       <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Reservas de citas medicas</h1>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="sticky-top mb-3">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Draggable Events</h4>
                </div>
                <div class="card-body">
                  <!-- the events -->
                  <div id="external-events">
                    <div class="external-event bg-success">Lunch</div>
                    <div class="external-event bg-warning">Go home</div>
                    <div class="external-event bg-info">Do homework</div>
                    <div class="external-event bg-primary">Work on UI design</div>
                    <div class="external-event bg-danger">Sleep tight</div>
                    <div class="checkbox">
                      <label for="drop-remove">
                        <input type="checkbox" id="drop-remove">
                        remove after drop
                      </label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Create Event</h3>
                </div>
                <div class="card-body">
                  <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                    <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                    <ul class="fc-color-picker" id="color-chooser">
                      <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                      <li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
                    </ul>
                  </div>
                  <!-- /btn-group -->
                  <div class="input-group">
                    <input id="new-event" type="text" class="form-control" placeholder="Event Title">

                    <div class="input-group-append">
                      <button id="add-new-event" type="button" class="btn btn-primary">Add</button>
                    </div>
                    <!-- /btn-group -->
                  </div>
                  <!-- /input-group -->
                </div>
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Registro de citas</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            
                            <table id="example2" class="table Tablas table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="all">N°</th>
                                        <th>Fecha</th>
                                        <th>Paciente</th>
                                        <th>Estado</th>
                                        <th>Met. Confirm.</th>
                                        <th>Validar</th>
                                    </tr>
                                </thead>
                            <tbody>
                                @foreach($result as $item2)
                                <tr>
                                    <td>
                                        <a href="">{{$item2->id}}</a>
                                    </td>
                                    <td>
                                        {{$item2->events->start}}
                                    </td>
                                                                    
                                    <td>
                                        <a href"" class="text-success">{{$item2->pacientes->pacnombre}}  {{$item2->pacientes->pacapellidoP}} </a>
                                    
                                      </td>
                                      <td>
                                     {{$item2->estado}}
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
                                @endforeach()
                            </tbody>
                            </table>
                        </div>
                         <!-- /.card-body -->
                    </div>
                     <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
@endsection