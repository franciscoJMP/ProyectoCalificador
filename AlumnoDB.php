<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AlumnoDB
 *
 * @author Francisco
 */
require_once 'Conexion.php';
require_once 'Alumno.php';
class AlumnoDB extends Conexion {
    public static function leerAlumnos(){
        $alumnos = [];     
        $conexion= parent::conectar();
        $sql="SELECT * FROM ALUMNADO";
        $consulta=$conexion->query($sql);
        $tupla = $consulta->fetch_array();
        while ($tupla != NULL) {
            
            $alumno = new Alumno($tupla['expediente'],$tupla['nombre'],$tupla['apellidos'],$tupla['telefono'],$tupla['nacimiento'],$tupla['curso'],$tupla['instrumento']);
            
            
            array_push($alumnos, $alumno);
            
            $tupla = $consulta->fetch_array();
        }
        $consulta->free();


        return $alumnos;
        
    }
    public static function leerAlumno($expediente){
        $conexion= parent::conectar();
        $sql="SELECT * FROM ALUMNADO WHERE EXPEDIENTE='$expediente' ";
        $consulta=$conexion->query($sql);
        $tupla = $consulta->fetch_array();
        $alumno = new Alumno($tupla['expediente'],$tupla['nombre'],$tupla['apellidos'],$tupla['telefono'],$tupla['nacimiento'],$tupla['curso'],$tupla['instrumento']);
        $consulta->free();
        return $alumno;
    }
     public static function actualizarAlumno($curso,$instrumento,$expediente){
        $conexion = parent::conectar();
        
        $sql = "UPDATE ALUMNADO SET CURSO='$curso',INSTRUMENTO='$instrumento' WHERE EXPEDIENTE='$expediente'";
        $conexion->query($sql);
        if ($conexion->connect_errno != NULL) {
            echo $conexion->error;
        }
    }
    public static function crearAlumno($nombre,$apellido,$telefono,$nacimiento,$curso,$instrumento){
         $conexion = parent::conectar();
        
        $sql="INSERT INTO ALUMNADO (nombre,apellidos,telefono,nacimiento,curso,instrumento) VALUES('$nombre','$apellido','$telefono','$nacimiento','$curso','$instrumento')";
        $conexion->query($sql);
        if ($conexion->connect_errno != NULL) {
            echo $conexion->error;
        }
    }
     public static function leerAlumnosCurso($idcurso){
        $alumnos = [];     
        $conexion= parent::conectar();
        $sql="SELECT * FROM ALUMNADO WHERE CURSO='$idcurso'";
        $consulta=$conexion->query($sql);
        $tupla = $consulta->fetch_array();
        while ($tupla != NULL) {
            
            $alumno = new Alumno($tupla['expediente'],$tupla['nombre'],$tupla['apellidos'],$tupla['telefono'],$tupla['nacimiento'],$tupla['curso'],$tupla['instrumento']);
            
            
            array_push($alumnos, $alumno);
            
            $tupla = $consulta->fetch_array();
        }
        $consulta->free();


        return $alumnos;
        
    }
     public static function matricularAlumno($curso,$expediente){
        $conexion = parent::conectar();        
        $sql = "UPDATE ALUMNADO SET CURSO='$curso' WHERE EXPEDIENTE='$expediente'";
        $conexion->query($sql);
        if ($conexion->connect_errno != NULL) {
            echo $conexion->error;
        }
    }
}
