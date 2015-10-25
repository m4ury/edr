<?php
/**
 * Created by PhpStorm.
 * User: mauricio
 * Date: 25-10-2015
 * Time: 12:56
 */
include_once('config/conexion.php');

session_start();
session_destroy();
mysql_close();
header('refresh:0;login.php');