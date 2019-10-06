<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>OmedSys</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta name="csrf-token" content="{{csrf_token() }}"  />
        
       <!-- App favicon -->
        <link rel="shortcut icon"  href="{{asset('images/logo.png')}}"/>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- fullcalendar party css -->
        <link  href="{{asset('fullcalendar4/packages/core/main.css')}}" rel="stylesheet"/>
        <link  href="{{asset('fullcalendar4/packages/daygrid/main.css')}}" rel="stylesheet"/>
        <link  href="{{asset('fullcalendar4/packages/timegrid/main.css')}}" rel="stylesheet"/>
        <link  href="{{asset('fullcalendar4/packages/list/main.css')}}" rel="stylesheet"/>
        <link  href="{{asset('fullcalendar4/packages/timeline/main.min.css')}}" rel='stylesheet' />
        <link  href="{{asset('fullcalendar4/packages/resource-timeline/main.min.css')}}" rel='stylesheet' />
        
        <script src="{{asset('fullcalendar4/packages/core/main.js')}}"></script>
        <script src="{{asset('fullcalendar4/packages/interaction/main.js')}}"></script>
        <script src="{{asset('fullcalendar4/packages/daygrid/main.js')}}"></script>
        <script src="{{asset('fullcalendar4/packages/timegrid/main.min.js')}}"></script>
        <script src="{{asset('fullcalendar4/packages/list/main.js')}}"></script>
        <script src="{{asset('fullcalendar4/packages/timeline/main.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/es.js" integrity="sha256-bETP3ndSBCorObibq37vsT+l/vwScuAc9LRJIQyb068=" crossorigin="anonymous"></script>

        
        <script src="{{asset('fullcalendar4/packages/resource-common/main.js')}}"></script>
        <script src="{{asset('fullcalendar4/packages/resource-timeline/main.js')}}"></script>  
              
   
         
        <link  href="{{asset('plugins/bootstrap/css/vendor/responsive.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
         <link  href="{{asset('fullcalendar/packages/core/main.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('plugins/bootstrap/css/vendor/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css" />
        
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
	    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	
        <!-- third party css end -->
        <!-- App css -->
       
        <link href="{{asset('plugins/bootstrap/css/vendor/app.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('fullcalendar/packages/daygrid/main.css')}}" rel="stylesheet" type="text/css" />

   
    </head>
    <body>
        <!-- Begin page -->
        <div class="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu overflow-auto ">

                <div class="slimscroll-menu " id="left-side-menu-container">

                    <!-- LOGO -->
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                           <img src="{{asset ('images/logo.png')}}" alt="..." height="70" class="rounded-circle"> 
                        </span>
                        <span class="logo-sm">
                            <img src="{{asset ('images/logo.png')}}" alt="..." height="70" class="rounded-circle"> 
                        </span>
                    </a>

                    <!--- Sidemenu -->
                    <ul class="metismenu side-nav ">

                        <li class="side-nav-title side-nav-item">Navigation</li>

                    
                        
                         <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                  <i class="far fa-calendar-alt"></i>
                                <span class="badge  float-right"><i class="fas fa-angle-right"></i></span>
                                <span> Reserva </span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{url('Citas/citas')}}">Resgistro de Citas</a>
                                </li>
                                <li>
                                    <a href="{{url('Citas/aggcitas')}}">Agregar citas</a>
                                </li>
                               <!-- <li>
                                    <a href="{{url('Citas/actcitas')}}">Modificar Citas</a>
                                </li>-->
                            </ul>
                        </li>
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                             <i class="fas fa-clipboard-list"></i>
                                <span class="badge  float-right"><i class="fas fa-angle-right"></i></span>
                                <span> Lista de Espera </span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{url('Lista/lista')}}">Resgistro de Lista</a>
                                </li>
                                <li>
                                    <a href="{{url('Lista/agglista')}}">Agregar a Lista</a>
                                </li>
                               <!-- <li>
                                    <a href="{{url('Citas/actcitas')}}">Modificar Citas</a>
                                </li>-->
                            </ul>
                        </li>
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                 <i class="fas fa-user-md"></i>
                                <span class="badge  float-right"><i class="fas fa-angle-right"></i></span>
                                <span> Especialistas</span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{url('Especialistas/Registro')}}">Resgistro de especialistas</a>
                                </li>
                                <li>
                                    <a href="{{url('Especialistas/New')}}">Agregar especialistas</a>
                                </li>
                               <!-- <li>
                                    <a href="{{url('Especialistas/Update')}}">Modificar especialistas</a>
                                </li> -->
                            </ul>
                        </li>
                         <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="fas fa-clinic-medical"></i>
                                <span class="badge  float-right"><i class="fas fa-angle-right"></i></span>
                                <span> Áreas </span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{url('Especialidades/Registro')}}">Registro de especialidades</a>
                                </li>
                                <li>
                                    <a href="{{url('Especialidades/New')}}">Agregar Especialidadess</a>
                                </li>
                               <!-- <li>
                                    <a href="{{url('Especialidades/Update')}}">Modificar Especialidades</a>
                                </li>-->
                            </ul>
                        </li>
                         <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                 <i class="fas fa-user"></i>
                                <span class="badge  float-right"><i class="fas fa-angle-right"></i></span>
                                <span> Pacientes</span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="{{url('Pacientes/Registro')}}">Registro de pacientes</a>
                                </li>
                                <li>
                                    <a href="{{url('Pacientes/New')}}">Agregar pacientes</a>
                                </li>
                                <!--<li>
                                    <a href="{{url('Pacientes/Update')}}">Modificar pacientes</a>
                                </li>-->
                            </ul>
                        </li>
                         

                       
                        
            
                    </ul>

                    <!-- Help Box 
                    <div class="help-box text-white text-center">
                        <a href="javascript: void(0);" class="float-right close-btn text-white">
                            <i class="mdi mdi-close"></i>
                        </a>
                        <img src="assets/images/help-icon.svg" height="90" alt="Helper Icon Image" />
                        <h5 class="mt-3">Unlimited Access</h5>
                        <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                        <a href="javascript: void(0);" class="btn btn-outline-light btn-sm">Upgrade</a>
                    </div>
                     end Help Box -->
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Topbar Start -->
                    <div class="navbar-custom ">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                        <!-- Botton de Gestion de Citas-->
                        <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                    <i class="far fa-calendar-check"></i>
                                    </span>
                                    <span>
                                        <span class="account-user-name">Gestion de citas</span>
                                        <span class="account-position"> Calendario y reserva</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Citas médicas</h6>
                                    </div>
                                    
                                    <a class="dropdown-item" href="{{ route('Home.C') }}">
                                    <i class="far fa-calendar-alt"></i>
                                     Gestion de Citas
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{url('Citas/citas')}}"><i class="fas fa-angle-right"></i>   Reserva</a>
                                    <a class="dropdown-item" href="{{url('Lista/lista')}}"><i class="fas fa-angle-right"></i>   Lista de Espera</a>
                                    <a class="dropdown-item" href="{{url('Especialistas/Registro')}}"><i class="fas fa-angle-right"></i>   Especialistas</a>
                                    <a class="dropdown-item" href="{{url('Especialidades/Registro')}}"><i class="fas fa-angle-right"></i>   Especialidades</a>
                                    <a class="dropdown-item" href="{{url('Pacientes/Registro')}}"><i class="fas fa-angle-right"></i>   Pacientes</a>

                                
                                </div>
                            </li>
                            <!-- Fin botton de Gestion de Citas-->
<!-- -------------------------------------------------------------------------------------------------------------------------------- -->

                            <!-- Botton de Gestion Financiera-->

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                    <i class="far fa-calendar-check"></i>
                                    </span>
                                    <span>
                                        <span class="account-user-name">Gestion Financiera</span>
                                        <span class="account-position"> Convenios y Aranceles</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Finanzas</h6>
                                    </div>
                                    
                                    <a class="dropdown-item" href="{{ route('Home.C') }}">
                                    <i class="fas fa-dollar-sign"></i>
                                     Modulo Financiero
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{url('Citas/citas')}}"><i class="fas fa-angle-right"></i>   Reserva</a>
                                    <a class="dropdown-item" href="{{url('Lista/lista')}}"><i class="fas fa-angle-right"></i>   Lista de Espera</a>
                                    <a class="dropdown-item" href="{{url('Especialistas/Registro')}}"><i class="fas fa-angle-right"></i>   Especialistas</a>
                                    <a class="dropdown-item" href="{{url('Especialidades/Registro')}}"><i class="fas fa-angle-right"></i>   Especialidades</a>
                                    <a class="dropdown-item" href="{{url('Pacientes/Registro')}}"><i class="fas fa-angle-right"></i>   Pacientes</a>

                                
                                </div>
                            </li>



                            <!-- Fin Botton de Gestion Financiera-->
<!-- ------------------------------------------------------------------------------------------------------ -->
                           
                           
                           
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <i class="fas fa-user-secret"></i>
                                    </span>
                                    <span>
                                        <span class="account-user-name">Omed Group</span>
                                        <span class="account-position"> </span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                  
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                       <!-- <div class="app-search">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="mdi mdi-magnify"></span>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Buscar</button>
                                    </div>
                                </div>
                            </form>
                        </div>-->
                    </div>
                    <!-- end Topbar -->

                </div>
                <!-- content -->
                     
                @yield ('card')
                        

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2018 - 2019 © Linco Fernandez Geekn Tecnology 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="https://www.linkedin.com/in/linco-lifa">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <div class="slimscroll-menu rightbar-content">

                <!-- Settings -->
                <hr class="mt-0" />
                <h5 class="pl-3">Basic Settings</h5>
                <hr class="mb-0" />

                <div class="p-3">
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="notifications-check" checked>
                        <label class="custom-control-label" for="notifications-check">Notifications</label>
                    </div>

                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="api-access-check">
                        <label class="custom-control-label" for="api-access-check">API Access</label>
                    </div>

                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="auto-updates-check" checked>
                        <label class="custom-control-label" for="auto-updates-check">Auto Updates</label>
                    </div>

                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="online-status-check" checked>
                        <label class="custom-control-label" for="online-status-check">Online Status</label>
                    </div>

                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="auto-payout-check">
                        <label class="custom-control-label" for="auto-payout-check">Auto Payout</label>
                    </div>

                </div>


                <!-- Timeline -->
                <hr class="mt-0" />
                <h5 class="pl-3">Recent Activity</h5>
                <hr class="mb-0" />
                <div class="pl-2 pr-2">
                    <div class="timeline-alt">
                        <div class="timeline-item">
                            <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                            <div class="timeline-item-info">
                                <a href="#" class="text-info font-weight-bold mb-1 d-block">You sold an item</a>
                                <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                                <p class="mb-0 pb-2">
                                    <small class="text-muted">5 minutes ago</small>
                                </p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                            <div class="timeline-item-info">
                                <a href="#" class="text-primary font-weight-bold mb-1 d-block">Product on the Bootstrap Market</a>
                                <small>Dave Gamache added
                                    <span class="font-weight-bold">Admin Dashboard</span>
                                </small>
                                <p class="mb-0 pb-2">
                                    <small class="text-muted">30 minutes ago</small>
                                </p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                            <div class="timeline-item-info">
                                <a href="#" class="text-info font-weight-bold mb-1 d-block">Robert Delaney</a>
                                <small>Send you message
                                    <span class="font-weight-bold">"Are you there?"</span>
                                </small>
                                <p class="mb-0 pb-2">
                                    <small class="text-muted">2 hours ago</small>
                                </p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <i class="mdi mdi-upload bg-primary-lighten text-primary timeline-icon"></i>
                            <div class="timeline-item-info">
                                <a href="#" class="text-primary font-weight-bold mb-1 d-block">Audrey Tobey</a>
                                <small>Uploaded a photo
                                    <span class="font-weight-bold">"Error.jpg"</span>
                                </small>
                                <p class="mb-0 pb-2">
                                    <small class="text-muted">14 hours ago</small>
                                </p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                            <div class="timeline-item-info">
                                <a href="#" class="text-info font-weight-bold mb-1 d-block">You sold an item</a>
                                <small>Linco Fernandez Developer</small>
                                <p class="mb-0 pb-2">
                                    <small class="text-muted">1 day ago</small>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="rightbar-overlay"></div>
        <!-- /Right-bar -->

     
     
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    </body>

</html>