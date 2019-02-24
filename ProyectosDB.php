<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProyectosDB
 *
 * @author Francisco
 */
require_once 'Conexion.php';
require_once 'Proyectos.php';

class ProyectosDB extends Conexion {

    public static function leerProyectos() {
        $proyectos = [];
        $conexion = parent::conectar();
        $sql = "SELECT * FROM PROYECTOS";
        $consulta = $conexion->query($sql);
        $tupla = $consulta->fetch_array();
        while ($tupla != NULL) {

            $proyecto = new Proyectos($tupla['id'], $tupla['titulo'], $tupla['descripcion']);
            array_push($proyectos, $proyecto);
            $tupla = $consulta->fetch_array();
        }
        $consulta->free();
        return $proyectos;
    }

    public static function leerProyecto($id) {
        $conexion = parent::conectar();
        $sql = "SELECT * FROM PROYECTOS WHERE ID='$id' ";
        $consulta = $conexion->query($sql);
        $tupla = $consulta->fetch_array();
        $proyecto = new Proyectos($tupla['id'], $tupla['titulo'], $tupla['descripcion']);
        $consulta->free();
        return $proyecto;
    }

//    public static function actualizarAlumno($curso, $instrumento, $expediente) {
//        $conexion = parent::conectar();
//
//        $sql = "UPDATE ALUMNADO SET CURSO='$curso',INSTRUMENTO='$instrumento' WHERE EXPEDIENTE='$expediente'";
//        $conexion->query($sql);
//        if ($conexion->connect_errno != NULL) {
//            echo $conexion->error;
//        }
//    }
//
    public static function crearProyecto($titulo, $descripcion) {
        $conexion = parent::conectar();
        $exito = FALSE;
        if ($titulo != "" && $descripcion != "") {
            $sql = "INSERT INTO PROYECTOS (titulo,descripcion) VALUES('$titulo','$descripcion')";
            $conexion->query($sql);
            if ($conexion->connect_errno != NULL) {
                echo $conexion->error;
            }
            $exito=TRUE;
        }
        return $exito;
    }

//
//    public static function matricularAlumno($curso, $expediente) {
//        $conexion = parent::conectar();
//        $sql = "UPDATE ALUMNADO SET CURSO='$curso' WHERE EXPEDIENTE='$expediente'";
//        $conexion->query($sql);
//        if ($conexion->connect_errno != NULL) {
//            echo $conexion->error;
//        }
//    }
}
