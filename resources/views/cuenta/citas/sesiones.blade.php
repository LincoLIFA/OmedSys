@extends('cuenta.index')
@section('card')

<!-- Fin de estilos de fullcalendar -->
 <!-- fullcalendar -->
       <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registro de Sesiones realizadas</h1>
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
    </section>


            <div class="modal fade" id="sesiones" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Registro de Sesion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="">
                        </div>
                      </div>
                      
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>

                  
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Registro de citas</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            
                            <table id="example2" class="table Tablas table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="all">N°</th>
                                        <th>Fecha</th>
                                        <th>RUT Paciente</th>
                                        <th>Paciente</th>
                                        <th>Estado</th>
                                        <th>Met. Confirm.</th>
                                        <th>Validar</th>
                                    </tr>
                                </thead>
                            <tbody>
                                @foreach($result as $item2)
                                <tr>
                                    <td>
                                        <a href="">{{$item2->id}}</a>
                                    </td>
                                    <td>
                                      {{ \Carbon\Carbon::parse($item2->events->start)->format('d/m/Y')}} 
                                    </td>
                                    <td>
                                      <a data-toggle="modal" data-target="#sesiones" class="text-success">{{$item2->pacientes->pacidentificacion}}</a>
                                  </td>
                                                                    
                                    <td>
                                        {{$item2->pacientes->pacnombre}}  {{$item2->pacientes->pacapellidoP}}
                                    
                                    </td>
                                    <td>
                                     {{$item2->estado}}
                                    </td>
                                    <td>
                                        {{$item2->confirmacion}}
                                    </td>
                                    <td>
                                        <div class="row">
                                            <a href="{{route('UpdateC', $item2->id)}}" class="btn btn-primary mr-1"> <i class="far fa-edit"></i></a>
                                            <form method="post" action="{{route('DeleteC', $item2->id)}}">
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