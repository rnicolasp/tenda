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
  <?php
    $query = "SELECT DNI FROM Client AS cl ORDER BY DNI;";
    $result = mysqli_query($bbdd, $query) or die (mysqli_error($bbdd));
    while($row = mysqli_fetch_assoc($result)){
        echo "<option value=\"$row[DNI]\">$row[DNI]</option>";
    }
  ?>
</datalist> 
</div>

    <?php
    $where="";
    if (isset($_GET["Filtro2"]) && $_GET["Filtro2"] > 0){
        $where = " WHERE DNI=\"$_GET[Filtro2]\" " or die (mysqli_error($bbdd));
        echo "asldkmasd";
    }
    ?>
<button type="submit">Filtrar</button>
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
        
            $query="SELECT * FROM Client $where ORDER BY Nombre";
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

