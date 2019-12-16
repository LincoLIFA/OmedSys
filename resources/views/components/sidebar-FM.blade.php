


 <!-- Main Sidebar Container -->
 <aside class="main-sidebar  sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
        <span class="logo-sm">
            <img src="{{asset ('images/logo.png')}}" 
            alt="Omed Group"
            height="50"
           class="brand-image img-circle elevation-3"
           style="opacity: .8"> 
           <span class="brand-text font-weight-light">OmedSys v3.0</span>
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
                <img src="{{Storage::url(auth()->user()->avatar)}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="{{route('Perfil_admin')}}" class="d-block">{{auth()->user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-legacy nav-child-indent nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview ">
                <a href="#" class="nav-link ">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                Control de Reserva
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{route ('Citas_ESP')}}" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registro de citas agendadas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route ('Sesiones_ESP')}}" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sesiones realizadas</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                     <p>
                        Mis pacientes
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route ('Pacientes_ESP')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registro de Pacientes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route ('PerfilP_ESP')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ficha medica por paciente</p>
                    </a>
                </ul>
          </li>
          <li class="nav-item has-treeview ">
                <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-list-ol"></i>
                <p>
                Planes de tratamientos
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Registro de Planes vigentes</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Agregar nuevo Plan</p>
                        </a>
                    </li>
                </ul>     
            </li>
            <li class="nav-item has-treeview ">
                <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-file-invoice"></i>
                <p>
                Prestaciones
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Prestaciones emitidas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Estado de pago</p>
                        </a>
                    </li>
                </ul>     
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  
