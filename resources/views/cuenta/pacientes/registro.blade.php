@extends('cuenta.index')
@section('card')

                   
                    <div class="container-fluid"> 
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Gestion de Pacientes</h4>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            
                            <table class="table Tablas table-bordered table-striped">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="all">N°</th>
                                        <th>RUT</th>
                                        <th>Nombre</th>
                                        <th>Apellidos Paterno</th>
                                        <th>Apellidos Materno</th>
                                        <th>Fecha N</th>
                                        <th>Sexo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($result as $item)
                                    <tr>
                                        <td>
                                            <a href="">{{$item->pacientes->id}}</a>
                                        </td>
                                        <td>
                                            <a href="{{route('PerfilP_ESP', $item->pacientes->id)}}" class="text-success">{{$item->pacientes->pacidentificacion}} </a>
                                        </td>
                                        <td>
                                            {{$item->pacientes->pacnombre}} 
                                        </td>
                                        <td>
                                            {{$item->pacientes->pacapellidoP}} 
                                        </td>
                                        <td>
                                            {{$item->pacientes->pacapellidoM}}
                                        </td>
                                        <td>
                                            {{$item->pacientes->pacfechaN}}
                                            
                                        </td>
                                        <td>
                                            {{$item->pacientes->pacsexo}}
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
