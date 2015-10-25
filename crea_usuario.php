<!DOCTYPE html>

<head>
    <title>
        Sign In
    </title>
    <meta charset="utf-8">
</head>
<body>
<div class="general">
    <div class="formulario" align="center" >
        <div>
            <h1>Ingrese datos</h1>
        </div>
        <form action="valida_usuario.php" method="post" autocomplete="on">
            <table>
                <tr>
                    <td>
                        RUT:
                    </td>
                    <td>
                        <input type="text" name="rut" placeholder="RUT" required autofocus>
                    </td>
                </tr>
                <tr>
                    <td>
                        MAIL:
                    </td>
                    <td>
                        <input type="email" name="email" placeholder="tuEmail@dominio.com" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        PASSWORD:
                    </td>
                    <td>
                        <input type="password" name="password" placeholder="PASSWORD" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        REPITE:
                    </td>
                    <td>
                        <input type="password" name="repite" placeholder="REPITE PASSWD" required>
                    </td>
                </tr>
            </table>
            <input type="submit" name="aceptar" value="ACEPTAR">
        </form>
        <br>
        <a href='login.php'>Volver</a>
    </div>
</div>
</body>
<?php
/**
 * Created by PhpStorm.
 * User: mauricio
 * Date: 04-10-2015
 * Time: 0:58
 */

