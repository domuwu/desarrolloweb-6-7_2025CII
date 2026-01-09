<?php
//RECIBIR DATOS CON GET
$cursoVista =$_GET["curso"] ?? "No definido";
//$GET["curso] = "desarrollo_web

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibir GET</title>
</head>
<body>
    <h1>DATOS RECIBIDOS CON GET</h1>
    <P>Curso seleccionado:</P>
    <strong><?= $cursoVista ?></strong>

    <br><br>
    <a href="index.php">Volver</a>
</body>
</html>