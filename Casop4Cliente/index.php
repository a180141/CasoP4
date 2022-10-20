<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVICIO CON PHP</title>
</head>
<body>
    <h1>SERVICIO CON PHP SOAP</h1>
    <h3>Insertar un nuevo restaurante</h3>
    <form action="insertar.php" method="post">
        nombre:
        <input type="text" name="nombre">
        direccion:
        <input type="text" name="direccion">
        telefono:
        <input type="text" name="telefono">
        <input type="submit" value="insertar">
    </form>
    <h3>Editar un restaurante</h3>
    <form action="editar.php" method="post">
        ID:
        <input type="text" name="id">
        nombre:
        <input type="text" name="nombre">
        direccion:
        <input type="text" name="direccion">
        telefono:
        <input type="text" name="telefono">
        <input type="submit" value="Actualizar">
    </form>
    <h3>Mostrar Restaurantes</h3>
    <form action="consultar.php" method="post">
        <input type="submit" value="Consultar">
    </form>
    <h3>Eliminar un restaurante</h3>
    <form action="eliminar.php" method="post">
        ID:
        <input type="text" name="id">
        <input type="submit" value="Eliminar">
    </form>
</body>
</html>

