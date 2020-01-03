@extends('index')
@section('card')

  <!-- Start Content-->
                   
                         <div class="container-fluid">

                        
                        <!-- start page title -->
                        <section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Ingreso de Especialistas </h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Advanced Form</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section> 
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-body">
                                      <form action="{{URL::to('/')}}/agregarE" method="post">
                                          {{csrf_field()}}

					                    <div class="form-row">
                                            <div class="col-md-6">
                                            <label for="inputRUT">RUT</label>
                                            <input type="text" class="form-control valid_rut" id="rutmed"  name="rut_med" placeholder="Sin puntos ni guion" required oninput="checkRut(this)"  minlength="10" maxlength="10" required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputRUT">Identificacion</label>
                                            <input type="text" class="form-control"  name="medidentificacion"  pattern="[A-Za-z0-9.-_ ]+" required>
                                        </div>
                                    </div>

                                        <div class="form-row mt-2">
                                            <div class="col-md-6">
                                                <label for="inputName">Nombres</label>
                                                <input type="text" class="form-control"  placeholder="Ingrese sus nombres" name="mednombres" minlength="1" maxlength="50"pattern="[A-Za-z.-_,;: ]+" required >
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputLastname">Apellidos</label>
                                                <input type="text" class="form-control" name="medapellidos" placeholder="Ingrese sus apellidos"  minlength="1" maxlength="50"pattern="[A-Za-z.-_,;: ]+" required>
                                            </div>
                                        </div>


                                        <div class="form-row mt-2">
                                            <div class="col-md-6">
                                                <label for="inputEmail">E-mail</label>
                                                <input  class="form-control" type="email"  name="medcorreo" placeholder="alguien@algo.cl" pattern="[A-Za-z0-9.-_,;:@ ]+" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputLastname">N°de celular</label>
                                                <input type="numeric" class="form-control" name="medtelefono" placeholder="Numero de celular" value="569" minlength="11" maxlength="11" pattern="[0-9.-_,;: ]+" required>
                                                <small id="telefonoHelp" class="form-text text-muted">Nota: solo debes ingresar los 8 digitos de tu numero de celular</small>
                                            </div>
                                        </div>    

                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <label class="mr-sm-2" for="inlineFormCustomSelect">Especialidad: </label>
                                                <select  class="custom-select mr-sm-2" name="especialidades_id">  
                                                    <option value="Seleccione una especialidad">Seleccione una especialidad</option>
                    							         @foreach ($result2 as $mostrar)
                    							        <option value="{{$mostrar->id}}">{{$mostrar->espNombre}}</option>
                    							        @endforeach
						                        </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputEmail">Contraseña</label>
                                                <input  class="form-control" type="email"  name="medcorreo" placeholder="Ingresa una contraseña para el Especialista" pattern="[A-Za-z0-9.-_,;:@ ]+" required>
                                            </div>
                                        </div>

                                        <div align="center"> 
                                        <input type="submit" class="btn btn-danger btn-block mt-3" name="enviar" value="Ingresar Nuevo Especialista" style='width:500px; height:35px'>
                                    </div>

					                   </form>  
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->

                                
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->
                        
                    </div> <!-- container -->
                     

                   
                                
                           

              
@endsection