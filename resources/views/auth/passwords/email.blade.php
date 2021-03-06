@extends('layouts.app')

@section('content')

<div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">

                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="index.html">
                                <span><img src="{{asset ('images/logo2.png')}}" alt="" height="75"></span>
                                </a>
                            </div>
                            
                            <div class="card-body p-4">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                                </div>
                             @endif

                             <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">{{ __('RESTABLECER CONTRASEÑA') }}</h4>
                                    <p class="text-muted mb-4">Ingrese su dirección de correo electrónico y le enviaremos un mensaje con instrucciones para restablecer su contraseña.</p>
                                </div>
                                
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">{{ __('Correo electrónico') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary" type="submit">{{ __('Restablecer Contraseña') }}</button>
                                    </div>
                                </form>
                            </div>  
                        </div>


                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Regresa a <a href="{{route('login')}}" class="text-muted ml-1"><b>Inicio de sesión</b></a></p>
                            </div> 
                        </div>
                    </div> 
                </div>
            </div> 


<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-dark">
                <div class="card-header">{{ __('Enviar Password por E-mail') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Dirección E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Enviar correo de confirmación') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

@endsection
