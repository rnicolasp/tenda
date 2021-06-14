<!DOCTYPE html>
    <html lang="es">
    <?php require 'includes/head.php'; ?>

    <body>
        <div style="width: 100%; text-align: center;">
            <h1>
                Panaderia de PeepoDJ
            </h1>
            <?php require 'includes/header.php'; ?>
            <h2>¡Ha habido un error inesperado!
            </h2>
        </div>
        <div style="width: 100%; text-align: center; margin: 80px auto 50px auto">
        <p><b> ¡Recuerde que para poder eliminar un proveidor, debe eliminar todos sus productos!</b></p>
        <div style="margin: 100px auto 50px auto"></div>
        <p> En caso de que haya hecho el paso anterior i el error continue, porfavor contacte con un administrador.</p>

            <img src="Images/ohno.gif" width="200px" />
            <div style="width: 100%; text-align: topright;">
        </div>

        <?php
        $error = mysqli_error($bbdd);
        ?>

        <?php echo $_GET["error"]?>

    </body>

    </html>