<?php
$host= "localhost";
$database= "Horno";
$user= "root";
$password= "";
$bbdd= mysqli_connect ($host,$user,$password,$database);
if(!$bbdd){
    echo "Falta una base de datos...";
    print(mysqli_connect_error());
}