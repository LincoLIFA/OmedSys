@extends('finanzas.index')
@section('card')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Ficha Medica </h1>
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

<div class="container-fluid">
<div class="row">
                            <div class="col-xl-4 col-lg-5">
                                <div class="card text-center">
                                    <div class="card-body">
                                    <i class="fas fa-user fa-4x"></i>
                                        <!--<img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">-->

                                        <h4 class="mb-0 mt-2">Dominic Keller</h4>
                                        <p class="text-muted font-14">Paciente</p>

                                        <div class="text-left mt-3">
                                            <h4 class="font-13 text-uppercase">Datos del Paciente :</h4>
                                            <p class="text-muted font-13 mb-3">
                                                Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type.
                                            </p>
                                            <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2">Geneva
                                                    D. McKnight</span></p>

                                            <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ml-2">(123)
                                                    123 1234</span></p>

                                            <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 ">user@email.domain</span></p>

                                            <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ml-2">USA</span></p>
                                        </div>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->

                                <!-- Messages-->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-right">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-3">Messages</h4>

                                        <div class="inbox-widget">
                                        
                                        <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                                            <li class="nav-item">
                                                <a href="#uno" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                                    Datos
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#dos" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                                    informacion
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#tres" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                    amigo
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="tab-content">

                                        <div class="tab-pane active" id="uno">
    
                                                <h5 class="text-uppercase"><i class="mdi mdi-briefcase mr-1"></i>
                                                    Titulo1</h5>
                                        </div>

                                        <div class="tab-pane" id="dos">
    
                                                <h5 class="text-uppercase"><i class="mdi mdi-briefcase mr-1"></i>
                                                    Titulo2</h5>
                                        </div>

                                        <div class="tab-pane" id="tres">
    
                                                <h5 class="text-uppercase"><i class="mdi mdi-briefcase mr-1"></i>
                                                    Titulo3</h5>
                                        </div>
                                        </div>

                                    
                                      

                                        </div> <!-- end inbox-widget -->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->

                            </div> <!-- end col-->

                            <div class="col-xl-8 col-lg-7">
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                                            <li class="nav-item">
                                                <a href="#aboutme" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                                Diagnostico
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#timeline" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                                Historial
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                Cargar Plan de Tratamiento
                                                </a>
                                            </li>
                                        </ul>
                                        
                                            <!--ABOUTME-->
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="aboutme">
                                                
                    
                                                <!--<h5 class="text-uppercase"><i class="mdi mdi-briefcase mr-1"></i>
                                                    Historial de Diagnosticos</h5> -->

                                                <div style="text-align: center">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevodiagnostico" data-whatever="@mdo" style='width:300px; height:35px'>Nuevo Diagnostico</button>

                                                </div>

                                                <div class="modal fade" id="nuevodiagnostico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <h5 class="modal-title" id="exampleModalLabel">Ingrese un nuevo diagnostico</h5>
                                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                              </button>
                                                            </div>

                                                            <div class="modal-body">        
                                                                <div class="form-row">

                                                                    <div class="col-sm-6">
                                                                        <label for="inputDATE">Nombre del Diagnostico</label>
                                                                        <input type="text" class="form-control"  name="pacfechaN" pattern="[A-Za-z0-9.-_,;: ]+" required>
                                                                      </div>
                                                                      <div class="col-sm-6">
                                                                        <label for="inputDATE">Fecha de la cita</label>
                                                                        <input type="date" class="form-control"  name="pacfechaN" pattern="[A-Za-z0-9.-_,;: ]+" required>
                                                                      </div>
                                                                        <label for="message-text" class="col-form-label">Descripción:</label>
                                                                        <textarea class="form-control" id="message-text"></textarea>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="modal-footer">
                                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                              <button type="button" class="btn btn-primary">Agregar</button>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                          
                                            
                                                      <div class="row">
                                                          <div class="col-md-12">
                                                            <!-- The time line -->
                                                            <div class="timeline">
                                                              <!-- timeline time label -->
                                                              <div class="time-label">
                                                                <span class="bg-red">10 Feb. 2014</span>
                                                              </div>
                                                              <!-- /.timeline-label -->
                                                              <!-- timeline item -->
                                                              <div>
                                                                <i class="fas fas fa-user bg-blue"></i>
                                                                <div class="timeline-item">
                                                                  <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                                                                  <h3 class="timeline-header"><a href="#">Nombre del diagnostico</a> algo x</h3>
                                                
                                                                  <div class="timeline-body">
                                                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                                    weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                                    jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                                    quora plaxo ideeli hulu weebly balihoo...
                                                                  </div>
                                                                </div>
                                                              </div>

                                                              <div class="time-label">
                                                                  <span class="bg-red">10 Feb. 2014</span>
                                                                </div>
                                                                <!-- /.timeline-label -->
                                                                <!-- timeline item -->
                                                                <div>
                                                                  <i class="fas fas fa-user bg-blue"></i>
                                                                  <div class="timeline-item">
                                                                    <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                                                                    <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
                                                  
                                                                    <div class="timeline-body">
                                                                      Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                                      weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                                      jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                                      quora plaxo ideeli hulu weebly balihoo...
                                                                    </div>
                                                                  </div>
                                                                </div>

                                                                <div class="time-label">
                                                                    <span class="bg-red">10 Feb. 2014</span>
                                                                  </div>
                                                                  <!-- /.timeline-label -->
                                                                  <!-- timeline item -->
                                                                  <div>
                                                                    <i class="fas fas fa-user bg-blue"></i>
                                                                    <div class="timeline-item">
                                                                      <span class="time"><i class="fas fa-clock"></i> 12:05</span>
                                                                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
                                                    
                                                                      <div class="timeline-body">
                                                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                                        quora plaxo ideeli hulu weebly balihoo...
                                                                      </div>
                                                                    </div>
                                                                  </div>

                                                            </div>
                                                          </div>
                                                      </div>

    
                                            </div> <!-- end tab-pane -->
                                            <!-- end about me section content -->
                                            

                                            <!--TIMELINE-->
                                            <div class="tab-pane" id="timeline">
                                           
    
                                            </div> 
                                            <!-- end timeline content--> 
    





          <!--SETTINGS-->                                  
        <div class="tab-pane" id="settings">
            
            <div style="text-align: center">                        
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cargarprestacion" data-whatever="@mdo" style='width:300px; height:35px'>Cargar Prestación</button>
              </div>
           
            <div class="card-block p-0 mb-2">
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



                                                
                                                 

                                            </div>
                                            <!-- end settings content-->

                                        </div> <!-- end tab-content -->
                                    </div> <!-- end card body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>

@endsection