@extends('finanzas.index')
@section('card')



<script type="text/javascript">
    $(document).ready( function () {
    $('#convenios').DataTable();
} );
</script>

<!-- cabecera de sección  -->
        <div class="page-title-box">
                <div class="page-title-right">
                                        
                </div>

                <h4 class="page-title">Registro de Convenios </h4>
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
                                                <a href="{{route('Agregar-convenios')}}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle mr-2"></i> Ingresar nuevo convenio</a>
                                            </div>
                                           
                                        </div>
                
                                        <div class="table-responsive">
                                            <table class="table table-centered w-100 dt-responsive nowrap display" id="convenios">
                                                <thead class="thead-light">
                                                    <tr>
                                                        
                                                        <th class="all">N° Convenio</th>
                                                        <th>Fecha</th>
                                                        <th>Empresa</th>
                                                        <th>% convenio</th>
                                                        <th>Observaciones</th>
                                                        <th>Contacto</th>
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
                                                           {{$item->fecha}}
                                                        </td>
                                                        <td>
                                                           {{$item->empresa}}
                                                        </td>
                                                        <td>
                                                           {{$item->descuento}}
                                                        </td>
                                                        <td>
                                                           {{$item->observacion}}
                                                        </td>
                                                        <td>
                                                           {{$item->contacto}}
                                                        </td>

                                                       
                                                        <td>
                                                            <div class="row">
                                                            <a href="{{route('Update-convenios', $item->id)}}" class="btn btn-primary mr-1"> <i class="far fa-edit"></i></a>
                                                            <form method="post" action="{{route('Delete-convenios', $item->id)}}">
                                                                    @method('DELETE') 
                                                                    @csrf
                                                              <button  class="btn btn-primary" type="submit"><i class="far fa-trash-alt"></i></button>
                                                            </form>
                                                            </div>
                                                        </td>
                                                       
                                                    </tr>
                                                    @endforeach();




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