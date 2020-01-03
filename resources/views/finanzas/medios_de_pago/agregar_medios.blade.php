@extends('finanzas.index')
@section('card')

  <!-- Start Content-->
                   
                        
                        <!-- start page title -->
                       <!-- cabecera de sección  -->
        <div class="page-title-box">
                <div class="page-title-right">
                                        
                </div>

                <h4 class="page-title">Agregar nuevo medio </h4>
        </div>

<!-- fin de caebcera de sección -->
                        <!-- end page title --> 

                <div class="container-fluid">
                    <div class="row my-5">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <form action="{{route('Agregar-nuevo-Medios')}}" method="post">
                                          @csrf
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="inputLastname">Nombre </label>
                                                <input type="text" class="form-control" name="nombre" placeholder="Ingrese nombre de metodo"  minlength="1" maxlength="50"pattern="[A-Za-z.-_,;: ]+" required>
                                            </div>
                                        </div>
                                        <div class="form-row mt-2">
                                            <div class="col-md-6">
                                                <label for="inputRUT">% Retención</label>
                                                <input type="text" class="form-control" id="retencion"   name="retencion" placeholder="Ingrese tasa de retencion"  required>
                                            </div>  
                                        </div>                                  
                                        <div align="center"> 
					  	                     <input type="submit" class="btn btn-danger btn-block mt-3" name="enviar" value="Agregar Medio de Pago" style='width:500px; height:35px'>
                                        </div>
                                    </form>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                    </div>
                </div>
                            
                           

              
@endsection