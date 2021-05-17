<!DOCTYPE html>
    <html lang="es">
    <?php require 'includes/head.php'; ?>
<body>
<div style="width: 100%; text-align: center;">
            <h1>
                Panaderia de PeepoDJ
            </h1>
            <h2>
                Insert Productos.
            </h2>
            <?php require 'includes/home.php'; ?>            
            <?php require 'includes/header_insert.php'; ?>
            <img src="Images/bongoTap.gif" width="150px" />

</div>
<div style="width: 100%; text-align: center;">
    <form action="insertpr_api.php" method="post">
        <label> Precio </label>
        <input type="number" max="99999" step="0.01" name="Precio" placeholder="Inserta el precio" />
        <label> Nombre </label>
        <input type="text" maxlenght="255" name="Nombre" placeholder="Inserta el nombre" />
        <label> Proveidor </label>
        <select name="proveidor">
            <?php
            $query = "SELECT Codi_proveidor, Nombre_proveidor FROM Proveidor ORDER BY Nombre_proveidor";
            $result = mysqli_query($bbdd, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value= \"$row[Codi_proveidor]\">$row[Nombre_proveidor]</option>";
            }
            ?>
        </select>
        <button type="submit"> Enviar</button>
    </form>
</body>

</html>