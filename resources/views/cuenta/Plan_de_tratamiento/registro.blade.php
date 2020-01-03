@extends('cuenta.index')
@section('card')

                   
                    <div class="container-fluid"> 
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Gestion de Planes</h4>
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
                            <h3 class="card-title">Registro de planes vigentes</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-4">
                            <a href="{{url('Especialidades/New')}}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle mr-2"></i> Agregar Nuevo Plan</a>
                            </div>              
                            </div>
                            
                            <table class="table Tablas table-bordered table-striped">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="all">#ID</th>
                                        <th>Nombre del Plan</th>
                                        <th>Nombre Especialista</th>
                                        <th>Especialidad</th>
                                        <th>Arancel</th>
                                                            
                                    </tr>
                                 </thead>
                                 <tbody>
                                     <td> </td> 
                                     <td> </td> 
                                     <td> </td> 
                                     <td> </td> 
                                     <td
                                     <button type="button" class="btn btn-primary mr-1" data-toggle="modal" data-target="#exampleModal">
                                     </button>
                                 <!-- Modal --> 
                                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                      <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Aranceles</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                      </button>
                                      </div>
                                      <div class="modal-body">
                                          ...
                                    </div>
                                    <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                   <button type="button" class="btn btn-primary">Guardar</button>
                               </div>
                           </div>
                        </div>
                        </div>
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
