@extends('index')
@section('card')

<script type="text/javascript">
    $(document).ready( function () {
    $('#pacientes').DataTable();
} );
</script>
  <!-- Start Content-->
                   
                         <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                       Planilla de Pacientes
                                    </div>
                                    <h4 class="page-title">Gestion de Pacientes</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-centered w-100 dt-responsive nowrap" id="pacientes">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th class="all">N° Pac</th>
                                                        <th>RUT</th>
							                            <th>Nombre</th>
							                            <th>Apellidos Paterno</th>
							                            <th>Apellidos Materno</th>
							                            <th>Fecha Nac</th>
							                            <th>Sexo</th>
							                            <th>E-mail</th>
							                            <th>Teléfono</th>
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
                                                           <a href="{{route('PerfilP', $item->id)}}" class="text-success">{{$item->pacidentificacion}} </a>
                                                        </td>
                                                        <td>
                                                          {{$item->pacnombre}}
                                                        </td>
                                                        <td>
                                                           {{$item->pacapellidoP}}
                                                        </td>
                                                        <td>
                                                            {{$item->pacapellidoM}}
                                                        </td>
                                                        <td>
                                                           {{$item->pacfechaN}}
                                                          
                                                        </td>
                                                        <td>
                                                           {{$item->pacsexo}}
                                                        </td>
                                                        <td>
                                                           {{$item->paccorreo}}
                                                        </td>
                                                        <td>
                                                           {{$item->pactelefono}}
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                            <a href="{{route('UpdateP', $item->id)}}" class="btn btn-primary mr-1"> <i class="far fa-edit"></i></a>
                                                            <form method="post" action="{{route('DeleteP', $item->id)}}">
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