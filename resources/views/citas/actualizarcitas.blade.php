@extends('../index')

@section('card')




 <!-- Start Content-->
                    <div class="container-fluid">
                      <div class="row my-5">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                           <form class="my-2" action="{{route('ActualizarC',$cita->id)}}" method="POST">
                                            @method('PUT')
                                            @csrf
                                             <div class="form-row">
                                                <div class="form-group col-md-6">
                                                  <label for="inputDate">Fecha</label>
                                                  <input type="date" class="form-control" name="citfecha" placeholder="Fecha" value=" {{ \Carbon\Carbon::parse($cita->events->start)->format('d/m/Y')}}"required/>
                                                <small id="emailHelp" class="form-text text-muted">Debe escoger un día</small>
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label for="inputTime">Hora</label>
                                                  <input type="time" name="cithora" value=" {{ \Carbon\Carbon::parse($cita->events->start)->format('H:m')}}" max="20:30" min="08:00" step="60" class="form-control" placeholder="Hora" required/>
                                                <small id="emailHelp" class="form-text text-muted">Debe escoger una Hora</small>
                                                </div>
                                              </div>
                                              
                    						
                    						<div class="form-group">
                    						    <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Paciente</label>
                                                    <div class="col-sm-10">
                                                      <select name="citPaciente"  class="custom-select mr-sm-1" required>
                    							        <option value="{{$result->pacientes->pacnombre}}">{{$cita->citPaciente}}</option>
                    							        @foreach ($result as $mostrar)
                    							        <option value="{{$mostrar->pacnombre}}">{{$mostrar->
                    							        pacnombre}}</option>
                    							        
                    							        @endforeach
                    							        
                    							        </select>
                                                    </div>
                                                </div>    
                                            </div>
                                            <div class="form-group">
                    						    <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Profesional</label>
                                                    <div class="col-sm-10">
                                                      <select name="citMedico"  class="custom-select mr-sm-1" required>
                    							        <option value="{{$cita->citMedico}}">{{$cita->citMedico}}</option>
                    							        @foreach ($result2 as $mostrar)
                    							        <option value="{{$mostrar->medidentificacion}}">{{$mostrar->medidentificacion}}</option>
                    							        
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
                    							        <option value="{{$cita->citEsp}}">{{$cita->citEsp}}</option>
                    							         @foreach ($result3 as $mostrar)
                    							        <option value="{{$mostrar->espNombre}}">{{$mostrar->espNombre}}</option>
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
                                            	<option value="{{$mostrar->citEstado}}">{{$mostrar->citEstado}}</option>
                                            	<option value="No-confirmado">No confirmado</option>
                                            	<option value="Confirmado">Confirmado</option>  
                                            	<option value="Pendiente">Pendiente</option>
                                            	<option value="Atendido">Atendido</option>  
                                            </select>   
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Observaciones sobre la Cita o el Paciente </label required>
                                               <textarea class="form-control" placeholder="Observación" name="citObservaciones">Observación</textarea>
                    						    
                                            </div>
                                            <input type="submit" name="enviar" class="btn btn-danger btn-block" value="Actualizar registro de reserva">
                                            
                                            
                                            
                    					</form>
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                             

                       
                        <!-- end row -->        
                        
                    </div> <!-- container -->
             
                   
                        
@endsection