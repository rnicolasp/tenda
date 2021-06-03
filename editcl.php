<!DOCTYPE html>
    <html lang="es">
    <?php require 'includes/head.php'; ?>
<body>
<div style="width: 100%; text-align: center;">
            <h1>
                Panaderia de PeepoDJ
            </h1>
            <h2>
                Edita el cliente.
            </h2>
            <?php require 'includes/home.php'; ?>
            <div>
            </a>
            <img src="Images/hck.gif" width="150px" />    
            </div>      
</div>
<div style="width: 100%; text-align: center;">
    <form action=updatecl_api.php" method="post">
        <div>
        <label> <b>DNI</b> </label>
        <input type="text" max="15"name="DNI" placeholder="DNI del cliente" required/>
        <label><b>Nombre</b></label>
        <input type="text" maxlenght="15" name="Nombre" placeholder="Nombre del cliente" required/>
        </div><div>
        <label><b>Apellido</b></label>
        <input type="text" maxlenght="25" name="Apellidos" placeholder="Apellidos del cliente" required/>
        <label><b>Telefono</b></label>
        <input type="text" maxlenght="14" name="Telefono" placeholder="Telefono del cliente" required/>
        </div>
        <label><b>Email</b></label>
        <input type="text" maxlenght="50" name="Email" placeholder="Email del cliente" required/>
        <button type="submit">Aplicar cambios</button>
    </form>
</body>

</html>