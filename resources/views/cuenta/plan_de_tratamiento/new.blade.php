@extends('index')
@section('card')

  <!-- Start Content-->
                   
        <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Gestion de Planes de Tratamiento</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-body">
                                      <form action="{{route('Agregar-nuevo-Planes')}}" method="post">
                                          @csrf
                                
                                          <div class="form-row col-md-10">
                                             
                                            <div class="col-md-3" >
                                              <label for="inputDate">Fecha </label>
                                            </div>
                                            <div class="col-md-7">
                                              <label for="now">{{Carbon\Carbon::now()->format('d-m-Y')}}</label>
                                            </div>
                                           </div>
                                            <div class="form-row col-md-12 my-3">
                                              <div class="col-md-3">
                                                <label for="inputDate">Nombre del Plan </label>
                                              </div>
                                              <div class="col-md-9">
                                                <input type="text"  class="form-control"  name="nombre" placeholder="Ingrese el nombre" required/>
                                              </div>                                   
                                            </div>
                                           
                             
                           
                             <div class="form-row">
                                <div class="form-group col-md-6">
                                   <label for="inputPassword">Profesional</label>
                                       <select name="medico_id"  class="custom-select mr-sm-1" required>
                                         <option value="0">Seleccione un Profesional</option>
                                           @foreach ($result2 as $mostrar)
                                           <option value="{{$mostrar->id}}">{{$mostrar->medidentificacion}}</option>
                                           @endforeach
                                       </select> 
                                  </div>
                                       <div class="form-group col-md-6">
                                          <label for="inputPassword">Especialidad</label>
                                              <select name="especialidades_id"  class="custom-select mr-sm-1" required>
                                                <option value="0">Seleccione una especialidad</option>
                                                  @foreach ($result3 as $mostrar)
                                                  <option value="{{$mostrar->id}}">{{$mostrar->espNombre}}</option>
                                                  @endforeach
                                              </select> 
                                         </div>
                                  </div>    
                                  <div class="form-check"> 
                                  <label for="inputPassword">Procediminetos</label>
                                  </br>
                                    @foreach ($result4 as $mostrar)
                                      <div class="form-group">
                                          <div class="custom-control custom-switch">
                                              <input type="checkbox" class="custom-control-input" value="{{$mostrar->id}}"  name="aranceles[]"  id="customSwitch{{$mostrar->id}}">
                                              <label class="custom-control-label" for="customSwitch{{$mostrar->id}}">{{$mostrar->procedimientos}}</label>
                                          </div>
                                      </div>
                                      @endforeach
                                    </div>
                                
                                
                                         <div align="center"> 
                                         <input type="submit" name="enviar" class="btn btn-danger btn-block mt-3" value="Ingresar Diagnostico" style='width:500px; height:35px'>
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