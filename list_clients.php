<DOCTYPE html>
<html lang="es">
    <div style="width: 100%; text-align: center;">
            <h1>
                Panaderia de PeepoDJ
            </h1>
<?php require 'includes/head.php';?>
<body>

<?php require 'includes/home.php';?>

<?php require 'includes/header_list.php';?>
<div>
<label>Cerca per DNI</label>
<input list="brow">
<datalist id="brow">
  <option value="Internet Explorer">
  <option value="Firefox">
  <option value="Chrome">
  <option value="Opera">
  <option value="Safari">
</datalist> 
</div>

    <table>
    <thead>
        <tr>
            <th> DNI </th>
            <th> Nombre </th>
            <th> Apellidos </th>
            <th> Telefono </th>
            <th> Email </th>
        </tr>
    </thead>
    <tbody>
        <?php
            $query="SELECT * FROM Client ORDER BY Nombre";
            $result = mysqli_query($bbdd,$query);
            while ($row=mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>$row[Dni]</td>
                        <td>$row[Nombre]</td>
                        <td>$row[Apellidos]</td>  
                        <td>$row[Telefono]</td>
                        <td>$row[Email]</td>                      
                        </tr>";
            }
                    
                    ?>
    </tbody>
</table> 
        </div>
        <div style="width: 100%; text-align: center;">
<img src="Images/pepoLove.gif" width="150px" />
    </div>

</body>

