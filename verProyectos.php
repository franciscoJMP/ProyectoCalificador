<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require_once 'ProyectosDB.php';
    require_once 'Proyectos.php';
    $proyectos= ProyectosDB::leerProyectos();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <table>
            <tr>
                <th>Titulo</th>
                <th>Descricpicion</th>
                <th>Accion</th>
            </tr>
            <?php
            foreach ($proyectos as $proyecto){
                ?>
            <form action="controlador.php">
                
            
            <tr>
                <td><?php echo $proyecto->getTitulo();?></td>
                <td><?php echo $proyecto->getDescripcion();?></td>
            <input type="hidden" value="<?php echo $proyecto->getId();?>" name="id"/>
            <td><input type="submit" value="Calificar" name="accion"</td>
            </form>
            </tr>
            <?php
            }
            ?>
        </table>
    </body>
</html>
