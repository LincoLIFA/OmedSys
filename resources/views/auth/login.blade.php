@extends('layouts.app')

@section('content')

<div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">

                            <!-- Logo -->
<<<<<<< HEAD
                            <div class="card-header pt-4 pb-4 text-center text-light bg-primary">
                            
                                <a href="index.html">
                                    <span><img src="{{asset ('images/logo.png')}}" alt="..." height="100%" class="rounded-circle"> </span>
                                </a>
=======
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                           
                                    <span><img src="{{asset ('images/logo2.png')}}" alt="" height="75"> <!--<H3 style="color:#FFFFFF";> Inicio de Sesión <H3> --> </span>
                            
>>>>>>> seba
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
<<<<<<< HEAD
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Ingresa a OmedSys</h4>
                                    <p class="text-muted mb-4">Ingresa tu email y contraseña para acceder al panel de administraciòn</p>
=======
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">INICIA SESIÓN</h4>
                                    <p class="text-muted mb-4">Ingresa tú dirección de correo electrónico y contraseña para acceder al panel de administrador.</p>
>>>>>>> seba
                                </div>
                                
                                <form method="POST" action="{{ route('login') }}">
                                @csrf

                                    <div class="form-group">
<<<<<<< HEAD
                                        <label for="emailaddress">{{ __('Direccion de E-mail') }}</label>
                                        <input id="email" type="email" placeholder="Ingresa tu email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <a href="{{ route('password.request') }}" class="text-muted float-right"><small>{{ __('¿Olvidaste tu contraseña?') }}</small></a>
                                        <label for="password">{{ __('Contraseña') }}</label>
                                        <input id="password" type="password"  placeholder="Ingresa tu contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>


                                         @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
=======
                                        <label for="emailaddress">Dirección de Correo</label>
                                        <input class="form-control" type="email" id="emailaddress" required="" placeholder="Ingresa tu correo electrónico">
                                    </div>

                                    <div class="form-group">
                                        <a href="pages-recoverpw.html" class="text-muted float-right"><small>Olvidaste tú contraseña?</small></a>
                                        <label for="password">Contraseña</label>
                                        <input class="form-control" type="password" required="" id="password" placeholder="Ingresa tu contraseña">
>>>>>>> seba
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
<<<<<<< HEAD
                                        <input type="checkbox" name="remember"  class="custom-control-input" id="checkbox-signin"  {{ old('remember') ? 'checked' : '' }}> 
                                            <label class="custom-control-label" for="checkbox-signin">{{ __('Recuerdame') }}</label>
=======
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked="">
                                            <label class="custom-control-label" for="checkbox-signin">Recuerdame</label>
>>>>>>> seba
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
<<<<<<< HEAD
                                        <button class="btn btn-primary" type="submit"> <i class="fas fa-user"></i>
                                    {{ __('Login') }}</button>
                                    </div>

                                </form>
                   <!-- <form method="POST" action="{{ route('login') }}">
=======
                                        <button class="btn btn-primary" type="submit"> Ingresar </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">No tienes una cuenta? <a href="pages-register.html" class="text-muted ml-1"><b>Registrate</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>

<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card bg-dark text-white">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
>>>>>>> seba
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Direccion de E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Recuerdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-user"></i>
                                    {{ __('Login') }}
                                </button>
                                

                                <a class="btn btn-danger" href="{{ route('password.request') }}">
                                    {{ __('¿Olvidaste tu contraseña?') }}
                                </a>
                                
                            </div>
                        </div>
                        
                    </form>-->



                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->


                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
@endsection


