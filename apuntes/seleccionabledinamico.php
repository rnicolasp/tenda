<SELECT>
<?php
$query="SELECT ID, Nom FROM PROVEIDOR ORDER BY Nom";
$result= mysqli_query ($bbdd,$query);
while($row= mysqli-fetch-assol($result))
echo "<option value= \"$row[ID]\"> $row [Nom]</option>";
?>

</select>   