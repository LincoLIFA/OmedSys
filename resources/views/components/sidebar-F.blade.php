


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
                <i class="nav-icon fas fa-money-check-alt"></i>
                <p>
                Convenios
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('Registro-convenios')}}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registro de Convenios</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Agregar-convenios')}}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Agregar nuevo convenio</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link ">
                <i class="nav-icon far fa-credit-card"></i>
                <p>
                Opciones de Pago
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('RegistroL')}}" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Resgistro Op. de pago</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('AggLista')}}" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Agregar nueva opcion</p>
                        </a>
                    </li>
                </ul>     
            </li>
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-hand-holding-usd"></i>
                     <p>
                     Dctos. Por Caja
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('Citas')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Descuentos vigentes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Citas')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Agregar nuevo Descuento</p>
                    </a>
                </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-file-invoice-dollar"></i>
                <p>
                Aranceles
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('RegistroE')}}" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Registro de Aranceles</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('AggEspecialista')}}" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Agregar nuevo Arancel</p>
                        </a>
                    </li>
                </ul>     
            </li>
            <li class="nav-item has-treeview menu-open">
                <a href="#" class="nav-link ">
                <i class="nav-icon far fa-id-card"></i>
                <p>
                Honorarios
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('Registro-especialidades')}}" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Planilla de Honorarios</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('AggEspecialidades')}}" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Generar Pago</p>
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

  
