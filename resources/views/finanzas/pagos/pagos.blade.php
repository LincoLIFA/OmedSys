@extends('finanzas.index')
@section('card')


<div class="container mt-3">
            <div class="card">
            <div class="card-header"><h4>Pago de Prestaciones</h4></div>
            <div class="card-block p-0">
            <div class="row">
              <div class="col-12">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Prestación</th>
                      <th scope="col">Precio</th>
                      <th scope="col">Abonado</th>
                      <th scope="col">Estado</th>
                      <th scope="col">Por abonar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                            <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="chk_1" Value="83000" class="custom-control-input" onclick="actualizarValor(this.checked, this.value);">
                                        <label class="custom-control-label" for="chk_1">1</label>
                                    </div>
                            </td>
                      <td>Bootstrap 4 CDN and Starter Template</td>
                      <td>$90.000</td>
                      <td>$7.000</td>
                      <td><a href="#" class="badge badge-danger">No pagado</a></td>
                      <td>$83.000</td>
                    </tr>
                    <tr>
                            <td>
                              <div class="custom-control custom-checkbox">
                                  <input type="checkbox" id="chk_2" Value="83000" class="custom-control-input" onclick="actualizarValor(this.checked, this.value);">
                                  <label class="custom-control-label" for="chk_2">2</label>
                              </div>
                            </td>
                            <td>Bootstrap 4 CDN and Starter Template</td>
                            <td>$90.000</td>
                            <td>$7.000</td>
                            <td><a href="#" class="badge badge-danger">No pagado</a></td>
                            <td>$83.000</td>
                          </tr>
                          <tr>
                                <td>
                                  <div class="custom-control custom-checkbox">
                                      <input type="checkbox" id="chk_3" Value="83000" class="custom-control-input" onclick="actualizarValor(this.checked, this.value);" >
                                      <label class="custom-control-label" for="chk_3">3</label>
                                  </div>
                                </td>
                                <td>Bootstrap 4 CDN and Starter Template</td>
                                <td>$90.000</td>
                                <td>$7.000</td>
                                <td><a href="#" class="badge badge-danger">No pagado</a></td>
                                <td>$83.000</td>
                              </tr>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
            <div class="card-footer text-muted">
                <br>                
            </div>
        </div>

        <div class="card mt-1 float-right" style="width: 27rem;">
            <div class="card-header"><h6></h6></div>
            <div class="card-block p-0">
            <div class="row">
              <div class="col-12">
            <table class="table table-hover">

          <tbody>
              <tr>
                  <th scope="row">Total a Pagar</th>
                  <td class="text-center">$<input type="text" readonly name="txtValor" id="txtValor" value="0" onchange="document.getElementById('txtValor2').value=this.value"/></td>
                </tr>
              <tr>
                <th scope="row">
                <form name="formulario">
                    <input type="checkbox" name="box" onclick="funcion()" /> Ingresar Abono Libre </th>
                    <td class="text-center">$<input type="text" name="campo2" disabled/></td>
                </form> 
              </tr>
            
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer text-muted"><h6></h6></div>
  </div>
</div>

<div class="card mt-1 float-left" style="width: 36rem;">
    <div class="card-header"><h5>Datos del Pago</h5></div>
    <div class="card-block p-0">
    <div class="row">
      <div class="col-12">

          <div class="container">
      <form>

          <div class="row mt-2">
            <div class="col">
              <label for="inputState" class="font-weight-bold">Medio de Pago</label>
              <select id="inputState" class="form-control">
                <option selected>Elegir...</option>
                <option>...</option>
              </select>
            </div>


          
            <div class="col">
              <div class="form-group">
                <label for="inputCity" class="font-weight-bold">N°Factura(Boleta)</label>
                <input type="text" class="form-control" id="inputCity">
              </div>

            </div>
          </div>
          </form>

          <form>
              <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="inputState" class="font-weight-bold">Descuento</label>
                  <select id="inputState" class="form-control">
                    <option selected>Elegir...</option>
                    <option>...</option>
                  </select>
                </div>
              </div>


              <div class="col">
                  <div class="form-group">
                    <div class="form-group">
                      <label for="inputCity" class="font-weight-bold">Monto</label>
                      <input type="text" class="form-control" id="inputCity">
                    </div>
                  </div>
                </div>

              </div>
                </form>
                <button type="button" class="btn btn-primary btn-sm btn-block mt-2 mb-2 font-weight-bold">Ingresar Transacciones</button>
              </div>

      </div>
    </div>
  <div class="card-footer text-muted"><h6></h6></div>
      </div>
    </div>
  </div>
<!--CheckBox-->

    <script>
    function funcion(){
        if(document.formulario.box.checked == true){
            document.formulario.campo2.disabled = false;
        }
        else{
            document.formulario.campo2.disabled = true;
        }
    }
    </script>

<!--SUMA PRESTACIONES SELECCIONADAS-->

    <script>
      function actualizarValor(estaChequeado, valor) {

// Variables.
var suma_actual = 0;
var campo_resultado = document.getElementById('txtValor');
valor = parseInt(valor);

// Obtener la suma que pueda tener el campo 'txtValor'.
try {
  if (campo_resultado != null) {

    if (isNaN(campo_resultado.value)) {
      campo_resultado.value = 0;
    }

    suma_actual = parseInt(campo_resultado.value);
  }
} catch (ex) {
  alert('No existe el campo de la suma.');
}

// Determinar que: si el check está seleccionado "checked"
// entonces, agregue el valor a la variable "suma_actual";
// de lo contrario, le resta el valor del check a "suma_actual".
if (estaChequeado == true) {
  suma_actual = suma_actual + valor;
} else {
  suma_actual = suma_actual - valor;
}

// Colocar el resultado de las operaciones anteriores de vuelta
// al campo "txtValor".
campo_resultado.value = suma_actual;
}
    </script>





@endsection