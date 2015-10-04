<?php
/**
 * Created by PhpStorm.
 * User: mauricio
 * Date: 03-10-2015
 * Time: 16:20
 */
include_once('config/conexion.php');
session_start();

$rut=$_POST['rut'];
$pass=sha1($_POST['password']);
var_dump($pass);

$query=mysql_query("SELECT * FROM usuario WHERE rut_usuario='".$rut."' AND pwd_usuario='".$pass."'");
var_dump($query);
if($reg=mysql_fetch_array($query)) {
    $_SESSION['sesion'] = $reg['rut_usuario'];
    header('location:inicio.php');}
else{
    echo "<script>alert('ERORR: password y/o contraseña erronea, favor intente denuevo');</script>";
    header('refresh:0;login.php');
}
mysql_close();