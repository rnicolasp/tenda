<?php
require "includes/mysql.php";

$query="UPDATE TABLE Productes WHERE Codi=\"$_GET[Codi_proveidor]\"";
$result=mysqli_query($bbdd,$query); 


$res = mysqli_query($bbdd, $query);
if($res){
    header("Location:correct_ok.php");
}
else{

$error = mysqli_error($bbdd);
    header("Location:incorrecto.php?error=$error");
}
