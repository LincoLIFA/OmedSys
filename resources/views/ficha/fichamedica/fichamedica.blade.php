@extends('finanzas.index')
@section('card')



<div class="row mt-4">
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
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="aboutme">
    
                                                <h5 class="text-uppercase"><i class="mdi mdi-briefcase mr-1"></i>
                                                    Experience</h5>

                                                <div class="timeline-alt pb-0">
                                                    <div class="timeline-item">
                                                        <i class="mdi mdi-circle bg-info-lighten text-info timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <h5 class="mt-0 mb-1">Lead designer / Developer</h5>
                                                            <p class="font-14">websitename.com <span class="ml-2 font-12">Year: 2015 - 18</span></p>
                                                            <p class="text-muted mt-2 mb-0 pb-3">Everyone realizes why a new common language
                                                                would be desirable: one could refuse to pay expensive translators.
                                                                To achieve this, it would be necessary to have uniform grammar,
                                                                pronunciation and more common words.</p>
                                                        </div>
                                                    </div>
    
                                                    <div class="timeline-item">
                                                        <i class="mdi mdi-circle bg-primary-lighten text-primary timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <h5 class="mt-0 mb-1">Senior Graphic Designer</h5>
                                                            <p class="font-14">Software Inc. <span class="ml-2 font-12">Year: 2012 - 15</span></p>
                                                            <p class="text-muted mt-2 mb-0 pb-3">If several languages coalesce, the grammar
                                                                of the resulting language is more simple and regular than that of
                                                                the individual languages. The new common language will be more
                                                                simple and regular than the existing European languages.</p>

                                                        </div>
                                                    </div>
    
                                                    <div class="timeline-item">
                                                        <i class="mdi mdi-circle bg-info-lighten text-info timeline-icon"></i>
                                                        <div class="timeline-item-info">
                                                            <h5 class="mt-0 mb-1">Graphic Designer</h5>
                                                            <p class="font-14">Coderthemes Design LLP <span class="ml-2 font-12">Year: 2010 - 12</span></p>
                                                            <p class="text-muted mt-2 mb-0 pb-2">The European languages are members of
                                                                the same family. Their separate existence is a myth. For science
                                                                music sport etc, Europe uses the same vocabulary. The languages
                                                                only differ in their grammar their pronunciation.</p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end timeline -->        

                                                <h5 class="mb-3 mt-4 text-uppercase"><i class="mdi mdi-cards-variant mr-1"></i>
                                                    Projects</h5>
                                                <div class="table-responsive">
                                                    <table class="table table-borderless table-nowrap mb-0">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Clients</th>
                                                                <th>Project Name</th>
                                                                <th>Start Date</th>
                                                                <th>Due Date</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td><img src="assets/images/users/avatar-2.jpg" alt="table-user" class="mr-2 rounded-circle" height="24"> Halette Boivin</td>
                                                                <td>App design and development</td>
                                                                <td>01/01/2015</td>
                                                                <td>10/15/2018</td>
                                                                <td><span class="badge badge-info-lighten">Work in Progress</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td><img src="assets/images/users/avatar-3.jpg" alt="table-user" class="mr-2 rounded-circle" height="24"> Durandana Jolicoeur</td>
                                                                <td>Coffee detail page - Main Page</td>
                                                                <td>21/07/2016</td>
                                                                <td>12/05/2018</td>
                                                                <td><span class="badge badge-danger-lighten">Pending</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td><img src="assets/images/users/avatar-4.jpg" alt="table-user" class="mr-2 rounded-circle" height="24"> Lucas Sabourin</td>
                                                                <td>Poster illustation design</td>
                                                                <td>18/03/2018</td>
                                                                <td>28/09/2018</td>
                                                                <td><span class="badge badge-success-lighten">Done</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td><img src="assets/images/users/avatar-6.jpg" alt="table-user" class="mr-2 rounded-circle" height="24"> Donatien Brunelle</td>
                                                                <td>Drinking bottle graphics</td>
                                                                <td>02/10/2017</td>
                                                                <td>07/05/2018</td>
                                                                <td><span class="badge badge-info-lighten">Work in Progress</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td><img src="assets/images/users/avatar-5.jpg" alt="table-user" class="mr-2 rounded-circle" height="24"> Karel Auberjo</td>
                                                                <td>Landing page design - Home</td>
                                                                <td>17/01/2017</td>
                                                                <td>25/05/2021</td>
                                                                <td><span class="badge badge-warning-lighten">Coming soon</span></td>
                                                            </tr>
    
                                                        </tbody>
                                                    </table>
                                                </div>
    
                                            </div> <!-- end tab-pane -->
                                            <!-- end about me section content -->
    
                                            <div class="tab-pane show" id="timeline">
    
                                                <!-- comment box -->
                                                <div class="border rounded mt-2 mb-3">
                                                    <form action="#" class="comment-area-box">
                                                        <textarea rows="3" class="form-control border-0 resize-none" placeholder="Write something...."></textarea>
                                                        <div class="p-2 bg-light d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i class="mdi mdi-account-circle"></i></a>
                                                                <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i class="mdi mdi-map-marker"></i></a>
                                                                <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i class="mdi mdi-camera"></i></a>
                                                                <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i class="mdi mdi-emoticon-outline"></i></a>
                                                            </div>
                                                            <button type="submit" class="btn btn-sm btn-dark waves-effect">Post</button>
                                                        </div>
                                                    </form>
                                                </div> <!-- end .border-->
                                                <!-- end comment box -->
    
                                                <!-- Story Box-->
                                                <div class="border border-light rounded p-2 mb-3">
                                                    <div class="media">
                                                        <img class="mr-2 rounded-circle" src="assets/images/users/avatar-3.jpg" alt="Generic placeholder image" height="32">
                                                        <div class="media-body">
                                                            <h5 class="m-0">Jeremy Tomlinson</h5>
                                                            <p class="text-muted"><small>about 2 minuts ago</small></p>
                                                        </div>
                                                    </div>
                                                    <p>Story based around the idea of time lapse, animation to post soon!</p>
    
                                                    <img src="assets/images/small/small-1.jpg" alt="post-img" class="rounded mr-1" height="60">
                                                    <img src="assets/images/small/small-2.jpg" alt="post-img" class="rounded mr-1" height="60">
                                                    <img src="assets/images/small/small-3.jpg" alt="post-img" class="rounded" height="60">
    
                                                    <div class="mt-2">
                                                        <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class="mdi mdi-reply"></i> Reply</a>
                                                        <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class="mdi mdi-heart-outline"></i> Like</a>
                                                        <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class="mdi mdi-share-variant"></i> Share</a>
                                                    </div>
                                                </div>
    
                                                <!-- Story Box-->
                                                <div class="border border-light rounded p-2 mb-3">
                                                    <div class="media">
                                                        <img class="mr-2 rounded-circle" src="assets/images/users/avatar-4.jpg" alt="Generic placeholder image" height="32">
                                                        <div class="media-body">
                                                            <h5 class="m-0">Thelma Fridley</h5>
                                                            <p class="text-muted"><small>about 1 hour ago</small></p>
                                                        </div>
                                                    </div>
                                                    <div class="font-16 text-center font-italic text-dark">
                                                        <i class="mdi mdi-format-quote-open font-20"></i> Cras sit amet nibh libero, in
                                                        gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                                                        purus odio, vestibulum in vulputate at, tempus viverra turpis. Duis
                                                        sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper
                                                        porta. Mauris massa.
                                                    </div>
    
                                                    <div class="mx-n2 p-2 mt-3 bg-light">
                                                        <div class="media">
                                                            <img class="mr-2 rounded-circle" src="assets/images/users/avatar-3.jpg" alt="Generic placeholder image" height="32">
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Jeremy Tomlinson <small class="text-muted">3 hours ago</small></h5>
                                                                Nice work, makes me think of The Money Pit.
    
                                                                <br>
                                                                <a href="javascript: void(0);" class="text-muted font-13 d-inline-block mt-2"><i class="mdi mdi-reply"></i> Reply</a>
    
                                                                <div class="media mt-3">
                                                                    <a class="pr-2" href="#">
                                                                        <img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt="Generic placeholder image" height="32">
                                                                    </a>
                                                                    <div class="media-body">
                                                                        <h5 class="mt-0">Thelma Fridley <small class="text-muted">5 hours ago</small></h5>
                                                                        i'm in the middle of a timelapse animation myself! (Very different though.) Awesome stuff.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
    
                                                        <div class="media mt-2">
                                                            <a class="pr-2" href="#">
                                                                <img src="assets/images/users/avatar-1.jpg" class="rounded-circle" alt="Generic placeholder image" height="32">
                                                            </a>
                                                            <div class="media-body">
                                                                <input type="text" id="simpleinput" class="form-control border-0 form-control-sm" placeholder="Add comment">
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="mt-2">
                                                        <a href="javascript: void(0);" class="btn btn-sm btn-link text-danger"><i class="mdi mdi-heart"></i> Like (28)</a>
                                                        <a href="javascript: void(0);" class="btn btn-sm btn-link text-muted"><i class="mdi mdi-share-variant"></i> Share</a>
                                                    </div>
                                                </div>
    
                                                <!-- Story Box-->
                                                <div class="border border-light p-2 mb-3">
                                                    <div class="media">
                                                        <img class="mr-2 rounded-circle" src="assets/images/users/avatar-6.jpg" alt="Generic placeholder image" height="32">
                                                        <div class="media-body">
                                                            <h5 class="m-0">Martin Williamson</h5>
                                                            <p class="text-muted"><small>15 hours ago</small></p>
                                                        </div>
                                                    </div>
                                                    <p>The parallax is a little odd but O.o that house build is awesome!!</p>
    
                                                    <iframe src="https://player.vimeo.com/video/87993762" height="300" class="img-fluid border-0"></iframe>
                                                </div>
    
                                                <div class="text-center">
                                                    <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-spin mdi-loading mr-1"></i> Load more </a>
                                                </div>
    
                                            </div>
                                            <!-- end timeline content-->
    
                                            <div class="tab-pane" id="settings">
            <div style="text-align: right">                        
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cargarprestacion" data-whatever="@mdo">Cargar Prestación</button>
              </div>
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