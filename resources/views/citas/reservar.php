<?php

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