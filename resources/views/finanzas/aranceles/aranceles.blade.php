@extends('finanzas.index')
@section('card')



<!-- cabecera de sección  -->
        <div class="page-title-box">
                <div class="page-title-right">
                                        
                </div>

                <h4 class="page-title">Registro de Aranceles</h4>
        </div>

<!-- fin de caebcera de sección -->
<!-- Tabla de citas  -->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-4">
                                                <a href="{{route('Agregar-Aranceles')}}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle mr-2"></i> Ingresar nuevo Arancel</a>
                                            </div>
                                           
                                        </div>
                
                                        <div class="table-responsive">
                                            <table class="table Tablas table-centered w-100 dt-responsive nowrap display" id="convenios">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th class="all">N°</th>
                                                        <th>Procedimiento </th>
                                                        <th>Precio</th>
                                                        <th>Comentario</th> 
                                                        <th>Especialista</th> 
                                                        <th>Especialidad</th> 
                                                        <th>Accion</th>                                                        
                                                    </tr>
                                                </thead>

                                         
                                                <tbody>
                                                @foreach($result as $item)
                                                    <tr>
                                                        <td>
                                                            <a href="">{{$item->id}}</a>
                                                        </td>
                                                        
                                                        <td>
                                                           {{$item->procedimientos}}
                                                        </td>
                                                        <td>
                                                            {{$item->precios}}
                                                         </td>
                                                         <td>
                                                            {{$item->comentarios}}
                                                         </td>
                                                        <td>
                                                           {{$item->especialistas->medidentificacion}}
                                                        </td>
                                                        <td>
                                                            {{$item->especialidades->espNombre}}
                                                         </td>
                                                        <td>
                                                            <div class="row">
                                                            <a href="{{route('Update-Aranceles', $item->id)}}" class="btn btn-primary mr-1"> <i class="far fa-edit"></i></a>
                                                            <form method="post" action="{{route('Delete-Aranceles', $item->id)}}">
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
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->        
                                             
                    </div> <!-- container -->


<!-- Fin de tabla de citas -->
              
@endsection