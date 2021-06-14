    <!DOCTYPE html>
    <html lang="es">
    <?php require 'includes/head.php'; ?>

<?php
$Nombre = '';
$Telefono = '';
$Email = '';
?>

<body>

<div style="width: 100%; text-align: center;">

<?php

$Nombre = '';
$Telefono = '';
$Email = ''; 


if(isset($_GET['Nombre_proveidor'])){
    $query = "SELECT * FROM Proveidor where Nombre_proveidor = '$_GET[Nombre_proveidor]' ";
    $result = mysqli_query($bbdd, $query);
    $proveidor = mysqli_fetch_assoc($result);
    $Nombre = $proveidor['Nombre_proveidor'];
    $Telefono = $proveidor['Telefono_proveidor'];
    $Email = $proveidor['Email_proveidor'];

}
?>

            <h1>
                Panaderia de PeepoDJ
            </h1>
            <h2>
            <?=(isset($_GET['Nombre_proveidor'])) ? 'Edita el proveidor' : 'Inserta el proveidor'?>
            </h2>
            <?php require 'includes/home.php'; ?>
            <?php require (isset($_GET['Nombre_proveidor'])) ?  "includes/header_list.php" :  'includes/header_insert.php'?>  
            <img src="Images/hck.gif" width="150px" />          
</div>
<div style="width: 100%; text-align: center;">

<form action="<?=(isset($_GET['Nombre_proveidor'])) ? "updatepv_api.php?Nombre_proveidor=$_GET[Nombre_proveidor]" : 'insertpv_api.php' ?>" method="post">
    <div>
        <label> Nombre </label>
        <input type="text" max="25"name="Nombre_proveidor" value="<?=$Nombre?>" placeholder="Nombre del Proveidor" required/>
    </div><div>
        <label> Telefono </label>
        <input type="text" maxlenght="14" name="Telefono_proveidor" value="<?=$Telefono?>" placeholder="Telefono del Proveidor"required/>
        </div><div>
        <label> Email </label>
        <input type="text" maxlenght="60" name="Email_proveidor" value="<?=$Email?>" placeholder="Email del Proveidor" required/>
        </div>

        <button type="submit"> <?=(isset($_GET['Nombre_proveidor'])) ? 'Aplica los cambios' : 'Inserta' ?> </button>
    </form>
</body>

</html>