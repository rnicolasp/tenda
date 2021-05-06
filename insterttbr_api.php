<DOCTYPE html>
<html lang="es">
<?php require 'includes/head.php';?>
<body>
<?php require 'includes/header.php';?>

<?php

echo "<p>" . $_POST['Dni'] . "</p>";
echo "<p>" . $_POST['Nombre'] . "</p>";
echo "<p>" . $_POST['Apellidos'] . "</p>";
echo "<p>" . $_POST['Telefono'] . "</p>";
echo "<p>" . $_POST['Email'] . "</p>";

$Dni = $_POST['Dni'];
$Nombre = $_POST['Nombre'];
$Apellidos = $_POST['Apellidos'];
$Telefono = $_POST['Telefono'];
$Email = $_POST['Email'];

$query="INSERT INTO Client(Dni,Nombre,Apellidos,Telefono,Email) VALUES (\"$Dni\",\"$Nombre\",\"$Apellidos\",\"$Telefono\",\"$Email\");";
echo $query;

$res = mysqli_query($bbdd, $query);
if($res){
}