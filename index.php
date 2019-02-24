<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Proyecto de Calificador por Ignacio otro commit de mierda, pablo y permona pelones</title>
    </head>
    <body>
        <form action="controlador.php">
            Usuario:
            <input type="text" name="usuario"/>
            Clave:
            <input type="password" name="clave"/>
            <input type="submit" name="accion" value="Acceder"/>           
        </form>
         <br/>
         
        <form action="controlador.php">
            <p><label>Nombre:</label>
                <input type="text" name="nombre"/></p>
            <p><label>Apellidos</label>
                <input type="text" name="ape"/></p>
            <p><label>Login:</label>
                <input type="text" name="login"/></p>
            <p>
                <label>Contraseña</label>
                <input type="password" name="pass" /></p>
            <input type="submit" name="accion" value="Registrar"/>
        </form>
         
         <?php
            if(isset($_REQUEST['mensaje'])){
                echo $_REQUEST['mensaje'];
            }
         ?>
        
        
    </body>
</html>
