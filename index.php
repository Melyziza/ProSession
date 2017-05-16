<?php
/*session_start();
$_SESSION["saludo"]="Hola Mundo";*/

?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="revision.php">Revisi&oacute;n sesi&oacute;n</a>
        
        <form method="post" action="modulo/Agregar.php">
            <div><label>Nombre:</label><input type="text" name="nombre"></div>
            <div><label>Clave:</label><input type="text" name="totalusd"></div>
            <input type="submit">
        </form>
    </body>
</html>
