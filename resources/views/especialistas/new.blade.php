@extends('index')
@section('card')

  <!-- Start Content-->
                   
                         <div class="container-fluid">

                        
                        <!-- start page title -->
                        <section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Ingreso de especialistas </h1>
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
                                            <input type="text" class="form-control" id="rutmed"  name="rut_med" placeholder="Sin puntos ni guion" required oninput="checkRut(this)"  minlength="10" maxlength="10" required>
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
                                                <input type="numeric" class="form-control" name="medtelefono" placeholder="Numero de celular" value="+569" minlength="13" maxlength="13" pattern="[0-9.-_,;: ]+" required>
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
                                        </div>

                                        <div align="center"> 
                                        <input type="submit" class="btn btn-danger btn-block mt-3" name="enviar" value="Ingresar nuevo especialista" style='width:500px; height:35px'>
                                    </div>

					                   </form>  
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->

                                
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->
                        
                    </div> <!-- container -->
                     

                    <script>
                            function checkRut(rutmed) {
                                // Despejar Puntos
                                var valor = rutmed.value.replace('.','');
                                // Despejar Guión
                                valor = valor.replace('-','');
                                
                                // Aislar Cuerpo y Dígito Verificador
                                cuerpo = valor.slice(0,-1); 
                                dv = valor.slice(-1).toUpperCase();
                                
                                // Formatear RUN
                                rutmed.value = cuerpo + '-'+ dv
                                
                                // Si no cumple con el mínimo ej. (n.nnn.nnn)
                                if(cuerpo.length < 7) { rutmed.setCustomValidity("RUT Incompleto"); return false;}
                                
                                // Calcular Dígito Verificador
                                suma = 0;
                                multiplo = 2;
                                
                                // Para cada dígito del Cuerpo
                                for(i=1;i<=cuerpo.length;i++) {
                                
                                    // Obtener su Producto con el Múltiplo Correspondiente
                                    index = multiplo * valor.charAt(cuerpo.length - i);
                                    
                                    // Sumar al Contador General
                                    suma = suma + index;
                                    
                                    // Consolidar Múltiplo dentro del rango [2,7]
                                    if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
                              
                                }
                                
                                // Calcular Dígito Verificador en base al Módulo 11
                                dvEsperado = 11 - (suma % 11);
                                
                                // Casos Especiales (0 y K)
                                dv = (dv == 'K')?10:dv;
                                dv = (dv == 0)?11:dv;
                                
                                // Validar que el Cuerpo coincide con su Dígito Verificador
                                if(dvEsperado != dv) { rutmed.setCustomValidity("RUT Inválido"); return false; }
                                
                                // Si todo sale bien, eliminar errores (decretar que es válido)
                                rutmed.setCustomValidity('');
                            }
                            </script>
                                        
                                
                           

              
@endsection