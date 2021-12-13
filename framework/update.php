<?php


require_once "../connection/connection.php";


if($flag){
    $codigo=$_POST['codigo'];
    $nombre=$_POST['nombre'];
    $email=$_POST['email']; 
  
try{

if(isset($nombre) && $nombre !==""){

    $sql="UPDATE persona SET nombre='$nombre' WHERE codigo='$codigo'";
    $query= mysqli_query($conn,$sql);

}

if(isset($email) && $email !== ""){

    $sql="UPDATE persona SET email='$email' WHERE codigo='$codigo'";
    $query= mysqli_query($conn,$sql);

}

 

ECHO "actualizado...";

}catch(error $e){
    echo $e; 
 }

}