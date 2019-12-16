

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <!-- Botton de Gestion de Citas-->
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                aria-expanded="false">
                <span class="account-user-avatar"> 
                <i class="far fa-calendar-check"></i>
                </span>
                <span>
                    <span class="account-user-name">Gestion de Citas</span>
                    
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                <!-- item-->
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Control administrarivo</h6>
                </div>
                
                <a class="dropdown-item" href="{{ route('Home.C') }}">
                <i class="far fa-calendar-alt"></i>
                Gestion de Citas
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('Citas')}}"><i class="fas fa-angle-right"></i>   Reserva</a>
                <a class="dropdown-item" href="{{route('RegistroL')}}"><i class="fas fa-angle-right"></i>   Lista de Espera</a>
                <a class="dropdown-item" href="{{route('RegistroP')}}"><i class="fas fa-angle-right"></i>   Pacientes</a>
                <a class="dropdown-item" href="{{route('RegistroE')}}"><i class="fas fa-angle-right"></i>   Especialistas</a>
                <a class="dropdown-item" href="{{route('Registro-especialidades')}}"><i class="fas fa-angle-right"></i>   Especialidades</a>
            </div>
        </li>
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                aria-expanded="false">
                <span class="account-user-avatar"> 
                <i class="fas fa-laptop-medical"></i>                                   
                </span>
                <span>
                    <span class="account-user-name">Gestion Clinica</span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                <!-- item-->
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Ficha medica</h6>
                </div>
                
                <a class="dropdown-item" href="{{ route('Home.F') }}">
                <i class="fas fa-notes-medical"></i>
                Modulo Financiero
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('Registro-convenios')}}"><i class="fas fa-angle-right"></i>   Sesiones realizadas</a>
                <a class="dropdown-item" href="{{url('actualizar-convenios')}}"><i class="fas fa-angle-right"></i>   Fichas medicas</a>
                <a class="dropdown-item" href="{{url('Especialistas/Registro')}}"><i class="fas fa-angle-right"></i>   Prestaciones</a>
                <a class="dropdown-item" href="{{url('Especialidades/Registro')}}"><i class="fas fa-angle-right"></i>   Planes de tratamientos</a>

            
            </div>
        </li>
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                aria-expanded="false">
                <span class="account-user-avatar"> 
                <i class="fas fa-chart-line"></i>                                   
                </span>
                <span>
                    <span class="account-user-name">Gestion Financiera</span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                <!-- item-->
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Finanzas</h6>
                </div>
                
                <a class="dropdown-item" href="{{ route('Home.F') }}">
                <i class="fas fa-dollar-sign"></i>
                Modulo Financiero
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('Registro-convenios')}}"><i class="fas fa-angle-right"></i>   Convenios</a>
                <a class="dropdown-item" href="{{url('actualizar-convenios')}}"><i class="fas fa-angle-right"></i>   Aranceles</a>
                <a class="dropdown-item" href="{{url('Especialistas/Registro')}}"><i class="fas fa-angle-right"></i>   Opciones de pago</a>
                <a class="dropdown-item" href="{{url('Especialidades/Registro')}}"><i class="fas fa-angle-right"></i>   Dsctos por Caja</a>
                <a class="dropdown-item" href="{{url('Pacientes/Registro')}}"><i class="fas fa-angle-right"></i>   Honorarios</a>

            
            </div>
        </li>
        
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                aria-expanded="false">
                <span class="account-user-avatar"> 

                    <img src="{{Storage::url(auth()->user()->avatar)}}" width="30px" height="30px" class="user-image" alt="User Image">
                        
                </span>
                <span>
                    <span class="account-user-name">{{auth()->user()->name}}</span>
                    <span class="account-position"> </span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                <!-- item-->
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Bienvenido</h6>
                </div>
                <a class="dropdown-item" href="{{route('Perfil_admin')}}">Perfil de cuenta</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Cerrar Sesion') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            
            </div>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

