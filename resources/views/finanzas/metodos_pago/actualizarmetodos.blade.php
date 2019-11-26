@extends('../index')

@section('card')




 <!-- Start Content-->
                    <div class="container-fluid">
                      <div class="row my-5">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                           <form class="my-2" action="{{route('Actualizar-Descuentos',$descuentos->id)}}" method="POST">
                                            @method('PUT')
                                            @csrf

                                            <div class="form-group">
                                                <label for="inputName">Nombre: </label>
                                                    <input type="text" class="form-control"  value="{{$descuentos->nombre}}" name="nombre" minlength="1" maxlength="50"pattern="[A-Za-z0-9.-_,;: áéíóúÁÉÓÚ]+" required >
                                            </div>
                                            <div class="form-group">
                                                <label for="inputName">Descuento: </label>
                                                    <input type="text" class="form-control"  value="{{$descuentos->descuento}}" name="descuento" minlength="1" maxlength="50"pattern="[A-Za-z0-9.-_,;: áéíóúÁÉÓÚ]+" required >
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