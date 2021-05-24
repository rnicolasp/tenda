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
       <div>
        <label> Precio </label>
        <input type="number" max="999" step="0.01" name="Precio" placeholder="Inserta el precio" required />
       </div><div>
        <label> Nombre </label>
        <input type="text" maxlength="35" name="Nombre" placeholder="Inserta el nombre" required/>
        </div><div>
        <label> Proveidor </label>
        <select name="proveidor">
            <?php
            $query = "SELECT Codi_proveidor, Nombre_proveidor FROM Proveidor ORDER BY Codi_proveidor";
            $result = mysqli_query($bbdd, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value= \"$row[Codi_proveidor]\">$row[Nombre_proveidor]</option>";
            }
            ?>
        </select>
        </div>        <button type="submit"> Enviar </button>
        </div>
    </form>
</body>

</html>