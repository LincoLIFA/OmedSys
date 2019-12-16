


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
            <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link active">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                Control de Reserva
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('Citas')}}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registro de Citas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Agregar-citas-vista')}}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Agregar citas</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-clipboard-list"></i>
                <p>
                Lista de Espera
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('RegistroL')}}" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Registro de Lista</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('AggLista')}}" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Agregar a Lista</p>
                        </a>
                    </li>
                </ul>     
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                     <p>
                        Pacientes
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('RegistroP')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registro de Pacientes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('AggPacientes')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Agregar Pacientes</p>
                    </a>
                </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-user-md"></i>
                <p>
                Nomina de Especialistas
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('RegistroE')}}" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Registro de Especialistas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('AggEspecialista')}}" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Agregar Especialista</p>
                        </a>
                    </li>
                </ul>     
            </li>
            <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-clinic-medical"></i>
                <p>
                Áreas Clínicas
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('Registro-especialidades')}}" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Registro de áreas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('AggEspecialidades')}}" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Agregar nuevas áreas</p>
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

  
