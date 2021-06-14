<DOCTYPE html>
<html lang="es">
<?php require 'includes/head.php';?>

    <div style="width: 100%; text-align: center;">
            <h1>
                Panaderia de PeepoDJ
            </h1>
<body>

<?php require 'includes/home.php';?>
<?php require 'includes/header_list.php';?>
<div>
<form action="list_pv.php" method="GET">
<label>Filtrar por:</label>
<select name="Filtro1">
<option value=0>Todos los proveidores</option>
<?php
$query = "SELECT Codi_proveidor, Nombre_proveidor FROM Proveidor ORDER BY Nombre_proveidor";
            $result = mysqli_query($bbdd, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value= \"$row[Codi_proveidor]\">$row[Nombre_proveidor]</option>";
            }
?>
<?php
            $where="";
            if (isset($_GET["Filtro1"]) && $_GET["Filtro1"] > 0){
                $where = "WHERE Codi_proveidor=\"$_GET[Filtro1]\"";
            }
            ?>
</select> 
<button type="submit">Aplicar</button>
</form>
</div>

    <table>
    <thead>
        <tr>
            <th> Codi </th>
            <th> Nombre </th>
            <th> Telefono </th>
            <th> Email </th>
        </tr>
    </thead>
    <tbody>
        <?php
            $query="SELECT * FROM Proveidor AS pv $where ORDER BY Codi_proveidor ";
            $result = mysqli_query($bbdd,$query) or die (mysqli_error($bbdd));
            while ($row=mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>$row[Codi_proveidor]</td>
                        <td>$row[Nombre_proveidor]</td>
                        <td>$row[Telefono_proveidor]</td>
                        <td>$row[Email_proveidor]</td>    
                        <td><a href=\"deletepv_api.php?Codi_proveidor=$row[Codi_proveidor]\"><img src='Images/basura.png' width='20px'></a></td>                  
                        <td><a href=\"insert_pv.php?Nombre_proveidor=$row[Nombre_proveidor]\"><img src='Images/edit_icono.png' width='20px'></a></td>                  
                        </tr>";
            }

                    ?>
    </tbody>
</table>
<img src="Images/pepoDJ.gif" width="200px" />
    </div>

</body>