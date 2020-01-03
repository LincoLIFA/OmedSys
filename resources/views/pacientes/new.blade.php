@extends('index')
@section('card')

  <!-- Start Content-->
                   
        <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
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
					                    <div class="form-row">
                                            <div class="col">
                                                <label for="inputName">Nombres</label>
                                                <input type="text" class="form-control"  placeholder="Ingrese sus nombres" name="pacnombre" minlength="1" maxlength="50"pattern="[A-Za-z.-_,;: ]+" required >
                                            </div>
                                            <div class="col">
                                                <label for="inputLastname">Apellido Paterno</label>
                                                <input type="text" class="form-control" name="pacapellidoP" placeholder="Ingrese sus apellidos"  minlength="1" maxlength="50"pattern="[A-Za-z.-_,;: ]+" required>
                                            </div>
                                            <div class="col">
                                                <label for="inputLastname">Apellido Materno</label>
                                                <input type="text" class="form-control" name="pacapellidoM" placeholder="Ingrese sus apellidos"  minlength="1" maxlength="50"pattern="[A-Za-z.-_,;: ]+" required>
                                            </div>
                                        </div>

                                        <div class="form-row mt-2">
                                            <div class="col-md-6">
                                                <label for="inputRUT">RUT</label>
                                                <input type="text" class="form-control" id="rut" required oninput="checkRut(this)" name="pacidentificacion" placeholder="Sin puntos ni guion"  minlength="10" maxlength="10" required>
                                            </div>  
					                        <div class="col-md-6">
                                                <label for="inputDATE">Fecha de nacimiento</label>
                                                <input type="date" class="form-control"  name="pacfechaN" pattern="[A-Za-z0-9.-_,;: ]+" required>
                                             </div> 
                                        </div> 

                                        
                                        <div class="form-row mt-2">
                                            <div class="col-md-6">
                                                <label for="cbx_SEX">Sexo</label>
                                                <select class="form-control" name="pacsexo">
                                                    <option value="Seleccione Sexo">Seleccione Sexo</option>
                                                    <option value="Femenino">Femenino</option>
                                                    <option value="Masculino">Masculino</option>       
                                            </select>
                                            </div>
					                        <div class="col-md-6">
                                                <label for="inputEmail">E-mail</label>
                                                <input  class="form-control" type="email"  name="paccorreo" placeholder="alguien@algo.cl" pattern="[A-Za-z0-9.-_,;:@ ]+" required>
                                            </div>
                                        </div>                                 


                                        <div class="form-row mt-2">
                                            <div class="col-md-6">
                                                <label for="inputLastname">N°de celular</label>
                                                <input type="text" class="form-control" name="pactelefono" placeholder="Numero de celular" value="+569" minlength="13" maxlength="13"pattern="[0-9.-_,;:+ ]+" required>
                                                <small id="telefonoHelp" class="form-text text-muted">Nota: solo debes ingresar los 8 digitos de tu numero de celular</small>
                                            </div>
                                        </div>
                                        
                                        <div align="center"> 
					  	                <input type="submit" class="btn btn-danger btn-block mt-3" name="enviar" value="Agregar Paciente" style='width:500px; height:35px'>
                                        </div>
                                    </form>
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->

                                
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->
                        
                    </div> <!-- container -->
          

<script>
function checkRut(rut) {
    // Despejar Puntos
    var valor = rut.value.replace('.','');
    // Despejar Guión
    valor = valor.replace('-','');
    
    // Aislar Cuerpo y Dígito Verificador
    cuerpo = valor.slice(0,-1); 
    dv = valor.slice(-1).toUpperCase();
    
    // Formatear RUN
    rut.value = cuerpo + '-'+ dv
    
    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false;}
    
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
    if(dvEsperado != dv) { rut.setCustomValidity("RUT Inválido"); return false; }
    
    // Si todo sale bien, eliminar errores (decretar que es válido)
    rut.setCustomValidity('');
}
</script>
                                   
                                
                           

              
@endsection