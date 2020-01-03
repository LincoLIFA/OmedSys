@extends('index')
@section('card')


    <!-- Main content -->
    <section class="content my-2">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-3">
      
                  <!-- Profile Image -->
                  <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                      <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                      src="{{Storage::url(auth()->user()->avatar)}}"
                             alt="User profile picture">
                      </div>
      
                      <h3 class="profile-username text-center"> {{ auth()->user()->name }}</h3>
      
                      <p class="text-muted text-center">Administrador de Plataforma</p>
                      <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#avatar_modal">
                         <b> Modificar imagen de perfil</b>
                        </button>
                     
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
      
                  <!-- About Me Box -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Usuario administrador</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <strong><i class="fas fa-user-cog mr-1"></i>Distribucion de permisos</strong>
                      <p class="text-muted">
                       OmedSys permite la manipulación de un administrador de la plataforma con acceso a todo el sistema.
                      </p>
                      <hr>
                    </div>
                    <!-- /.card-body -->
                  </div>
                    <!-- Cambiar Imagen de perfil -->
                      <!-- Modal -->
                      <div class="modal fade" id="avatar_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Cargar nueva foto de perfil</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form  id="modificar_avatar_user" action="{{route('ActualizarU',auth()->user()->id)}}" method="post"  enctype="multipart/form-data">
                                      @method('PUT')                                            
                                      @csrf
                                  <div class="form-row">
                                      <div class="col">
                                          <label for="avatar1">Imagen de perfil</label>
                                          <input type="file" class="form-control" name="avatar" >
                                          <small id="telefonoHelp" class="form-text text-muted">Nota: Puede ingresar de forma opcional una imagen de perfil</small>
                                      </div>
                                  </div>					
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                              <a class="btn btn-primary" href="{{route('ActualizarU',auth()->user()->id)}}"
                                 onclick="event.preventDefault();
                                document.getElementById('modificar_avatar_user').submit();">
                                Aceptar
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>




                  <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                      <div class="card-header pt-4 pb-4 text-center bg-primary">
                          <a href="index.html">
                          <span><img src="{{Storage::url(auth()->user()->avatar)}}" alt="Imagen de Perfil" class="profile-user-img img-fluid img-circle"></span>
                          </a>
                      </div>
                      <div class="card-body p-4">
                        @if (session('status'))
                          <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                          </div>
                        @endif

                        <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                          <div class="text-center w-75 m-auto">
                                <h4 class="text-dark-50 text-center mt-0 font-weight-bold">{{ __('CAMBIAR CONTRASEÑA') }}</h4>
                                <p class="text-muted mb-4">Ingrese una nueva contraseña para poder iniciar sesión.</p>
                          </div>

                          <div class="form-group">
                            <label for="password">{{ __('Nueva Contraseña') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Ingresa una contraseña" name="password" required autocomplete="new-password">

                            @error('Contraseña')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="password-confirm">{{ __('Confirma Nueva Contraseña') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repite la contraseña" required autocomplete="new-password">
                          </div>

                          <div class="form-group text-center mb-0">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-user-plus"></i>
                                {{ __('Actualizar Contraseña') }}
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
     </section>
          <!-- /.content -->

@endsection