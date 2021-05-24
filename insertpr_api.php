<DOCTYPE html>
<html lang="es">
<body>
<?php require 'includes/head.php'; ?>
<?php

echo "<p>" . $_POST['Precio'] . "</p>";
echo "<p>" . $_POST['Nombre'] . "</p>";
echo "<p>" . $_POST['proveidor'] . "</p>";

$Precio = $_POST['Precio'];
$Nombre = $_POST['Nombre'];
$idProveidor = $_POST['proveidor'];

$query="INSERT INTO Producte(Precio,Nombre,idProveidor) VALUES (\"$Precio\",\"$Nombre\",\"$idProveidor\");";
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
</html>