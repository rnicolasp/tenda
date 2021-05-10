<DOCTYPE html>
<html lang="es">
<?php require 'includes/head.php';?>
<body>
<?php require 'includes/header.php';?>

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
}else{
    echo mysqli_error($bbdd);
}
?>
</html>