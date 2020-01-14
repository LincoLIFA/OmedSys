@extends('cuenta.index')
@section('card')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Ficha Medica </h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<div class="container-fluid">
<div class="row">
                            <div class="col-xl-4 col-lg-5">
                                <div class="card text-center">
                                    <div class="card-body">
                                      <img class="profile-user-img img-fluid img-circle"
                                      src="{{Storage::url($result->avatar)}}"
                                      alt="User profile picture"
                                      width="100px" height="100px">
                                        <h4 class="mb-0 mt-2">{{$result->pacnombre}}  {{$result->pacapellidoP}}   </h4>
                                        <p class="text-muted font-14">Paciente</p>

                                        <div class="text-left mt-3">
                                        <h4 class="font-13 text-uppercase">Datos del Paciente : </h4>
                                           
                                            <p class="text-muted mb-2 font-13"><strong>Nombre Completo :</strong> <span class="ml-2">{{$result->pacnombre}}  {{$result->pacapellidoP}} {{$result->pacapellidoM}} </span></p>

                                            <p class="text-muted mb-2 font-13"><strong>RUT :</strong><span class="ml-2">{{$result->pacidentificacion}}</span></p>

                                            <p class="text-muted mb-2 font-13"><strong>Sexo :</strong> <span class="ml-2 ">{{$result->pacsexo}}</span></p>

                                            <p class="text-muted mb-1 font-13"><strong>Fecha de nacimiento :</strong> <span class="ml-2"> {{ \Carbon\Carbon::parse($result->pacfechaN)->format('d/m/Y')}}</span></p>
                                        </div>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->

                                <!-- Messages-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                        </div>
                                        <h4 class="header-title mb-3">Informacion</h4>

                                        <div class="inbox-widget">
                                        
                                        <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                                            <li class="nav-item">
                                                <a href="#uno" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                                    Mediciones
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#dos" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                                    Archivos
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="tab-content">

                                          <div class="tab-pane active" id="uno">
                                                <h5 class="text-uppercase"><i class="mdi mdi-briefcase mr-1"></i> Mediciones</h5>
                                          </div>

                                          <div class="tab-pane" id="dos">
                                                <h5 class="text-uppercase"><i class="mdi mdi-briefcase mr-1"></i>
                                                    Archivos</h5>
                                          </div>
                                        </div>
                                        </div> <!-- end inbox-widget -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->

                            </div> <!-- end col-->

                            <div class="col-xl-8 col-lg-7">
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                                            <li class="nav-item">
                                                <a href="#aboutme" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                                Diagnostico
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#timeline" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                                Historial
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                Cargar Plan de Tratamiento
                                                </a>
                                            </li>
                                        </ul>
                                        
                                            <!--ABOUTME-->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="aboutme">

                                                
                                                      <div class="row">
                                                          <div class="col-md-12">

                                                              <form class="my-2" action="{{route ('Agregar-nuevo-Planes')}}" method="POST">
                                                                  @method('POST') 
                                                                   @csrf
                                                                <div class="form-row col-md-10">
                                                                   <div class="form-group">
                                                                   <label for="inputDate">Fecha </label>
                                                                   <input type="text" readonly class="form-control-plaintext"  name="citfecha" placeholder="Fecha" value="{{Carbon\Carbon::now()->format('d/m/Y')}}"required/>
                                                                   
                                                                   </div>
                                                                  
                                                                 </div>
                                                                 
                                                   
                                                   <div class="form-row">
                                                      <div class="form-group col-md-6">
                                                       <label for="inputPassword">Paciente </label> 
                                                       
                                                       <input type="text" readonly class="form-control-plaintext"  name="citfecha" placeholder="Fecha" value="{{$result->pacnombre}} {{$result->pacapellidoP}}"required/>
                                                                   
                                                      </div>
                                                   </div>
                                                   <div class="form-row">
                                                      <div class="form-group col-md-6">
                                                         <label for="inputPassword">Profesional</label>
                                                             <select name="medico_id"  class="custom-select mr-sm-1" required>
                                                               <option value="0">Seleccione un Profesional</option>
                                                                 @foreach ($result2 as $mostrar)
                                                                 <option value="{{$mostrar->id}}">{{$mostrar->medidentificacion}}</option>
                                                                 @endforeach
                                                             </select> 
                                                        </div>
                                                             <div class="form-group col-md-6">
                                                                <label for="inputPassword">Especialidad</label>
                                                                    <select name="especialidades_id"  class="custom-select mr-sm-1" required>
                                                                      <option value="0">Seleccione una especialidad</option>
                                                                        @foreach ($result3 as $mostrar)
                                                                        <option value="{{$mostrar->id}}">{{$mostrar->espNombre}}</option>
                                                                        @endforeach
                                                                    </select> 
                                                               </div>
                                                        </div>    
                                                        <div class="form-check"> 
                                                        <label for="inputPassword">Procediminetos</label>
                                                        </br>
                                                          @foreach ($result4 as $mostrar)
                                                        <input class="form-check-input" type="checkbox" value="{{$mostrar->id}}" name="arancel" id="ckeck">
                                                            <label class="form-check-label" for="defaultCheck1">
                                                            {{$mostrar->procedimientos}}  
                                                            </label></br>
                                                            @endforeach
                                                          </div>
                                                      
                                                               <div class="form-group mt-2">
                                                                   <label for="exampleInputEmail1">Observaciones </label>
                                                                  <textarea class="form-control" placeholder="Escriba observaciones aquí. . ." value="Observaciones"name="observaciones"></textarea>
                                                               </div>
                                                      
                                                               <div align="center"> 
                                                               <input type="submit" name="enviar" class="btn btn-danger btn-block mt-3" value="Ingresar Diagnostico" style='width:500px; height:35px'>
                                                               </div>
                                                        </form>
                                                          </div>
                                                      </div>
                                            </div> <!-- end tab-pane -->
                                            <!-- end about me section content -->

                                            <!--TIMELINE-->
                                            <div class="tab-pane" id="timeline">
                                              <div class="row">
                                                <div class="col-md-12">
                                                  <!-- The time line -->
                                                  <div class="timeline">
                                                    @foreach ($ficha as $item)
                                                    <!-- timeline time label -->
                                                    <div class="time-label">
                                                    <span class="bg-red">{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}}</span>
                                                    </div>
                                                    <!-- /.timeline-label -->
                                                    <!-- timeline item -->
                                                    <div>
                                                        <img class="profile-user-img img-fluid img-circle"
                                                        src="{{Storage::url($result->avatar)}}"
                                                        alt="User profile picture"
                                                        width="100px" height="100px">
                                                      <div class="timeline-item">
                                                        <span class="time"><i class="fas fa-clock"></i></span>
                                                      <h3 class="timeline-header"><a href="#">{{$result->pacnombre}} {{$result->pacapellidoP}}  {{$result->pacapellidoM}}</a> </h3>
                                                      @foreach ($result4 as $item2)
                                                      <h5 class="timeline-header">{{$item2->procedimientos}}</h5>    
                                                      @endforeach
                                                      
                                                        <div class="timeline-body">
                                                          {{$item->observaciones}}
                                                        </div>
                                                      </div>
                                                    </div>
                                                    @endforeach

                                                  </div>
                                                </div>
                                            </div>
    
                                            </div> 
                                            <!-- end timeline content--> 
    





          <!--SETTINGS-->                                  
        <div class="tab-pane" id="settings">
            
            <div style="text-align: center">                        
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cargarprestacion" data-whatever="@mdo" style='width:300px; height:35px'>Cargar Prestación</button>
              </div>
           
            <div class="card-block p-0 mb-2">
            <div class="row">
              <div class="col-12">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Prestación</th>
                      <th scope="col">Realización</th>
                      <th scope="col">Dcto(%)</th>
                      <th scope="col">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($result4 as $item)
                        
                    
                    <tr>
                            <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" value="{{$item->id}}"id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">{{$item->id}}</label>
                                    </div>
                            </td>
                      <td>{{$item->procedimientos}}</td>
                      <td>Realizado</td>
                      <td>
                          <form>
                              <div>
                                <input id="balloons" type="number" name="balloons" step="1" min="0" max="20" required>
                                <span class="validity"></span>
                              </div>
                              <div>
                                <input type="submit" class="btn btn-primary">
                              </div>
                          </form>
                      </td>
                    <td>${{$item->precios}}</td>
                    </tr>
                    @endforeach
                   
                  </tbody>
                </table>
              </div>
            </div>












        </div>
        </div>
        </div>




      <!--Modal Cargar Prestación-->
    
      <div class="modal fade" id="cargarprestacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cargar Nueva Prestación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="container">
                      <div class="col-lg-12">
                          <form>
                          <label for="validationCustom03">Prestaciones Ingresadas:</label>
                          <select class="form-control" name="category" id="Especialidad" onchange="ChangecatList()" required>
                            <option value="Acción Clínica">Elige una Prestación...</option>
                            <option value="Acción Especial">Acción Especial</option>
                          </select>
                        <div class="invalid-feedback">
                            Por favor proporcione una categoría.
                        </div>
                          </form>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Agregar</button>
              </div>
            </div>
          </div>
        </div>

      <!--Modal Evolucionar Prestación-->

      <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
          <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
            <h4 class="modal-title" id="Heading">Evolucionar Prestación</h4>
          </div>
              <div class="modal-body">
           
           <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> ¿Estás seguro que deseas evolucionar esta prestación?</div>
           
          </div>
            <div class="modal-footer ">
            <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span>Sí</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
          </div>
            </div>
      </div>
        </div>

<!--Style del descuento-->
      <style>
      div {
          margin-bottom: 10px;
        }
        
        input:invalid+span:after {
          content: '✖';
          padding-left: 5px;
        }
        
        input:valid+span:after {
          content: '✓';
          padding-left: 5px;
        }
        </style>
    
    <!--Inicio modal con checkbox-->
    <script>
    $('input[type="checkbox"]').on('change', function(e){
   if(e.target.checked){
     $('#delete').modal();
   }
});
    </script>

    <!--Validación descuento-->
    <script>
        var metersInputGroup = document.querySelector('.metersInputGroup');
        var feetInputGroup = document.querySelector('.feetInputGroup');
        var metersInput = document.querySelector('#meters');
        var feetInput = document.querySelector('#feet');
        var inchesInput = document.querySelector('#inches');
        var switchBtn = document.querySelector('input[type="button"]');
        
        switchBtn.addEventListener('click', function() {
          if(switchBtn.getAttribute('class') === 'meters') {
            switchBtn.setAttribute('class', 'feet');
            switchBtn.value = 'Enter height in meters';
        
            metersInputGroup.style.display = 'none';
            feetInputGroup.style.display = 'block';
        
            feetInput.setAttribute('required', '');
            inchesInput.setAttribute('required', '');
            metersInput.removeAttribute('required');
        
            metersInput.value = '';
          } else {
            switchBtn.setAttribute('class', 'meters');
            switchBtn.value = 'Enter height in feet and inches';
        
            metersInputGroup.style.display = 'block';
            feetInputGroup.style.display = 'none';
        
            feetInput.removeAttribute('required');
            inchesInput.removeAttribute('required');
            metersInput.setAttribute('required', '');
        
            feetInput.value = '';
            inchesInput.value = '';
          }
        });</script>
        <!--CheckBox-->

<script>
    function funcion(){
        if(document.formulario.box.checked == true){
            document.formulario.campo2.disabled = false;
        }
        else{
            document.formulario.campo2.disabled = true;
        }
    }
    </script>
    
    <!--SUMA PRESTACIONES SELECCIONADAS-->
    
    <script>
      function actualizarValor(estaChequeado, valor) {
    
    // Variables.
    var suma_actual = 0;
    var campo_resultado = document.getElementById('txtValor');
    valor = parseInt(valor);
    
    // Obtener la suma que pueda tener el campo 'txtValor'.
    try {
    if (campo_resultado != null) {
    
    if (isNaN(campo_resultado.value)) {
      campo_resultado.value = 0;
    }
    
    suma_actual = parseInt(campo_resultado.value);
    }
    } catch (ex) {
    alert('No existe el campo de la suma.');
    }
    
    // Determinar que: si el check está seleccionado "checked"
    // entonces, agregue el valor a la variable "suma_actual";
    // de lo contrario, le resta el valor del check a "suma_actual".
    if (estaChequeado == true) {
    suma_actual = suma_actual + valor;
    } else {
    suma_actual = suma_actual - valor;
    }
    
    // Colocar el resultado de las operaciones anteriores de vuelta
    // al campo "txtValor".
    campo_resultado.value = suma_actual;
    }
    </script>
    



                                                
                                                 

                                            </div>
                                            <!-- end settings content-->

                                        </div> <!-- end tab-content -->
                                    </div> <!-- end card body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>

@endsection