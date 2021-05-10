<!DOCTYPE html>
    <html lang="es">
    <?php require 'includes/head.php'; ?>
<body>
<div style="width: 100%; text-align: center;">
            <h1>
                Panaderia de PeepoDJ
            </h1>
            <img src="Images/hck.gif" width="200px" />
</div>
<div style="width: 100%; text-align: center;">
    <form action="insertpr_api.php" method="post">
        <?php require 'includes/header.php'; ?>
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