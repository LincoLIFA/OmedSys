@extends('layouts.app')

@section('content')
<!
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-white">
                <div class="card-header">{{ __('Verifica tu dirección de correo') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un link de verificacion fue enviado a tu correo') }}
                        </div>
                    @endif

                    {{ __('Antes de proceder, por favor verifica tu correo para obtener el link') }}
                    {{ __('Si no has recibido el link') }}, <a href="{{ route('verification.resend') }}">{{ __('Clic para reenviar la verificación') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
