@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card">
                <!-- Logo -->
                <div class="card-header pt-4 pb-4 text-center bg-primary">                   
                    <span><img src="{{asset ('images/logo2.png')}}" alt="" height="75"> <!--<H3 style="color:#FFFFFF";> Inicio de Sesión <H3> --> </span>        
                </div>
                <div class="card-body p-4">                   
                    <div class="text-center w-75 m-auto">
                        <h4 class="text-dark-50 text-center mt-0 font-weight-bold">INICIA SESIÓN</h4>
                        <p class="text-muted mb-4">Ingresa tú dirección de correo electrónico y contraseña para acceder al panel de administrador.</p>
                    </div> 
                    <!-- Formulario de Login-->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="emailaddress">{{ __('Direccion de Correo') }}</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Ingresa tu correo electrónico" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <a href="{{ route('password.request') }}" class="text-muted float-right"><small>{{ __('¿Olvidaste tu contraseña?') }}</small></a>
                            <label for="password">{{ __('Contraseña') }}</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Ingresa tu contraseña" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif        
                        </div>
                        <div class="form-group mb-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" id="checkbox-signin"{{ old('remember') ? 'checked' : '' }}> 
                                <label class="custom-control-label" for="checkbox-signin">{{ __('Recuerdame') }}</label>
                            </div>
                        </div>
                        <div class="form-group mb-0 text-center">
                            <button class="btn btn-primary" type="submit"> <i class="fas fa-user"></i>{{ __('Login') }} </button>
                        </div>
                    </form>
                </div> 
            </div>
        </div> 
    </div>
</div> 
@endsection


