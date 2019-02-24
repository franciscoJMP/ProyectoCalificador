<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once 'usuarioDB.php';
require_once 'usuarios.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        usuarioDB::guardarUsuario("Darkcrosos", "1234", "PAO", "COÑO");

        $exito = usuarioDB::identificarse("Darkcrosos", "12");
        if ($exito) {
            echo "usuario correcto";
        } else {
            echo "Mierda resultado";
        }
        ?>
    </body>
</html>
