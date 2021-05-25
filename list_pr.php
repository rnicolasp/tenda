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
<form action="list_pr.php" method="GET">
<label>Filtrar per:</label>
<select name="Filtro1">
<option value=0>Tots els proveidors</option>
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
                $where = " WHERE pv.Codi_proveidor=\"$_GET[Filtro1]\" ";
                echo "aslighasuoghasiphngaipgiojsgpajsgijapig";
            }
            ?>
</select> 
<button type="submit">Aplicar</button>
</form>
</div>

    <table>
    <thead>
        <tr>
            <th> Codigo </th>
            <th> Precio </th>
            <th> Nombre </th>
            <th> Proveidor </th>
        </tr>
    </thead>
    <tbody>
        <?php
            $query="SELECT pr.*, pv.Nombre_proveidor
                FROM Producte AS pr
                INNER JOIN Proveidor AS pv
                ON (pv.Codi_proveidor = pr.idProveidor)
                $where
                 ORDER BY pr.Codi";
            $result = mysqli_query($bbdd,$query);
            while ($row=mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>$row[Codi]</td>
                        <td>$row[Precio]</td>
                        <td>$row[Nombre]</td>  
                        <td>$row[Nombre_proveidor]</td>
                        </tr>";
            }
                    
                    ?>
    </tbody>
</table> 
        </div>
        <div style="width: 100%; text-align: center;">
<img src="Images/pepeLove.gif" width="150px" />
    </div>

</body>

