@extends('index')
@section('card')

  <!-- Start Content-->
                   
                    
                       <!-- cabecera de sección  -->
        <div class="page-title-box">
                <div class="page-title-right">
                                        
                </div>

                <h4 class="page-title">Agregar Nuevo convenio a la plataforma </h4>
        </div>

<!-- fin de caebcera de sección -->

                    <div class="container-fluid">
                      <div class="row my-5">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                           <form class="my-2" action="{{route ('Agregar-nuevo-convenio')}}" method="POST">
                                               @method('POST') 
                                                @csrf
                                             <div class="form-row">
                                                <div class="form-group col-md-6">
                                                  <label for="inputDate">Fecha</label>
                                                  <input type="date" class="form-control" name="fecha" placeholder="Fecha" value=""required/>
                                                <small id="emailHelp" class="form-text text-muted">Debe escoger un día</small>
                                                </div>
                                               
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
                    
                     <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                
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
                           

              
@endsection