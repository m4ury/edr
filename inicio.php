<?php
/**
 * Created by PhpStorm.
 * User: mauricio
 * Date: 03-10-2015
 * Time: 19:00
 */
include_once('config/conexion.php');
session_start();

if(isset($_SESSION['sesion']))
{
    $ses=$_SESSION['sesion'];
    echo 'logueado como: '.$_SESSION['sesion'];
    $query=mysql_query("SELECT * FROM producto pr INNER JOIN usuario us USING (id_usuario) WHERE us.rut_usuario='".$ses."'");
    while ($reg=mysql_fetch_array($query)){
        echo $reg['nombre_producto'];
    }
}else {
    echo "<script>alert('Su session ha expirado')</script>";
    header('refresh:0;login.php');
}
mysql_close();