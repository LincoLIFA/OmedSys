@extends('index')
@section('card')

<?php
$mysqli = new mysqli("localhost", "root", "", "laravel");
if ($mysqli->connect_errno) { 
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
  $sql=$mysqli->query("select * from `events` ");

	

?>




<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function()  {
  $('#prueba').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false
    } );
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
                                            

                                            <table id="prueba" class="display table table-bordered datatable" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
            </tr>
            <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>$205,500</td>
            </tr>
            <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>$103,600</td>
            </tr>
            <tr>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008/12/19</td>
                <td>$90,560</td>
            </tr>
            <tr>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013/03/03</td>
                <td>$342,000</td>
            </tr>
            <tr>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008/10/16</td>
                <td>$470,600</td>
            </tr>
            <tr>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>2012/12/18</td>
                <td>$313,500</td>
            </tr>
            <tr>
                <td>Tatyana Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>2010/03/17</td>
                <td>$385,750</td>
            </tr>
            <tr>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>2012/11/27</td>
                <td>$198,500</td>
            </tr>
            <tr>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010/06/09</td>
                <td>$725,000</td>
            </tr>
            <tr>
                <td>Gloria Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>2009/04/10</td>
                <td>$237,500</td>
            </tr>
            <tr>
                <td>Bradley Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td>2012/10/13</td>
                <td>$132,000</td>
            </tr>
            <tr>
                <td>Dai Rios</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td>2012/09/26</td>
                <td>$217,500</td>
            </tr>
            <tr>
                <td>Jenette Caldwell</td>
                <td>Development Lead</td>
                <td>New York</td>
                <td>30</td>
                <td>2011/09/03</td>
                <td>$345,000</td>
            </tr>
            <tr>
                <td>Yuri Berry</td>
                <td>Chief Marketing Officer (CMO)</td>
                <td>New York</td>
                <td>40</td>
                <td>2009/06/25</td>
                <td>$675,000</td>
            </tr>
            <tr>
                <td>Caesar Vance</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td>21</td>
                <td>2011/12/12</td>
                <td>$106,450</td>
            </tr>
            <tr>
                <td>Doris Wilder</td>
                <td>Sales Assistant</td>
                <td>Sydney</td>
                <td>23</td>
                <td>2010/09/20</td>
                <td>$85,600</td>
            </tr>
            <tr>
                <td>Angelica Ramos</td>
                <td>Chief Executive Officer (CEO)</td>
                <td>London</td>
                <td>47</td>
                <td>2009/10/09</td>
                <td>$1,200,000</td>
            </tr>
            <tr>
                <td>Gavin Joyce</td>
                <td>Developer</td>
                <td>Edinburgh</td>
                <td>42</td>
                <td>2010/12/22</td>
                <td>$92,575</td>
            </tr>
            <tr>
                <td>Jennifer Chang</td>
                <td>Regional Director</td>
                <td>Singapore</td>
                <td>28</td>
                <td>2010/11/14</td>
                <td>$357,650</td>
            </tr>
            <tr>
                <td>Brenden Wagner</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>28</td>
                <td>2011/06/07</td>
                <td>$206,850</td>
            </tr>
            <tr>
                <td>Fiona Green</td>
                <td>Chief Operating Officer (COO)</td>
                <td>San Francisco</td>
                <td>48</td>
                <td>2010/03/11</td>
                <td>$850,000</td>
            </tr>
            <tr>
                <td>Shou Itou</td>
                <td>Regional Marketing</td>
                <td>Tokyo</td>
                <td>20</td>
                <td>2011/08/14</td>
                <td>$163,000</td>
            </tr>
            <tr>
                <td>Michelle House</td>
                <td>Integration Specialist</td>
                <td>Sydney</td>
                <td>37</td>
                <td>2011/06/02</td>
                <td>$95,400</td>
            </tr>
            <tr>
                <td>Suki Burks</td>
                <td>Developer</td>
                <td>London</td>
                <td>53</td>
                <td>2009/10/22</td>
                <td>$114,500</td>
            </tr>
            <tr>
                <td>Prescott Bartlett</td>
                <td>Technical Author</td>
                <td>London</td>
                <td>27</td>
                <td>2011/05/07</td>
                <td>$145,000</td>
            </tr>
            <tr>
                <td>Gavin Cortez</td>
                <td>Team Leader</td>
                <td>San Francisco</td>
                <td>22</td>
                <td>2008/10/26</td>
                <td>$235,500</td>
            </tr>
            <tr>
                <td>Martena Mccray</td>
                <td>Post-Sales support</td>
                <td>Edinburgh</td>
                <td>46</td>
                <td>2011/03/09</td>
                <td>$324,050</td>
            </tr>
            <tr>
                <td>Unity Butler</td>
                <td>Marketing Designer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/12/09</td>
                <td>$85,675</td>
            </tr>
            <tr>
                <td>Howard Hatfield</td>
                <td>Office Manager</td>
                <td>San Francisco</td>
                <td>51</td>
                <td>2008/12/16</td>
                <td>$164,500</td>
            </tr>
            <tr>
                <td>Hope Fuentes</td>
                <td>Secretary</td>
                <td>San Francisco</td>
                <td>41</td>
                <td>2010/02/12</td>
                <td>$109,850</td>
            </tr>
            <tr>
                <td>Vivian Harrell</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td>62</td>
                <td>2009/02/14</td>
                <td>$452,500</td>
            </tr>
            <tr>
                <td>Timothy Mooney</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>37</td>
                <td>2008/12/11</td>
                <td>$136,200</td>
            </tr>
            <tr>
                <td>Jackson Bradshaw</td>
                <td>Director</td>
                <td>New York</td>
                <td>65</td>
                <td>2008/09/26</td>
                <td>$645,750</td>
            </tr>
            <tr>
                <td>Olivia Liang</td>
                <td>Support Engineer</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2011/02/03</td>
                <td>$234,500</td>
            </tr>
            <tr>
                <td>Bruno Nash</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>38</td>
                <td>2011/05/03</td>
                <td>$163,500</td>
            </tr>
            <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2009/08/19</td>
                <td>$139,575</td>
            </tr>
            <tr>
                <td>Thor Walton</td>
                <td>Developer</td>
                <td>New York</td>
                <td>61</td>
                <td>2013/08/11</td>
                <td>$98,540</td>
            </tr>
            <tr>
                <td>Finn Camacho</td>
                <td>Support Engineer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/07/07</td>
                <td>$87,500</td>
            </tr>
            <tr>
                <td>Serge Baldwin</td>
                <td>Data Coordinator</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2012/04/09</td>
                <td>$138,575</td>
            </tr>
            <tr>
                <td>Zenaida Frank</td>
                <td>Software Engineer</td>
                <td>New York</td>
                <td>63</td>
                <td>2010/01/04</td>
                <td>$125,250</td>
            </tr>
            <tr>
                <td>Zorita Serrano</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>56</td>
                <td>2012/06/01</td>
                <td>$115,000</td>
            </tr>
            <tr>
                <td>Jennifer Acosta</td>
                <td>Junior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>43</td>
                <td>2013/02/01</td>
                <td>$75,650</td>
            </tr>
            <tr>
                <td>Cara Stevens</td>
                <td>Sales Assistant</td>
                <td>New York</td>
                <td>46</td>
                <td>2011/12/06</td>
                <td>$145,600</td>
            </tr>
            <tr>
                <td>Hermione Butler</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>47</td>
                <td>2011/03/21</td>
                <td>$356,250</td>
            </tr>
            <tr>
                <td>Lael Greer</td>
                <td>Systems Administrator</td>
                <td>London</td>
                <td>21</td>
                <td>2009/02/27</td>
                <td>$103,500</td>
            </tr>
            <tr>
                <td>Jonas Alexander</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>30</td>
                <td>2010/07/14</td>
                <td>$86,500</td>
            </tr>
            <tr>
                <td>Shad Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
                <td>51</td>
                <td>2008/11/13</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>29</td>
                <td>2011/06/27</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011/01/25</td>
                <td>$112,000</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
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