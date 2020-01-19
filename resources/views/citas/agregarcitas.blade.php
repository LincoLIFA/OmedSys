@extends('index')
@section('card')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Registro de citas </h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Advanced Form</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

                    <div class="container-fluid">   

                      <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                           <form class="my-2" action="{{route ('AgregarC')}}" method="POST">
                                               @method('POST') 
                                                @csrf
                                             <div class="form-row">
                                                <div class="form-group col-md-6">
                                                  <label for="inputDate">Fecha</label>
                                                  <input type="date" class=" form-control" name="citfecha" value="" required/>
                                                <small id="emailHelp" class="form-text text-muted">Debe escoger un día</small>
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label for="inputTime">Hora</label>
                                                  <input type="time" name="cithora" value="" max="20:30" min="08:00" step="60" class="form-control" placeholder="Hora" required/>
                                                <small id="emailHelp" class="form-text text-muted">Debe escoger una Hora</small>
                                                </div>
                                              </div>
                                              
                    						
                    						<div class="form-row">
                    						    <div class="form-group col-md-6">
                                                    <label for="inputPassword">Paciente</label> 
                                                      <select name="pacientes_id"  class="Select2 custom-select mr-sm-1" required>
                    							        <option value="Seleccione un paciente">Seleccione un paciente</option>
                    							        @foreach ($result2 as $mostrar)
                    							        <option value="{{$mostrar->id}}">{{$mostrar->pacnombre}} {{$mostrar->pacapellidoP}} </option>
                    							        
                    							        @endforeach
                    							                     </select>
                                </div>

                    						    <div class="form-group col-md-6">
                                                    <label for="inputPassword">Profesional</label>
                                                      <select name="especialistas_id"  class="Select2 custom-select mr-sm-1" required>
                    							        <option value="Seleccione un profesional">Seleccione un profesional</option>
                    							        @foreach ($result3 as $mostrar)
                    							        <option value="{{$mostrar->id}}">{{$mostrar->medidentificacion}}</option>
                    							        
                    							        @endforeach
                    							        </select>
                                                    </div>  
                                            </div>

                                    <div class="form-row">
                    						          <div class="form-group col-md-6">
                                                    <label for="inputPassword">Especialidad</label>
                                                      <select name="citEsp"  class="Select2 custom-select mr-sm-1" required>
                    							        <option value="Seleccione una especialidad">Seleccione una especialidad</option>
                    							         @foreach ($result4 as $mostrar)
                    							        <option value="{{$mostrar->id}}">{{$mostrar->espNombre}}</option>
                    							        @endforeach
                    							        </select> 
                                            </div>
                    						    <div class="form-group col-md-6">
                                                    <label for="inputPassword">Metodo Confirmación</label>
                                                      <select name="confirmacion"  class="Select2 custom-select mr-sm-1" required>
                    							        <option value="Whatsapp">Whatsapp</option>
                    							        <option value="Telefono">Telefono</option>
                    							        <option value="E-mail">E-mail</option>
                    							        </select>
                                                    </div>
                                                </div>    

                                            <div class="form-row">
                                              <div class="from-group col-md-6">
                                                <label for="exampleInputEmail1">Estado de Cita </label required>
                                               <select name="citEstado" class="Select2 custom-select mr-sm-1">
                                            	<option value="Nulo">Seleccione Estado de la cita</option>
                                            	<option value="No-confirmado">No confirmado</option>
                                            	<option value="Confirmado">Confirmado</option>  
                                            	<option value="Pendiente">Pendiente</option>
                                            	<option value="Atendido">Atendido</option>  
                                            </select>   
                                            </div>
                                          </div>


                                            <div class="form-group mt-2">
                                                <label for="exampleInputEmail1">Observaciones sobre la Cita o el Paciente </label>
                                               <textarea class="form-control" placeholder="Escriba observaciones aquí. . ." value="Observaciones"name="citObservaciones"></textarea>
                    						    
                                            </div>

                                            <div align="center"> 
                                            <input type="submit" name="enviar" class="btn btn-danger btn-block mt-3" value="Ingresar registro de reserva" style='width:500px; height:35px'>
                                            </div>
                                            
                                            
                    					</form>
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                             

                        
                        
                    </div> <!-- container -->
                    
                 
              
@endsection