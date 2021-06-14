<?php

include "includes/mysql.php";

$id = $_GET['Nombre'];

$Nombre = $_POST['Nombre'];
$Precio = $_POST['Precio'];
$query = "update Producte set Nombre='$Nombre', Precio='$Precio' WHERE Nombre = '$id'"; 

$edit = mysqli_query($bbdd, $query);  

?>
