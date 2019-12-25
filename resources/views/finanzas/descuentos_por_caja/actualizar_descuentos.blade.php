@extends('finanzas.index')
@section('card')

  <!-- Start Content-->
                   
                        
                        <!-- start page title -->
                       <!-- cabecera de sección  -->
        <div class="page-title-box">
                <div class="page-title-right">
                                        
                </div>

                <h4 class="page-title">Actualizar Descuento por caja</h4>
        </div>

<!-- fin de caebcera de sección -->
                        <!-- end page title --> 

                <div class="container-fluid">
                    <div class="row my-5">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <form action="{{route('Actualizar-Descuentos', $descuentos->id)}}" method="post">
                                          
                                          @csrf
                                          @method('PUT')
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="inputLastname">Nombre </label>
                                            <input type="text" class="form-control" name="nombre" value="{{$descuentos->nombre}}" minlength="1" maxlength="50"pattern="[A-Za-z.-_,;: ]+" required>
                                            </div>
                                        </div>
                                        <div class="form-row mt-2">
                                            <div class="col-md-6">
                                                <label for="inputRUT">% Retencion</label>
                                                <input type="text" class="form-control" id="retencion"   name="descuento" value="{{$descuentos->descuento}}" required>
                                            </div>  
                                        </div>                                  
                                        <div align="center"> 
					  	                     <input type="submit" class="btn btn-danger btn-block mt-3" name="enviar" value="Actuaizar medio de pago" style='width:500px; height:35px'>
                                        </div>
                                    </form>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                    </div>
                </div>
                            
                           

              
@endsection