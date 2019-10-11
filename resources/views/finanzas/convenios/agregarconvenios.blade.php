@extends('index')
@section('card')

  <!-- Start Content-->
                   
                    
                       <!-- cabecera de sección  -->
        <div class="page-title-box">
                <div class="page-title-right">
                                        
                </div>

                <h4 class="page-title">Agregar Nuevo convenio a la plataforma </h4>
        </div>


        !-- Start Content-->
                    <div class="container-fluid">
                      <div class="row my-5">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                           <form class="my-2" action="{{route('Agregar-nuevo-convenio')}}" method="POST">
                                           {{csrf_field()}}
                                         
                                             <div class="form-row">
                                                <div class="form-group col">
                                                  <label for="inputDate">Fecha</label>
                                                  <input type="date" class="form-control" name="fecha" placeholder="Fecha" "required/>
                                                <small id="emailHelp" class="form-text text-muted">Debe escoger un día</small>
                                                </div>
                                                </div>


                                                <div class="form-row">
                                                <div class="form-group col">
                                                  <label for="inputDate">Empresa</label>
                                                  <input type="text" class="form-control" name="empresa" placeholder="Ingrese nombre de empresa" required/>
                                                <small id="emailHelp" class="form-text text-muted">Debe escoger un día</small>
                                                </div>
                                                </div>


                                                <div class="form-row">
                                                    <div class="form-group col">
                                                      <label for="inputDate">% de descuento</label>
                                                      <input type="text" class="form-control" name="descuento" placeholder="Ingrese tasa de descuento" required/>
                                                      <small id="emailHelp" class="form-text text-muted">Debe escoger un día</small>
                                                </div>
                                                </div>


                                                <div class="form-row">
                                                <div class="form-group col">
                                                  <label for="inputDate">Observaciones</label>
                                                  <input type="text" class="form-control" name="observacion" placeholder="Ingrese Observaciones" required/>
                                                <small id="emailHelp" class="form-text text-muted">Debe escoger un día</small>
                                                </div>
                                                </div>


                                                <div class="form-row">
                                                <div class="form-group col">
                                                  <label for="inputDate">Contactos</label>
                                                  <input type="text" class="form-control" name="contacto" placeholder="Ingrese Representante de Convenio" required/>
                                                <small id="emailHelp" class="form-text text-muted">Debe escoger un día</small>
                                                </div>
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