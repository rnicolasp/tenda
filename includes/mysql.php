<?php
$host= "localhost";
$database= "Horno";
$user= "root";
$password= "";
$bbdd= mysqli_connect ($host,$user,$password,$database);
if(!$bbdd){
    echo "ERROR:";
    print(mysqli_connect_error());
}