<!DOCTYPE html>
    <html lang="es">
    <?php require 'includes/head.php'; ?>

    <body>
        <div style="width: 100%; text-align: center;">
            <h1>
                Panaderia de PeepoDJ
            </h1>
            <?php require 'includes/header.php'; ?>
            <h2> ¡No se ha podido eliminar!
            </h2>
        </div>
        <div style="width: 100%; text-align: center;">
        <p> Ha habido algun error a la hora de eliminar los datos, pasele el mensaje de error a un administrador. </p>
            <img src="Images/feelsthinking.png" width="150px" />
            <div style="width: 100%; text-align: topright;">
        </div>

<?php
        $error = mysqli_error($bbdd);
        ?>
    </body>

    </html>