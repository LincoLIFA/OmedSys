@extends('finanzas.index')

@section('card')




 <!-- Start Content-->
                    <div class="container-fluid">
                      <div class="row my-5">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                    <form action="{{route('Actualizar-convenios', $convenios->id )}}" method="post">
                                          @csrf
                                          @method('PUT')
					                              <div class="form-row">
                                            <div class="col-3">
                                                <label for="inputName">Fecha</label>
                                                <input type="date" class="form-control" value="{{$convenios->fecha}}" name="fecha" required >
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="inputLastname">Empresa </label>
                                                <input type="text" class="form-control" name="empresa" value="{{$convenios->empresa}}"  minlength="1" maxlength="50"pattern="[A-Za-z.-_,;: ]+" required>
                                            </div>
                                        </div>

                                        <div class="form-row mt-2">
                                            <div class="col-md-6">
                                                <label for="inputRUT">% convenio</label>
                                                <input type="text" class="form-control" id="rut"   name="convenio" value="{{$convenios->descuento}}"  required>
                                            </div>  
					                        <div class="col-md-6">
                                                <label for="inputDATE">Contacto</label>
                                                <input type="text" class="form-control"  name="contacto" value="{{$convenios->contacto}}" pattern="[A-Za-z0-9.-_,;: ]+" required>
                                             </div> 
                                        </div> 
                                        <div class="form-row mt-2">
                                         
					                        <div class="col-md-6">
                                                <label for="inputEmail">Observaciones</label>
                                                <input  class="form-control" type="textarea"  name="observacion" value="{{$convenios->observacion}}" pattern="[A-Za-z0-9.-_,;:@ ]+" required>
                                            </div>
                                        </div>                                 
                                        <div align="center"> 
					  	                <input type="submit" class="btn btn-danger btn-block mt-3" name="enviar" value="Agregar registro de paciente" style='width:500px; height:35px'>
                                        </div>
                                    </form>

                                        
                                    </div> <!-- end card-body
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                             

                       
                        <!-- end row -->        
                        
                    </div> <!-- container -->
             
                   
                        
@endsection