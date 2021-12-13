<?php
require_once "../connection/connection.php";

if($flag){
try{
    
$dni=$_POST['dni'];
$nom=$_POST['name'];
$ema=$_POST['email'];

$DATA=array();

$sql="INSERT INTO persona VALUES('$dni','$nom','$ema')";
mysqli_query($conn,$sql);


// $sql="SELECT * FROM persona";
// $query= mysqli_query($conn,$sql); 

// while($row=mysqli_fetch_array($query)){
   
//    array_push($DATA, array(
//        'codigo'=>$row['codigo'],
//        'nombre'=>$row['nombre'],
//        'email'=>$row['email']
//    ));

// }

// ECHO json_encode($DATA);

}catch(error $e){
    echo $e; 
 }

}