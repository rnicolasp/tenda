<?php
require "includes/mysql.php";

$query="UPDATE Productes SET WHERE Codi=\"$_GET[Codi_proveidor]\"";


$res = mysqli_query($bbdd, $query);
if($res){
    header("Location:correcto.php");
}
else{

$error = mysqli_error($bbdd);
    header("Location:incorrecto.php?error=$error");
}
