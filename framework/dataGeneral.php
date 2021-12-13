<?php
require_once "../connection/connection.php";


if($flag){
$DATA=array();
try{



$sql="SELECT * FROM persona";


$query= mysqli_query($conn,$sql); 



while($row=mysqli_fetch_array($query)){
   
   array_push($DATA, array(
       'codigo'=>$row['codigo'],
       'nombre'=>$row['nombre'],
       'email'=>$row['email']
   ));

}



ECHO json_encode($DATA);

}catch(error $e){
    echo $e; 
 }

}


