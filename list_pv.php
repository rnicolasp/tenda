<DOCTYPE html>
<html lang="es">
    <div style="width: 100%; text-align: center;">
            <h1>
                Panaderia de PeepoDJ
            </h1>
<?php require 'includes/head.php';?>
<body>

<?php require 'includes/header.php';?>
<div>
<form action="list_pv.php" method="GET">
<label>Filtrar per:</label>
<select name="Filtro1">
<option value=0>Tots els proveidors</option>
<option value=1>Panaderoooooo</option>
<option value=5>Es forn</option>
<option value=3>Forn nou</option>
<option value=6>Panfresco</option>
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
            $query="SELECT * FROM Proveidor $where ORDER BY Codi_proveidor ";
            $result = mysqli_query($bbdd,$query) or die (mysqli_error($bbdd));
            while ($row=mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>$row[Codi_proveidor]</td>
                        <td>$row[Nombre_proveidor]</td>
                        <td>$row[Telefono_proveidor]</td>
                        <td>$row[Email_proveidor]</td>                      
                        </tr>";
            }

                    ?>
    </tbody>
</table>
<img src="Images/pepoDJ.gif" width="200px" />
    </div>

</body>

