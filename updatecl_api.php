<?php

include "includes/mysql.php";

$id=$_GET['Dni'];

if(isset($id))
 $Nombre = $_POST['Nombre'];
 $Apellido = $_POST['Apellidos'];
 $Telefono = $_POST['Telefono'];
 $Email = $_POST['Email'];

 $edit= "update Client set WHERE Nombre='$Nombre', Apellido='$Apellido', Telefono='$Email'";
 echo($Dni);


 if($edit)
 {
     mysqli_close($bbdd);
     header('location:correcto.php');
 }
 else {

    $error = mysqli_error($bbdd);
    header('location:incorrecto.php');
 }