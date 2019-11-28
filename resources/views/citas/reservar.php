<?php
$mysqli = new mysqli("localhost", "root", "", "laravel");
if ($link->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $link->connect_errno . ") " . $link->connect_error;
}

if(isset($_POST['Reservar'])){
    
 
$title=$_POST['title'];
$start=$_POST['start'];
$description=$_POST['descrption'];
$end=$_POST['descrption'];
$color=$_POST['color'];
 

	
	
	
	$sql1="INSERT INTO `events`(`title`,`descrption`,`color`,`start`,`end`) VALUES('$title','$description' ,'$color' ,'$start' ,'$end')";
	$result1 = mysqli_query($link, $sql1);
  
 
}

?>

<table class="table table-centered w-100 dt-responsive nowrap display" id="citas2">
                                                <thead class="thead-light">
                                                    <tr>
                                                        
                                                        <th class="all">N° Cita</th>
                                                        <th>Fecha</th>
                                                        <th>Paciente</th>
                                                        <th>Contacto Pac.</th>
                                                        <th>Especialista</th>
                                                        <th>Especialidad</th>
                                                        <th>Estado</th>
                                                        <th>Met. Confirm.</th>
                                                        <th>Acción</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($result as $item2)
                                                    <tr>
                                                        <td>
                                                          <a href="">{{$item2->id}}</a>
                                                        </td>
                                                        <td>
                                                           {{$item2->events->start}}
                                                        </td>
                                                        
                                                        <td>
                                                            <a href"" class="text-success">{{$item2->pacientes->pacnombre}}  {{$item2->pacientes->pacapellidoP}} </a>
                                                           
                                                        </td>
                                                        <td>
                                                        {{$item2->pacientes->pactelefono}}
                                                        </td>
                                                        <td>
                                                        {{$item2->pacientes->pactelefono}}
                                                        </td>
                                                        <td>
                                                            {{$item2->especialistas->medidentificacion}}
                                                        </td>
                    
                                                        <td>
                                                           {{$item2->especialidades->espNombre}}
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-success">{{$item2->citEstado}}</span>
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
                                                    @endforeach();
                                                </tbody>
                                            </table>