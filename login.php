<!DOCTYPE html>

<head>
    <title>
        Login
    </title>
    <meta charset="utf-8">
</head>
<body>
    <div class="general">
        <div class="formulario" align="center">
            <div>
                <h1>Formulario de Ingreso</h1>
            </div>
            <form action="valida_login.php" method="post" autocomplete="on">
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
                        PASSWORD:
                     </td>
                     <td>
                        <input type="password" name="password" placeholder="PASSWORD" required>
                     </td>
                 </tr>
                 <tr>
                     <td>
                         REPITA PSSWD:
                     </td>
                     <td>
                         <input type="password" name="repite" required>
                     </td>
                 </tr>
             </table>
                <input type="submit" name="aceptar" value="ACEPTAR">
            </form>
        </div>
    </div>
</body>

<?php


