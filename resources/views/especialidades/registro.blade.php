@extends('index')
@section('card')
<script type="text/javascript">
    $(document).ready( function () {
    $('#especialidades').DataTable();
} );
</script>
  <!-- Start Content-->
                   
                         <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                       Planilla de Especialidades
                                    </div>
                                    <h4 class="page-title">Gestion de Especialidades</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-centered w-100 dt-responsive nowrap" id="especialidades" >
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th class="all">N° Especialidad</th>
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