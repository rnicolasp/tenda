<?php

include "includes/mysql.php";

$Dni=$_GET['Dni'];

if(isset($DNI))
 $Nombre = $_POST['Nombre'];
 $Apellido = $_POST['Apellidos'];
 $Telefono = $_POST['Telefono'];
 $Email = $_POST['Email'];

 $edit= mysqli_query($bbdd,"update Client set Nombre='$Nombre', Apellido=$'$Apellido', Telefono='$Email/'");


 if($edit)
 {
     mysqli_close($bbdd);
     header('location:correcto.php');
 }
 else {

    $error = mysqli_error($bbdd);
    header('location:incorrecto.php');
 }