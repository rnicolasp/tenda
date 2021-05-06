<body>
    <form action="insertpan_api.php" method="post">
    <?php require 'includes/header.php';?>
    <label> Dni </label>
        <input type="text" maxlenght="16" name="Dni" placeholder="Dni del trabajador"/>
        <label> Nombre </label>
        <input type="text" maxlenght="255" name="Nombre" placeholder="Nombre del trabajador"/>
        <label> Apellidos </label>
        <input type="text" maxlenght="255" name="Apellidos" placeholder="Apelllidos trabajador"/>
        <label> Telefono </label>
        <input type="tel" maxlenght="14" name="Telefono" placeholder="Teléfono trabajador"/>
        <label> Email </label>
        <input type="text" maxlenght="100" name="Email" placeholder="Email del trabajador"/>
        <label> Horario </label>
        <input type="text" maxlenght="100" name="Horari" placeholder="Horario del trabajador"/>
        <button type="submit"> Enviar</button>
    </form>
</body>