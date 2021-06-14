<?php

include "includes/mysql.php";

$id = $_GET['DNI'];

$Dni = $_POST['DNI'];
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellidos'];
$Telefono = $_POST['Telefono'];
$Email = $_POST['Email'];
$query = "update Client set Dni='$Dni', Nombre='$Nombre', Apellidos='$Apellido', Telefono='$Telefono', Email='$Email' WHERE DNI = '$id'"; 

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