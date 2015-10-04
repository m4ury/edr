<?php
/**
 * Created by PhpStorm.
 * User: mauricio
 * Date: 03-10-2015
 * Time: 19:00
 */
session_start();

if(isset($_SESSION['sesion'])){
    echo 'logueado como: '.$_SESSION['sesion'];
}else{
    echo "<script>alert('Su session ha expirado')</script>";
    header('refresh:0;login.php');
}

session_destroy();