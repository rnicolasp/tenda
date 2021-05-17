<DOCTYPE html>
<html lang="es">
<?php require 'includes/head.php';?>
<body>
<?php require 'includes/header.php';?>

<?php

echo "<p>" . $_POST['Nombre'] . "</p>";
echo "<p>" . $_POST['Telefono'] . "</p>";
echo "<p>" . $_POST['Email'] . "</p>";

$Nombre_proveidor = $_POST['Nombre'];
$Telefono_proveidor = $_POST['Telefono'];
$Email_proveidor = $_POST['Email'];

$query="INSERT INTO Proveidor(Nombre_proveidor,Telefono_proveidor,Email_proveidor) VALUES (\"$Nombre_proveidor\",\"$Telefono_proveidor\",\"$Email_proveidor\");";
echo $query;

$res = mysqli_query($bbdd, $query);
if($res){
}else{
    echo mysqli_error($bbdd);
}
?>
</html>