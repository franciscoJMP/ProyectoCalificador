<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuarios
 *
 * @author Ignacio2769
 */
class usuarios {
    private $login;
    private $clave;
    private $nombre;
    private $apellidos;
    private $activo;
    private $IdProyecto;
    
    function __construct($login, $clave, $nombre, $apellidos, $activo, $IdProyecto) {
        $this->login = $login;
        $this->clave = $clave;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->activo = $activo;
        $this->IdProyecto = $IdProyecto;
    }
    
    function getLogin() {
        return $this->login;
    }

    function getClave() {
        return $this->clave;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getActivo() {
        return $this->activo;
    }

    function getIdProyecto() {
        return $this->IdProyecto;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setActivo($activo) {
        $this->activo = $activo;
    }

    function setIdProyecto($IdProyecto) {
        $this->IdProyecto = $IdProyecto;
    }
}
