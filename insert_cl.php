<!DOCTYPE html>
    <html lang="es">
    <?php require 'includes/head.php'; ?>
<body>
<div style="width: 100%; text-align: center;">
            <h1>
                Panaderia de PeepoDJ
            </h1>
            <h2>
                Insert Clientes.
            </h2>
            <?php require 'includes/home.php'; ?>
            <?php require 'includes/header_insert.php'; ?>  
            <div>
            <img src="Images/hck.gif" width="150px" />    
            </div>      
</div>
<div style="width: 100%; text-align: center;">
    <form action="insertcl_api.php" method="post">
        <div>
        <label> <b>DNI</b> </label>
        <input type="text" max="255"name="DNI" placeholder="DNI del cliente" />
        <label><b>Nombre</b></label>
        <input type="text" maxlenght="255" name="Nombre" placeholder="Nombre del cliente" />
        </div><div>
        <label><b>Apellidos</b></label>
        <input type="text" maxlenght="255" name="Apellidos" placeholder="Apellidos del cliente" />
        <label><b>Telefono</b></label>
        <input type="text" maxlenght="255" name="Telefono" placeholder="Telefono del cliente" />
        </div>
        <label><b>Email</b></label>
        <input type="text" maxlenght="255" name="Email" placeholder="Email del cliente" />
        <button type="submit"> Enviar</button>
    </form>
</body>

</html>