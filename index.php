<?php
//GET - Es un metodo que usa el navegador para enviar datos al servidor a traves de la URL
// Cuando ocurre GET
//Cuando el usuario: Hace clic en un enlace, cuando se escribe una direccion en la barra de navegador, usa un furmulario con method=GET
// como viajan los datos: los datos van escritos en la URL, SON VISIBLES, se envian junto a la direccion
//Para que se usa GET -> Navegacion, busquedas, filtros, consultas
//Como se envian los datos -> el navegador -> al servidor (PHP)
//GET se usa pa pedir informacion al servidor y los datos viajan en la URL

//POST - Es un metodo que usa el navegador para enviar datos al servidor dentro del cuerpo de la peticion
//Cuando ocurre POST
//cuando el usuario: envia un formulario, presiona el boton enviar, registra informacion
//Como viajan los datos: Los datos no se ven en la URL, viajan de forma oculta, se envian internamente
//Para que se usa POST -> formularios, registros de usuarios, login, envio de mensajes
//Como se envian los datos -> el navegador -> al servidor (PHP)
//POST se usa para enviar informacion al servidor y los datos no son visibles en la URL

//DIFERENCIAS CLAVE -> GET PIDE INFO - POST ENVIA INFO
//formas del navegador de comunicarse con el servidore jsjejejeje
/*Metodo      Para qu sirve
GET consultar info
POST enviar info
PUT actualizar info
DELETE eliminar info
*/
//PUT (ACTUALIZAR) Y DELETE (ELIMINAR) PUEDEN SER SIMULADOS CON EL METODO POST

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO GET Y POST</title>
</head>
<body>
    <h1>
        Ejercicio GET Y POST
    </h1>
    <hr>
    <h2>
        EJERCICIO GET
    </h2>
    <P>
        Haz clic en un enlace
    </P>
    <!--ENLACES CON GET -->
    <a href="recibir_get.php?curso=desarrollo_web">Desarrollo Web</a>
    <a href="recibir_get.php?curso=programacion">Programacion</a>
    <a href="recibir_get.php?curso=base_datos">Base de Datos</a>
    
    <hr>
    <h2>
        EJERCICIO POST
    </h2>
    <!--FORMULARIO POST -->
    <form method="POST" action="recibir_post.php">
        <label>Nombre: </label><br>
        <input type="text" name="nombre"><br>
        <label>Correo: </label><br>
        <input type="text" name="nombre"><br>
        <button type="submit">Enviar</button>

        


    </form>
    <

</body>
</html>