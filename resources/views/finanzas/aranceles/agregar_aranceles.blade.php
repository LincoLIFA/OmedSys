@extends('finanzas.index')
@section('card')

  <!-- Start Content-->
                   
                        
                        <!-- start page title -->
                       <!-- cabecera de sección  -->
        <div class="page-title-box">
                <div class="page-title-right">
                                        
                </div>

                <h4 class="page-title">Agregar nuevo Arancel </h4>
        </div>

<!-- fin de caebcera de sección -->
                        <!-- end page title --> 

                <div class="container-fluid">
                    <div class="row my-5">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <form action="{{route('Agregar-nuevo-Aranceles')}}" method="post">
                                          @csrf
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="inputLastname">Procedimiento </label>
                                                <input type="text" class="form-control" name="procedimientos" placeholder="Ingrese nombre del procedimiento"  minlength="1" maxlength="50"pattern="[A-Za-z.-_,;: ]+" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <label for="inputLastname">precio </label>
                                                <input type="text" class="form-control" name="precios" placeholder="Ingrese valor del procedimiento"  minlength="1" maxlength="50"pattern="[A-Za-z.-_,;: ]+" required>
                                            </div>
                                        </div>
                                        <div class="form-row ">
                                            <div class="col">
                                                <label for="inputRUT">Comentario</label>
                                                <input type="textarea" class="form-control" id="comentarios"   name="comentarios" placeholder="Ingrese su comentario"  required>
                                            </div>  
                                        </div> 
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword">Profesional</label>
                                                <select name="medico_id"  class="custom-select mr-sm-1" required>
                                                    <option value="0">Seleccione un profesional</option>
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
                                        <div align="center"> 
					  	                     <input type="submit" class="btn btn-danger btn-block mt-3" name="enviar" value="Agregar Arancel" style='width:500px; height:35px'>
                                        </div>
                                    </form>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                    </div>
                </div>
                            
                           

              
@endsection