<?php
/**
 * Created by PhpStorm.
 * User: mauricio
 * Date: 03-10-2015
 * Time: 17:33
 */
$conn=mysql_connect('localhost','root') or die('Falla en la conexion del Host'.mysql_error());
$data_base=mysql_select_db('edr',$conn) or die(''.mysql_error());
