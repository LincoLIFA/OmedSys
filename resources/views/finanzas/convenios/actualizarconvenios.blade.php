@extends('../index')

@section('card')




 <!-- Start Content-->
                    <div class="container-fluid">
                      <div class="row my-5">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                           <form class="my-2" action="{{route('Actualizar-convenios',$convenios->id)}}" method="POST">
                                           {{csrf_field()}}
                                           @method('PUT')
                                             <div class="form-row">
                                                <div class="form-group col">
                                                  <label for="inputDate">Fecha</label>
                                                  <input type="date" class="form-control" name="fecha" placeholder="Fecha" value="{{$convenios->fecha}}"required/>
                                               
                                                </div>
                                                </div>


                                                <div class="form-row">
                                                <div class="form-group col">
                                                  <label for="inputDate">Empresa</label>
                                                  <input type="text" class="form-control" name="empresa" placeholder="Fecha" value="{{$convenios->empresa}}"required/>
                                                
                                                </div>
                                                </div>


                                                <div class="form-row">
                                                    <div class="form-group col">
                                                      <label for="inputDate">% de descuento</label>
                                                      <input type="text" class="form-control" name="descuento" placeholder="Fecha" value="{{$convenios->descuento}}"required/>
                                                     
                                                </div>
                                                </div>


                                                <div class="form-row">
                                                <div class="form-group col">
                                                  <label for="inputDate">Observaciones</label>
                                                  <input type="text" class="form-control" name="observacion" placeholder="Fecha" value="{{$convenios->observacion}}"required/>
                                                
                                                </div>
                                                </div>


                                                <div class="form-row">
                                                <div class="form-group col">
                                                  <label for="inputDate">Contactos</label>
                                                  <input type="text" class="form-control" name="contacto" placeholder="Fecha" value="{{$convenios->contacto}}"required/>
                                               
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