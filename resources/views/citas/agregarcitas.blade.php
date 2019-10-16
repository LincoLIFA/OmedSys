@extends('index')
@section('card')

  <!-- Start Content-->
                   
                        
                        <!-- start page title -->
                       
                        <!-- end page title --> 

                    <div class="container-fluid">
                      <div class="row my-5">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                           <form class="my-2" action="{{route ('AgregarC')}}" method="POST">
                                               @method('POST') 
                                                @csrf
                                             <div class="form-row">
                                                <div class="form-group col-md-6">
                                                  <label for="inputDate">Fecha</label>
                                                  <input type="date" class="form-control" name="citfecha" placeholder="Fecha" value=""required/>
                                                <small id="emailHelp" class="form-text text-muted">Debe escoger un día</small>
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label for="inputTime">Hora</label>
                                                  <input type="time" name="cithora" value="" max="20:30" min="08:00" step="60" class="form-control" placeholder="Hora" required/>
                                                <small id="emailHelp" class="form-text text-muted">Debe escoger una Hora</small>
                                                </div>
                                              </div>
                                              
                    						
                    						<div class="form-group">
                    						    <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Paciente</label>
                                                    <div class="col-sm-10">
                                                      <select name="pacientes_id"  class="custom-select mr-sm-1" required>
                    							        <option value="Seleccione un paciente">Seleccione un paciente</option>
                    							        @foreach ($result2 as $mostrar)
                    							        <option value="{{$mostrar->id}}">{{$mostrar->pacnombre}} {{$mostrar->pacapellidoP}} </option>
                    							        
                    							        @endforeach
                    							        
                    							        </select>
                                                    </div>
                                                </div>    
                                            </div>
                                            <div class="form-group">
                    						    <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Profesional</label>
                                                    <div class="col-sm-10">
                                                      <select name="especialistas_id"  class="custom-select mr-sm-1" required>
                    							        <option value="Seleccione un profesional">Seleccione un profesional</option>
                    							        @foreach ($result3 as $mostrar)
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
                    							         @foreach ($result4 as $mostrar)
                    							        <option value="{{$mostrar->id}}">{{$mostrar->espNombre}}</option>
                    							        @endforeach
                    							        </select>
                                                    </div>
                                                </div>    
                                            </div>
                                            <div class="form-group">
                    						    <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Metodo Confirmacion</label>
                                                    <div class="col-sm-10">
                                                      <select name="confirmacion"  class="custom-select mr-sm-1" required>
                    							        <option value="Whatsapp">Whatsapp</option>
                    							        <option value="Telefono">Telefono</option>
                    							        <option value="E-mail">E-mail</option>
                    							        </select>
                                                    </div>
                                                </div>    
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Estado de Cita </label required>
                                               <select name="citEstado" class="custom-select mr-sm-1">
                                            	<option value="Nulo">Seleccione Estado de la cita</option>
                                            	<option value="No-confirmado">No confirmado</option>
                                            	<option value="Confirmado">Confirmado</option>  
                                            	<option value="Pendiente">Pendiente</option>
                                            	<option value="Atendido">Atendido</option>  
                                            </select>   
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Observaciones sobre la Cita o el Paciente </label>
                                               <textarea class="form-control" placeholder="Observación" value="Observaciones"name="citObservaciones">Observación</textarea>
                    						    
                                            </div>
                                            <input type="submit" name="enviar" class="btn btn-danger btn-block" value="Ingresar registro de reserva">
                                            
                                            
                                            
                    					</form>
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                             

                        
                        
                    </div> <!-- container -->
                    
                 
              
@endsection