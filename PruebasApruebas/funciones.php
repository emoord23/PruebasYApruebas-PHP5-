


<?php
/*
 * Este archivo contendrá las funciones del proyecto que sean comunes, como la conexión.
 *
 */

//Conexion a la BBDD
function conectaBBDD(){
    //$conexion = new mysqli('mysql.hostinger.es', 'u493304553_root', '123456', 'u493304553_cetys');
        $conexion = new mysqli('localhost', 'root', '', 'test');
        $consulta = $conexion->query("Set names utf8");
        return $conexion;
}
