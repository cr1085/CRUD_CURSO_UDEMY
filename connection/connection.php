<?php

$HOST="localhost";
$USER="root";
$PWD="";
$NBD="cursophp";
$resp="";
$flag=false;

$conn= new mysqli($HOST,$USER,$PWD,$NBD);

if($conn){
$resp="conectado";
$flag=$conn;
}else{
$resp="No conectado";
$flag=$conn;
}



// $DRIVER="mysql";
// $HOST="localhost";
// $USER="root";
// $PWD="";
// $NBD="cursophp";
// $PTO="3306";

// $conn= new PDO("$DRIVER:host=$HOST;port=$PTO;dbname=$NBD;",$USER,$PWD);

// if($conn){
// ECHO "Conectado...";
// }else{
//    ECHO "No conectado..."; 
// }