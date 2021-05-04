<SELECT>
<?php
$query="SELECT DNI, NOM FROM venta ORDER BY Nom";
$result= mysqli_query ($bbdd,$query);
while($row= mysqli-fetch-assol($result))
echo "<option value= \"$row[DNI]\"> $row[Nom]</option>";
?>

</select>