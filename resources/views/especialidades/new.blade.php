@extends('index')
@section('card')

  <!-- Start Content-->
                   
                         <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                       Ingreso de Especialidades
                                    </div>
                                    <h4 class="page-title">Gestion de Especialidades</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-body">
                                      <form action="{{URL::to('/')}}/agregarA" method="post">
                                          {{csrf_field()}}
					                       <div class="form-row">
                                                <div class="col">
                                                    <label for="inputName">Especialidad: </label>
                                                    <input type="text" class="form-control"  placeholder="Ingrese especialidad" name="espNombre" minlength="1" maxlength="50"pattern="[A-Za-z0-9.-_,;: áéíóúÁÉÓÚ]+" required >
                                                </div>
                                            </div> 
						                    <input type="submit" class="my-3 btn btn-danger btn-block" name="enviar" value="Agregar Especialiadad">
					                    </form>
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->

                                
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->
                        
                    </div> <!-- container -->
                     
                
                                        
                                
                           

              
@endsection