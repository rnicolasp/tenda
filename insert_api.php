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
echo "<p>" . $_POST['Horari'] . "</p>";

$Dni = $_POST['Dni'];
$Nombre = $_POST['Nombre'];
$Apellidos = $_POST['Apellidos'];
$Telefono = $_POST['Telefono'];
$Email = $_POST['Email'];
$Horari = $_POST['Horari'];

$query="INSERT INTO Treballador(Dni,Nombre,Apellidos,Telefono,Email,Horari) VALUES (\"$Dni\",\"$Nombre\",\"$Apellidos\",\"$Telefono\",\"$Email\",\"$Horari\");";
echo $query;

$res = mysqli_query($bbdd, $query);
IF(!$res){
    echo "No ha...";
<<<<<<< HEAD
    print (mysqli_error($bbdd)); 
=======
    print (mysqli_error($bbdd));
>>>>>>> master
}