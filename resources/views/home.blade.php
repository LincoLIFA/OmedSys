@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h1>tu rol es: </h1>
                    @if(@Auth::user()->hasRole('Admin'))
                        <h2>Eres un admin</h2>

                    
                        @else                    
                        <h2>No eres admin</h2>
                       
                    @endif
                    
                    
                    
                        

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
