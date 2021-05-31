<DOCTYPE html>
<html lang="es">

<body>
<?php require 'includes/head.php'?>
<?php

echo "<p>" . $_POST['DNI'] . "</p>";
echo "<p>" . $_POST['Nombre'] . "</p>";
echo "<p>" . $_POST['Apellidos'] . "</p>";
echo "<p>" . $_POST['Telefono'] . "</p>";
echo "<p>" . $_POST['Email'] . "</p>";

$DNI = $_POST['DNI'];
$Nombre = $_POST['Nombre'];
$Apellidos = $_POST['Apellidos'];
$Telefono = $_POST['Telefono'];
$Email = $_POST['Email'];

$query="INSERT INTO Client(Dni,Nombre,Apellidos,Telefono,Email) VALUES (\"$DNI\", \"$Nombre\", \"$Apellidos\", \"$Telefono\", \"$Email\");";
echo $query;

$res = mysqli_query($bbdd, $query);
if($res){
    header("Location:correcto.php");
}
else{

$error = mysqli_error($bbdd);
    header("Location:incorrecto.php?error=$error");
}
?>
</body>
</html>