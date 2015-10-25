<head>
    <title>
        INICIO
        <meta charset="utf-8">
        <link rel="stylesheet" href="" type="text/css">
    </title>
</head>
<body>
<div class="contenido" align="center">
    <div class="navegacion">
        <nav>
            <a href=#>MI CUENTA</a>
            <a href=#>EDITAR PERFIL</a>
            <a href='logout.php'>CERRAR SESION</a>
        </nav>
    </div>
<?php
include_once('config/conexion.php');
session_start();

if(isset($_SESSION['sesion']))
{
    $ses=$_SESSION['sesion'];
    ?>
<div class="saludo" align="right">
    <?php echo 'logueado como: '.$_SESSION['sesion']; ?>
</div>
<?php
    $query=mysql_query("SELECT * FROM producto pr INNER JOIN usuario us USING (id_usuario) WHERE us.rut_usuario='".$ses."'");
    while ($reg=mysql_fetch_array($query)){
?>
<div class="tabla">
    <table>
<?php        echo $reg['nombre_producto']; ?>
    </table>
</div>
<?php
    }
}else {
    echo "<script>alert('Su session ha expirado')</script>";
    header('refresh:0;login.php');
}
mysql_close();
?>
</div>
</body>