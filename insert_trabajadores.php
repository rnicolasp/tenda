<body>
    <form action="insterttbr_api.php" method="post">
    <?php require 'includes/header.php';?>
    <label> Dni </label>
        <input type="text" maxlenght="2" name="Dni" required placeholder="Inserta tu DNI"/>
        <label> Nombre </label>
        <input type="text" maxlenght="255" name="Nombre" placeholder="Inserta tu nombre"/>
        <label> Apellidos </label>
        <input type="text" maxlenght="255" name="Apellidos" placeholder="Inserta tus apellidos"/>
        <label> Telefono </label>
        <input type="tel" maxlenght="14" name="Telefono" placeholder="Inserta tu telefono"/>
        <label> Email </label>
        <input type="text" maxlenght="100" name="Email" placeholder="Inserta tu email"/>
        <button type="submit"> Enviar</button>
    </form>
</body> 