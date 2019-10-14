@extends('index')
@section('card')

  <!-- Start Content-->
                   
                         <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                       Ingreso de Especialistas
                                    </div>
                                    <h4 class="page-title">Gestion de Especialistas</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-body">
                                      <form action="{{URL::to('/')}}/agregarE" method="post">
                                          {{csrf_field()}}
					                    <div class="form-group">
                                            <label for="inputRUT">RUT</label>
                                            <input type="text" class="form-control"  name="rut_med" placeholder="Sin puntos ni guion"  minlength="8" maxlength="9"pattern="[A-Za-z0-9 ]+" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRUT">Identificacion</label>
                                            <input type="text" class="form-control"  name="medidentificacion"  pattern="[A-Za-z0-9.-_ ]+" required>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="inputName">Nombres</label>
                                                <input type="text" class="form-control"  placeholder="Ingrese sus nombres" name="mednombres" minlength="1" maxlength="50"pattern="[A-Za-z0-9.-_,;: ]+" required >
                                            </div>
                                            <div class="col">
                                                <label for="inputLastname">Apellidos</label>
                                                <input type="text" class="form-control" name="medapellidos" placeholder="Ingrese sus apellidos"  minlength="1" maxlength="50"pattern="[A-Za-z0-9.-_,;: ]+" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="inputEmail">E-mail</label>
                                                <input  class="form-control" type="email"  name="medcorreo" placeholder="alguien@algo.cl" pattern="[A-Za-z0-9.-_,;:@ ]+" required>
                                            </div>
                                            <div class="col">
                                                <label for="inputLastname">N°de celular</label>
                                                <input type="numeric" class="form-control" name="medtelefono" placeholder="Numero de celular"  minlength="9" maxlength="9"pattern="[A-Za-z0-9.-_,;: ]+" required>
                                                <small id="telefonoHelp" class="form-text text-muted">Nota: solo debes ingresar los 9 digitos de tu numero de celular</small>
                                            </div>
                                        </div>    
                                        <div class="form-group">
                                            <div class="col-auto my-1">
                                                <label class="mr-sm-2" for="inlineFormCustomSelect">Especialidad: </label>
                                                <select  class="custom-select mr-sm-2" name="especialidades_id">  
                                                    <option value="Seleccione una especialidad">Seleccione una especialidad</option>
                    							         @foreach ($result2 as $mostrar)
                    							        <option value="{{$mostrar->id}}">{{$mostrar->espNombre}}</option>
                    							        @endforeach
						                        </select>
                                            </div>
                                        </div>
						                <input type="submit" class="btn btn-danger btn-block"name="enviar" value="Ingresar nuevo especialista">
					                   </form>  
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->

                                
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->
                        
                    </div> <!-- container -->
                     
                
                                        
                                
                           

              
@endsection