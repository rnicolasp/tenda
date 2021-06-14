<?php

include "includes/mysql.php";

$id = $_GET['Nombre_proveidor'];

$Nombre = $_POST['Nombre_proveidor'];
$Telefono = $_POST['Telefono_proveidor'];
$Email = $_POST['Email_proveidor'];
$query = "update Proveidor set Nombre_proveidor='$Nombre', Telefono_proveidor='$Telefono', Email_proveidor='$Email' WHERE Nombre_proveidor = '$id'"; 

$edit = mysqli_query($bbdd, $query);  
if($edit)
{

    mysqli_close($bbdd);
       header('location:correcto.php');
}
 else {

   $error = mysqli_error($bbdd);
 header('location:incorrect_del.php');
}
?>
