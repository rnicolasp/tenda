<DOCTYPE html>
<html lang="es">
    <div style="width: 100%; text-align: center;">
            <h1>
                Panaderia de PeepoDJ
            </h1>
<?php require 'includes/head.php';?>
<body>

<?php require 'includes/header.php';?>
<?php require 'includes/header_insert.php';?>

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
            $query="SELECT * FROM Producte ORDER BY Nombre";
            $result = mysqli_query($bbdd,$query);
            while ($row=mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>$row[Codi]</td>
                        <td>$row[Precio]</td>
                        <td>$row[Nombre]</td>  
                        <td>$row[idProveidor]</td>
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

