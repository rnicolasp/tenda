<?php
require "includes/mysql.php";

$query="DELETE FROM Proveidor WHERE Codi_proveidor=\"$_GET[Codi_proveidor]\"";
$result=mysqli_query($bbdd,$query); 


$res = mysqli_query($bbdd, $query);
if($res){
    header("Location:correct_del.php");
}
else{

$error = mysqli_error($bbdd);
    header("Location:incorrectopv.php?error=$error");
}
