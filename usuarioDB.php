<?php

require_once 'Conexion.php';
require_once 'usuarios.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuarioDB
 *
 * @author Ignacio2769
 */
class usuarioDB extends Conexion {

    public static function identificarse($usuario, $contrasena) {
        $conexion = parent::conectar();
        $sql = "SELECT * FROM usuarios";
        $consulta = $conexion->query($sql);
        $tupla = $consulta->fetch_array();
        $exito = FALSE;

        while ($tupla != null) {

            if ($tupla["login"] == $usuario && $tupla["clave"] == $contrasena) {
                $exito = TRUE;
            }
            $tupla = $consulta->fetch_array();
        }

        return $exito;
    }

    public static function guardarUsuario($login, $clave, $nombre, $apellidos) {
        $exito=FALSE;
        if ($login != "" && $clave != "" && $nombre != "" && $apellidos != "") {
            $conexion = parent::conectar();
            $sql = "INSERT INTO usuarios (login, clave, nombre, apellidos, activo) VALUES ('$login', '$clave', '$nombre', '$apellidos', '0')";
            $conexion->query($sql);
            $exito=TRUE;
        }
        return $exito;
    }

}
