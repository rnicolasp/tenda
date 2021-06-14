<!DOCTYPE html>
    <html lang="es">
    <?php require 'includes/head.php'; ?>

<?php

$Nombre = '';
$Precio = '';

?>

<body>
<div style="width: 100%; text-align: center;">
          
<?php

$Nombre = '';
$Precio = '';


if(isset($_GET['Nombre'])){
    $query = "SELECT * FROM Producte where Nombre = '$_GET[Nombre]' ";
    $result = mysqli_query($bbdd, $query);
    $producte = mysqli_fetch_assoc($result);
    $Nombre = $producte['Nombre'];
    $Precio = $producte['Precio'];

}

?>
          
            <h1>
                Panaderia de PeepoDJ
            </h1>
            <h2>
            <?=(isset($_GET['Nombre'])) ? 'Edita el producto' : 'Inserta el producto'?>
            </h2>
            <?php require 'includes/home.php'; ?>            
            <?php require (isset($_GET['Nombre'])) ?  "includes/header_list.php" :  'includes/header_insert.php'?>
            <img src="Images/bongoTap.gif" width="150px" />

</div>
<div style="width: 100%; text-align: center;">
<form action="<?=(isset($_GET['Nombre'])) ? "updatepr_api.php?Nombre=$_GET[Nombre]" : 'insertpr_api.php' ?>" method="post">
       <div>
        <label> Precio </label>
        <input type="number" max="999" step="0.001" name="Precio" value="<?=$Precio?>" placeholder="Inserta el precio" required />
       </div><div>
        <label> Nombre </label>
        <input type="text" maxlength="25" name="Nombre" value="<?=$Nombre?>" placeholder="Inserta el nombre" required/>
        </div><div>
     <label> Proveidor </label>
        <select name="proveidor">
            <?php
            $query = "SELECT Codi_proveidor, Nombre_proveidor FROM Proveidor ORDER BY Codi_proveidor";
            $result = mysqli_query($bbdd, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value= \"$row[Codi_proveidor]\">$row[Nombre_proveidor]</option>";
            }
            ?>
        </select>
        </div>         <button type="submit"> <?=(isset($_GET['Nombre'])) ? 'Aplica los cambios' : 'Inserta' ?> </button>
        </div>
    </form>
</body>

</html>