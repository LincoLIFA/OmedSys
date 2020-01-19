@extends('cuenta.index')
@section('card')

  <!-- Start Content-->
                   
        <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Gestion de Planes de Tratamiento</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-body">
                                      <form action="{{route('Actualizar-Planes' , $planes->id)}}" method="post">
                                          @csrf
                                          @method('PUT')
                                          <div class="form-row col-md-10">
                                             
                                            <div class="col-md-3" >
                                              <label for="inputDate">Fecha </label>
                                            </div>
                                            <div class="col-md-7">
                                              <label for="now">{{Carbon\Carbon::now()->format('d-m-Y')}}</label>
                                            </div>
                                           </div>
                                            <div class="form-row col-md-12 my-3">
                                              <div class="col-md-3">
                                                <label for="inputDate">Nombre del Plan </label>
                                              </div>
                                              <div class="col-md-9">
                                                <input type="text"  class="form-control" value="{{$planes->nombre}}" name="nombre" required/>
                                              </div>                                   
                                            </div>
                                           
                             
                           
                             <div class="form-row">
                                <div class="form-group col-md-6">
                                   <label for="inputPassword">Profesional</label>
                                       <select name="medico_id"  class="Select2 custom-select mr-sm-1" required>
                                         <option value="{{$planes->especialistas->id}}">{{$planes->especialistas->medidentificacion}}</option>
                                           @foreach ($result as $mostrar)
                                           <option value="{{$mostrar->id}}">{{$mostrar->medidentificacion}}</option>
                                           @endforeach
                                       </select> 
                                  </div>
                                       <div class="form-group col-md-6">
                                          <label for="inputPassword">Especialidad</label>
                                              <select name="especialidades_id"  class="Select2 custom-select mr-sm-1" required>
                                                <option value="{{$planes->especialidades->id}}">{{$planes->especialidades->espNombre}}</option>
                                                  @foreach ($result2 as $mostrar)
                                                  <option value="{{$mostrar->id}}">{{$mostrar->espNombre}}</option>
                                                  @endforeach
                                              </select> 
                                         </div>
                                  </div>    
                                  

                                <div class="form-check"> 
                                  <label for="inputPassword">Nuevos Procediminetos</label>
                                  </br>
                                    @foreach($result3 as $mostrar)
                                   
                                      <div class="form-group">
                                          <div class="custom-control custom-switch">
                                              <input type="checkbox" class="custom-control-input" value="{{$mostrar->id}}"  name="nuevosAranceles[]"  id="customSwitch{{$mostrar->id}}">
                                              <label class="custom-control-label" for="customSwitch{{$mostrar->id}}">{{$mostrar->procedimientos}}</label>
                                          </div>
                                      </div>
                                      
                                    @endforeach()
                                    
                                    </div>

                                
                                         <div align="center"> 
                                         <input type="submit" name="enviar" class="btn btn-danger btn-block mt-3" value="Ingresar Diagnostico" style='width:500px; height:35px'>
                                         </div>
                                  </form>

                                  <div class="form-check"> 
                                  <label for="inputPassword">Procediminetos</label>
                                  </br>
                                    @foreach($result4 as $mostrar)
                                      @if($planes->id == $mostrar->planes_id)
                                      
                                      </div>

                                     
                                      <form method="post" id="Delete-form" action="{{route('Delete-Planes-Aranceles', $planes->id)}}">
                                               @method('DELETE') 
                                               @csrf
                                        <div class="form-group">
                                          <div class="custom-control custom-switch ">
                                              <input type="checkbox" class="custom-control-input " value="{{$mostrar->id}}" name="aranceles[]"  id="customSwitch{{$mostrar->id}}">
                                              <label class="custom-control-label" for="customSwitch{{$mostrar->id}}">{{$mostrar->aranceles->procedimientos}}</label>
                                          </div>
                                          <div class="col">
                                           
                                            
                                          </div>
                                        </form>

                                        <a class="btn btn-primary" href="{{route('Delete-Planes-Aranceles', $planes->id)}}"
                                                onclick="event.preventDefault();
                                                 document.getElementById('Delete-form').submit();">
                                                <i class="far fa-trash-alt"></i>
                                            </a>










                                      @endif()
                                    @endforeach()
                                    </div>
                                  
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->

                                
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->
                        
                    </div> <!-- container -->
          
                    
                                
                           

              
@endsection