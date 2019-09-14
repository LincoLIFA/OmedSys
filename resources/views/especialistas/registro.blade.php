@extends('index')
@section('card')
<script type="text/javascript">
    $(document).ready( function () {
    $('#especialistas').DataTable();
} );
</script>

  <!-- Start Content-->
                   
                         <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                       Planilla de Especialistas
                                    </div>
                                    <h4 class="page-title">Gestion de Especialistas</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-centered w-100  dt-responsive nowrap" id="especialistas">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th class="all">N° Pro</th>
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
                                                           {{$item->medespecialidad}}
                                                          
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
                                                    @endforeach();
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->

                                
                            </div>
                            <!-- end col-12 -->
                        </div> <!-- end row -->
                        
                    </div> <!-- container -->
                     
                
                                        
                                
                           

              
@endsection