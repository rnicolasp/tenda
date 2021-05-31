<?php
require "includes/mysql.php";

$query="DELETE FROM Producte WHERE Codi=\"$_GET[Codi]\"";
$result=mysqli_query($bbdd,$query); 


$res = mysqli_query($bbdd, $query);
if($res){
    header("Location:correct_del.php");
}
else{

$error = mysqli_error($bbdd);
    header("Location:incorrecto.php?error=$error");
}
