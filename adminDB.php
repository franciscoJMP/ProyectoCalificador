<?php
require_once 'Conexion.php';
require_once 'admin.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of adminDB
 *
 * @author Ignacio2769
 */
class adminDB extends Conexion{    
    
    public static function identificarAdmin($login, $clave){
        $conexion = parent::conectar();
        $sql1 = "SELECT * FROM administrador";
        $consulta = $conexion->query($sql1);
        $tupla = $consulta->fetch_array();
        $exito = FALSE;

        while ($tupla != null) {

            if ($tupla["login"] == $login && $tupla["clave"] == $clave) {
                $exito = TRUE;
            }
            $tupla = $consulta->fetch_array();
        }
        return $exito;
    }

}
