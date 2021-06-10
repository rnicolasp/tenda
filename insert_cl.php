<!DOCTYPE html>
    <html lang="es">
    <?php require 'includes/head.php'; ?>
<body>

<?php
  $Dni = '';
  $Nombre = '';
  $Apellido = '';
  $Telefono = '';
  $Email = '';

  ?>

<div style="width: 100%; text-align: center;">
            <h1>
                Panaderia de PeepoDJ
            </h1>
            <h2>
             <?=(isset($_GET['DNI'])) ? 'Edita el client' : 'Inserta el client'?>
            </h2>
            <?php require 'includes/home.php'; ?>
            <?php require (isset($_GET['DNI'])) ?  "includes/header_list.php" :  'includes/header_insert.php'?>  
            <div>
            <img src="Images/hck.gif" width="150px" />    
            </div>      
</div>
<div style="width: 100%; text-align: center;">
    
<?php

$Dni = '';
$nombre = '';
$apellido = '';
$telefono = '';
$email = '';


if(isset($_GET['DNI'])){
    $query = "SELECT * FROM Client where Dni = '$_GET[DNI]' ";
    $result = mysqli_query($bbdd, $query);
    $client = mysqli_fetch_assoc($result);
    $Dni = $client['Dni'];
    $Nombre = $client['Nombre'];
    $Apellido = $client['Apellidos'];
    $Telefono = $client['Telefono'];
    $Email = $client['Email'];

}
?>

    <form action="<?=(isset($_GET['DNI'])) ? "updatecl_api.php?DNI=$_GET[DNI]" : 'insertcl_api.php' ?>" method="post">
        <div>
        <label> <b>DNI</b> </label>
        <input type="text" max="15"name="DNI" value="<?=$Dni?>" placeholder="DNI del cliente" required/>
        <label><b>Nombre</b></label>
        <input type="text" maxlenght="15" name="Nombre" value="<?=$Nombre?>" placeholder="Nombre del cliente" required/>
        </div><div>
        <label><b>Apellidos</b></label>
        <input type="text" maxlenght="25" name="Apellidos" value="<?=$Apellido?>" placeholder="Apellidos del cliente" required/>
        <label><b>Telefono</b></label>
        <input type="text" maxlenght="14" name="Telefono" value="<?=$Telefono?>" placeholder="Telefono del cliente" required/>
        </div>
        <label><b>Email</b></label>
        <input type="text" maxlenght="50" name="Email" value="<?=$Email?>" placeholder="Email del cliente" required/>
        <button type="submit"> <?=(isset($_GET['DNI'])) ? 'Aplica los cambios' : 'Inserta' ?> </button>
    </form>
</body>

</html>