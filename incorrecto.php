<!DOCTYPE html>
    <html lang="es">
    <?php require 'includes/head.php'; ?>

    <body>
        <div style="width: 100%; text-align: center;">
            <h1>
                Panaderia de PeepoDJ
            </h1>
            <?php require 'includes/header.php'; ?>
            <h2> ¡No se ha podido enviar!
            </h2>
        </div>
        <div style="width: 100%; text-align: center;">
        <p> No ha sido posible enviar los datos a la base de datos debido a un error inesperado envíe una captura de pantalla a un administrador. </p>
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
            <img src="Images/ohno.gif" width="200px" />
            <div style="width: 100%; text-align: topright;">
        </div>

        <?php
        $error = mysqli_error($bbdd);
        ?>

        <?php echo $_GET["error"]?>

    </body>

    </html>