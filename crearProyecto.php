<!DOCTYPE html>
<?php
require_once 'Proyectos.php';
require_once 'ProyectosDB.php';

?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="controladorAdmin.php">
            <p><label>Nombre del proyecto</label>
                <input type="text" name="nombre"/></p>
            <p><label>Descripcion del proyecto</label>
                <textarea name="descripcion"></textarea></p>
            <p> <label> Alumnos</label></p>
<!--            Aqui tiene que ir un listado de todos los alumnos para añadirlos -->
            <input type="submit" value="Crear Proyecto" name="accion"/>
        </form>
        
    </body>
</html>
