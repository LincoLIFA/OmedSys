@extends('index')
@section('card')

  <!-- Start Content-->
                   
    <div class="container-fluid">
                        
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gestión de especialistas </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Advanced Form</li>
                    </ol>
                </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
                        <!-- end page title -->
                        
                         <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Registro de Áreas</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-sm-4">
                                    <a href="{{url('Citas/aggcitas')}}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle mr-2"></i> Crear nueva cita</a>
                                </div>              
                            </div>
                            <table class="table Tablas table-bordered table-striped">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="all">N° </th>
                                        <th>RUT</th>
                                        <th>Identificacion</th>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>Especialidad</th>
                                        <th>telefono</th>
                                        <th>Correo</th>
                                        <th>Acción</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($result as $item)
                                    <tr>
                                        <td>
                                            <a href="">{{$item->id}}</a>
                                        </td>
                                        <td>
                                            {{$item->rut_med}}
                                        </td>
                                        <td>
                                            
                                            <a href="{{route('PerfilE', $item->id)}}" class="text-success">{{$item->medidentificacion}} </a>
                                        </td>
                                        <td>
                                            {{$item->mednombres}}
                                        </td>
                                        <td>
                                            {{$item->medapellidos}}
                                        </td>
                                        <td>
                                        {{$item->especialidades->espNombre}}
                                        </td>
                                        <td>
                                            {{$item->medtelefono}}
                                        </td>
                                        <td>
                                            {{$item->medcorreo}}
                                        </td>
                                        <td>
                                            <div class="row">
                                            <a href="{{route('UpdateE', $item->id)}}" class="btn btn-primary mr-1"> <i class="far fa-edit"></i></a>
                                            <form method="post" action="{{route('DeleteE', $item->id)}}">
                                                    @method('DELETE') 
                                                    @csrf
                                                <button  class="btn btn-primary" type="submit"><i class="far fa-trash-alt"></i></button>
                                            </form>
                                            </div>
                                            
                                        </td>
                                        
                                    </tr>
                                    @endforeach()
                                </tbody>
                            </table>
                        </div>
                         <!-- /.card-body -->
                    </div>
                     <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->  
@endsection