@extends('finanzas.index')
@section('card')


<div class="container">
            <div class="card">
            <div class="card-header"><h4>Plan de Tratamiento:</h4>Estado de Pago
              <button type="button d-flex" class="btn btn-primary float-right" data-toggle="modal" data-target="#cargarprestacion" data-whatever="@mdo">Cargar Prestación</button>
            </div>
            <div class="card-block p-0">
            <div class="row">
              <div class="col-12">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Prestación</th>
                      <th scope="col">Realización</th>
                      <th scope="col">Dcto(%)</th>
                      <th scope="col">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                            <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">1</label>
                                    </div>
                            </td>
                      <td>Bootstrap 4 CDN and Starter Template</td>
                      <td>No Realizado</td>
                      <td>
                          <form>
                              <div>
                                <input id="balloons" type="number" name="balloons" step="1" min="0" max="20" required>
                                <span class="validity"></span>
                              </div>
                              <div>
                                <input type="submit">
                              </div>
                          </form>
                      </td>
                      <td>$913</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">2</label>
                        </div>
                      </td>
                      <td>Bootstrap Grid 4 Tutorial and Examples</td>
                      <td>Realizado</td>
                      <td>
                          <form>
                              <div>
                                <input id="balloons" type="number" name="balloons" step="1" min="0" max="20" required>
                                <span class="validity"></span>
                              </div>
                              <div>
                                <input type="submit">
                              </div>
                          </form>
                      </td>
                      <td>$1.434</td>
                    </tr>
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                            <label class="custom-control-label" for="customCheck3">3</label>
                        </div>
                      </td>
                      <td>Bootstrap Flexbox Tutorial and Examples</td>
                      <td>No realizado</td>
                      <td>
                          <form>
                              <div>
                                <input id="balloons" type="number" name="balloons" step="1" min="0" max="20" required>
                                <span class="validity"></span>
                              </div>
                              <div>
                                <input type="submit">
                              </div>
                          </form>
                      </td>
                      <td>$1.877</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
            <div class="card-footer p-0">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-end mt-3 mr-3">
                            <li class="page-item disabled">
                                <span class="page-link">Previous</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <span class="page-link">2<span class="sr-only">(current)</span>
                                </span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
        </div>
        </div>
        </div>



      <!--Modal Cargar Prestación-->
    
      <div class="modal fade" id="cargarprestacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cargar Nueva Prestación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="container">
                      <div class="col-lg-12">
                          <form>
                          <label for="validationCustom03">Prestaciones Ingresadas:</label>
                          <select class="form-control" name="category" id="Especialidad" onchange="ChangecatList()" required>
                            <option value="Acción Clínica">Elige una Prestación...</option>
                            <option value="Acción Especial">Acción Especial</option>
                          </select>
                        <div class="invalid-feedback">
                            Por favor proporcione una categoría.
                        </div>
                          </form>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Agregar</button>
              </div>
            </div>
          </div>
        </div>

      <!--Modal Evolucionar Prestación-->

      <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
          <div class="modal-dialog">
        <div class="modal-content">
              <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
            <h4 class="modal-title" id="Heading">Evolucionar Prestación</h4>
          </div>
              <div class="modal-body">
           
           <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> ¿Estás seguro que deseas evolucionar esta prestación?</div>
           
          </div>
            <div class="modal-footer ">
            <button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span>Sí</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
          </div>
            </div>
      </div>
        </div>

<!--Style del descuento-->
      <style>
      div {
          margin-bottom: 10px;
        }
        
        input:invalid+span:after {
          content: '✖';
          padding-left: 5px;
        }
        
        input:valid+span:after {
          content: '✓';
          padding-left: 5px;
        }
        </style>
    
    <!--Inicio modal con checkbox-->
    <script>
    $('input[type="checkbox"]').on('change', function(e){
   if(e.target.checked){
     $('#delete').modal();
   }
});
    </script>

    <!--Validación descuento-->
    <script>
        var metersInputGroup = document.querySelector('.metersInputGroup');
        var feetInputGroup = document.querySelector('.feetInputGroup');
        var metersInput = document.querySelector('#meters');
        var feetInput = document.querySelector('#feet');
        var inchesInput = document.querySelector('#inches');
        var switchBtn = document.querySelector('input[type="button"]');
        
        switchBtn.addEventListener('click', function() {
          if(switchBtn.getAttribute('class') === 'meters') {
            switchBtn.setAttribute('class', 'feet');
            switchBtn.value = 'Enter height in meters';
        
            metersInputGroup.style.display = 'none';
            feetInputGroup.style.display = 'block';
        
            feetInput.setAttribute('required', '');
            inchesInput.setAttribute('required', '');
            metersInput.removeAttribute('required');
        
            metersInput.value = '';
          } else {
            switchBtn.setAttribute('class', 'meters');
            switchBtn.value = 'Enter height in feet and inches';
        
            metersInputGroup.style.display = 'block';
            feetInputGroup.style.display = 'none';
        
            feetInput.removeAttribute('required');
            inchesInput.removeAttribute('required');
            metersInput.setAttribute('required', '');
        
            feetInput.value = '';
            inchesInput.value = '';
          }
        });</script>







@endsection