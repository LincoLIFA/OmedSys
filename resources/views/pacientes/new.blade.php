@extends('index')
@section('card')

  <!-- Start Content-->
                   
                         <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                       Ingreso de Paciente
                                    </div>
                                    <h4 class="page-title">Gestion de Pacientes</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-body">
                                      <form action="{{route('AgregarP')}}" method="post">
                                          @csrf
					                    <div class="form-group">
                                            <label for="inputRUT">RUT</label>
                                            <input type="text" class="form-control"  name="pacidentificacion" placeholder="Sin puntos ni guion"  minlength="8" maxlength="9"pattern="[0-9kK]+" required>
                                        </div>
					                    <div class="form-row">
                                            <div class="col">
                                                <label for="inputName">Nombres</label>
                                                <input type="text" class="form-control"  placeholder="Ingrese sus nombres" name="pacnombre" minlength="1" maxlength="50"pattern="[A-Za-z0-9.-_,;: ]+" required >
                                            </div>
                                            <div class="col">
                                                <label for="inputLastname">Apellido Paterno</label>
                                                <input type="text" class="form-control" name="pacapellidoP" placeholder="Ingrese sus apellidos"  minlength="1" maxlength="50"pattern="[A-Za-z0-9.-_,;: ]+" required>
                                            </div>
                                            <div class="col">
                                                <label for="inputLastname">Apellido Materno</label>
                                                <input type="text" class="form-control" name="pacapellidoM" placeholder="Ingrese sus apellidos"  minlength="1" maxlength="50"pattern="[A-Za-z0-9.-_,;: ]+" required>
                                            </div>
                                        </div>  
					                    <div class="form-group">
                                            <label for="inputDATE">Fecha de nacimiento</label>
                                            <input type="date" class="form-control"  name="pacfechaN" pattern="[A-Za-z0-9.-_,;: ]+" required>
                                        </div>      
                                        <div class="form-group">
                                            <label for="cbx_SEX">Sexo</label>
                                            <select class="form-control" name="pacsexo">
                                                <option value="Seleccione Sexo">Seleccione Sexo</option>
                                                <option value="Femenino">Femenino</option>
                                                <option value="Masculino">Masculino</option>       
                                            </select>
                                        </div>
					                    <div class="form-row">
                                            <div class="col">
                                                <label for="inputEmail">E-mail</label>
                                                <input  class="form-control" type="email"  name="paccorreo" placeholder="alguien@algo.cl" pattern="[A-Za-z0-9.-_,;:@ ]+" required>
                                            </div>
                                            <div class="col">
                                                <label for="inputLastname">N°de celular</label>
                                                <input type="text" class="form-control" name="pactelefono" placeholder="Numero de celular"  minlength="9" maxlength="9"pattern="[A-Za-z0-9.-_,;: ]+" required>
                                                <small id="telefonoHelp" class="form-text text-muted">Nota: solo debes ingresar los 9 digitos de tu numero de celular</small>
                                            </div>
                                        </div> 
					  	                <input type="submit" class="btn btn-danger btn-block" name="enviar" value="Agregar registro de paciente">
					                   </form>
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->

                                
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->
                        
                    </div> <!-- container -->
                     
                
                                        
                                
                           

              
@endsection