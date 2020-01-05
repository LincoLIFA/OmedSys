@extends('cuenta.index')
@section('card')

                   
                    <div class="container-fluid"> 
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Gestion de Prestaciones</h4>
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
                            <h3 class="card-title">Registro de prestaciones vigentes</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                                                  
                            <table class="table Tablas table-bordered table-striped">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="all">N°</th>
                                        <th>Nombre del Plan</th>
                                        <th>Nombre Especialista</th>
                                        <th>Especialidad</th>
                                        <th>Pago</th>                 
                                    </tr>
                                 </thead>
                                 <tbody>
                                     <td> </td> 
                                     <td> </td> 
                                     <td> </td> 
                                     <td> </td> 
                                     <td
                                     <a class="btn btn-primary" href="#" role="button">Link</a>
                                     </td>
                                                         
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
