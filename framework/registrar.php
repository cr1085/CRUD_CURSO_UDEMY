<?php
require_once "../connection/connection.php";

if($flag){
try{

$sql="SELECT COUNT(codigo) as contador FROM registro";    
$query=mysqli_query($conn,$sql);
$resultado=0;
while($row=mysqli_fetch_array($query)){

$resultado=$row['contador'];

}

$codigo=($resultado + 1);


$email=$_POST['email'];
$pass=$_POST['pass'];

$DATA=array();

// encriptar contraseña

$sql="INSERT INTO registro VALUES('$codigo','$email',AES_ENCRYPT('$pass','key_str'))";
mysqli_query($conn,$sql);


ECHO json_encode('registrado...');

}catch(error $e){
    echo $e; 
 }

}