<?php
$host= "localhost";
$database= "Forn";
$user= "root";
$password= "";
$bbdd= mysqli_connect ($host,$user,$password,$database);
if(!$bbdd){
    echo "No tenim la...";
    print(mysqli_connect_error());
}