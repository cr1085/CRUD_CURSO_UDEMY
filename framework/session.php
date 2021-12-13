<?php
require_once "../connection/connection.php";
session_start();

if($flag){
    
    try{
 $email=$_POST['email'];
 $password=$_POST['pass'];   
 $res=array();   
 $flagLogin=false; 
 

 //  desencriptar contraseña

    $sql="SELECT *, AES_DECRYPT(pass,'key_str') as pass FROM registro WHERE email='$email'";
    $query= mysqli_query($conn,$sql); 
    
    
    
    while($row=mysqli_fetch_array($query)){
     
    if($password === $row['pass']){

        array_push($res, array(
            'codigo'=>$row['codigo'],
            'email'=>$row['email'],
            'pass'=>$row['pass']
        ));
    $flagLogin=true;
    }
   
    }
    
    if($flagLogin){        
        $_SESSION['user']=$res;        
    }    
    else{
         array_push($res, array(
            'codigo'=>"error",
             ));
    }
    
    
    
    ECHO json_encode($res);
    
    }catch(error $e){
        echo $e; 
     }
    
    }
