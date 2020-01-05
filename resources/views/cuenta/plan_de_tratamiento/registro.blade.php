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
                            <a href="{{route('Agregar-Planes')}}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle mr-2"></i> Agregar Nuevo Plan</a>
                            </div>              
                            </div>
                            
                            <table class="table Tablas table-bordered table-striped">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="all">Nª</th>
                                        <th>Nombre del Plan</th>
                                        <th>Nombre Especialista</th>
                                        <th>Especialidad</th>
                                        <th>Arancel</th>
                                        <th>Action</th>
                                                            
                                    </tr>
                                 </thead>
                                 <tbody>
<<<<<<< HEAD
                                     @foreach ($result as $item)
                                         <tr>
                                    
                                     <td> <a href="">{{$item->id}}</a> </td> 
                                     <td> {{$item->nombre}}</td> 
                                     <td> {{$item->especialistas->medidentificacion}}</td>
                                     <td> {{$item->especialidades->espNombre}}</td>
                                     <td> 
                                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#plan-{{$item->id}}"> Ver Procedimientos</button>
                                   
                                 <!-- Modal --> 
=======
                                     <td> </td> 
                                     <td> </td> 
                                     <td> </td> 
                                     <td> </td> 
                                     <td
                                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                     </button>
                                 <!-- Modal --> 
                                 <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
                                 <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                 <div class="modal-header">
                                 <h5 class="modal-title">Modal title</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                </button>
                                 </div>
                                 <div class="modal-body">
                                 <p>Modal body text goes here.</p>
                                </div>
                               <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                             </div>
                             </div>
                             </td>

                                     <!--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        </div>-->
                             
>>>>>>> b1251578d741e06ca716b83339b4e8f65a491bba
                                
                                    <div class="modal fade" id="plan-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="{{$item->id}}-Plan" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Aranceles {{$item->nombre}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                  
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                 </td>
                                 <td>
                                    <div class="row">
                                        <a href="{{route('Actualizar-Planes', $item->id)}}" class="btn btn-primary mr-1"> <i class="far fa-edit"></i></a>
                                        <form method="post" action="{{route('Delete-Planes', $item->id)}}">
                                            @method('DELETE') 
                                            @csrf
                                            <button  class="btn btn-primary" type="submit"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </div>  
                                </td> 
                            </tr>
                        @endforeach
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
