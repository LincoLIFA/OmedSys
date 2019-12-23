@extends('finanzas.index')
@section('card')

  <!-- Start Content-->
                   
                        
                        <!-- start page title -->
                       <!-- cabecera de sección  -->
        <div class="page-title-box">
                <div class="page-title-right">
                                        
                </div>

                <h4 class="page-title">Agregar nuevos Convenios </h4>
        </div>

<!-- fin de caebcera de sección -->
                        <!-- end page title --> 

                    <div class="container-fluid">
                      <div class="row my-5">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <form action="{{route('Agregar-nuevo-convenio')}}" method="post">
                                          @csrf
					                    <div class="form-row">
                                            <div class="col-3">
                                                <label for="inputName">Fecha</label>
                                                <input type="date" class="form-control" name="fecha" required >
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="inputLastname">Empresa </label>
                                                <input type="text" class="form-control" name="empresa" placeholder="Ingrese nombre de empresa"  minlength="1" maxlength="50"pattern="[A-Za-z.-_,;: ]+" required>
                                            </div>
                                        </div>

                                        <div class="form-row mt-2">
                                            <div class="col-md-6">
                                                <label for="inputRUT">% convenio</label>
                                                <input type="text" class="form-control" id="rut"   name="convenio" placeholder="Ingrese tasa de convenio"  required>
                                            </div>  
					                        <div class="col-md-6">
                                                <label for="inputDATE">Contacto</label>
                                                <input type="text" class="form-control"  name="contacto" pattern="[A-Za-z0-9.-_,;: ]+" required>
                                             </div> 
                                        </div> 
                                        <div class="form-row mt-2">
                                         
					                        <div class="col-md-6">
                                                <label for="inputEmail">Observaciones</label>
                                                <input  class="form-control" type="textarea"  name="observacion" placeholder="Ingrese sus comentarios" pattern="[A-Za-z0-9.-_,;:@ ]+" required>
                                            </div>
                                        </div>                                 
                                        <div align="center"> 
					  	                <input type="submit" class="btn btn-danger btn-block mt-3" name="enviar" value="Agregar registro de paciente" style='width:500px; height:35px'>
                                        </div>
                                    </form>


                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                            
                           

              
@endsection