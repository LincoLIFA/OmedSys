@extends('index')
@section('card')               
        <div class="container-fluid">
         <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Gestion de Áreas Clínicas</h4>
                    </div>
                </div>
            </div>     
            <!-- end page title -->                 
        </div> <!-- container -->
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
                                        <th class="all">N° Áreas</th>
                                        <th>Nombre</th>
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
                                            {{$item->espNombre}}
                                        </td>
                                        
                                        <td>
                                            <div class="row">
                                            <a href="{{route('UpdateA', $item->id)}}" class="btn btn-primary mr-1"> <i class="far fa-edit"></i></a>
                                            <form method="post" action="{{route('DeleteA', $item->id)}}">
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