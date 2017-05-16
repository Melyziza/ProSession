<?php
include '../lib/Conexion.php';
/*Instacion */
$conn=new Conexion;

if ($conn->conectar())
{  
$nom=$_POST["nombre"];
$clave=$_POST["clave"];


$sql="INSERT INTO productos(nombre,clave) values('$nom',$clave)";

echo $sql;
}
$sqlip="select host from information_schema.processlist WHERE ID=connection_id();";
        $resultado = $miconn->query($sqlip);
        


//Consultas de seleccion que devuelven un conjunto de resultados
        if($resultado = $miconn->query($sql))
        {
        //liberar el conjunto de resultados
        $miconn->close();
        }     
        
        ?>