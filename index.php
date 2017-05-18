<?php
session_start();
$_SESSION["saludo"]="Hola Mundo";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div> 
            <?php
        if(!isset($_SESSION['USR'])) 
        {
            ?> 
            <a href="cerrar.php">Cerrar Sesion</a> 
        </div>
        <?php
        }
        ?>
        
        <a href="revision.php">Revisi&oacute;n sesi&oacute;n</a>
        <?php
            if(!isset($_SESSION['USR']))
            {
        ?>
        <form action="revision.php" method="post" >
            <div><label>Usuario:</label><input type="text" name="nombre"></div>
            <div><label>Clave:</label><input type="text" name="clave"></div>
            <input type="submit" value="Acceder">
        </form>
        <?php
            }
        ?>
    </body>
</html>