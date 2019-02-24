<?php

require_once 'usuarioDB.php';
require_once 'usuarios.php';
require_once 'ProyectosDB.php';
require_once 'Proyectos.php';
require_once 'adminDB.php';
require_once 'admin.php';


if (isset($_REQUEST["accion"])) {
    $accion = $_REQUEST["accion"];
    $accion = strtolower($accion);
    $accion = str_replace(" ", "", $accion);

    switch ($accion) {
        case "acceder":
            $exito = usuarioDB::identificarse($_REQUEST['usuario'], $_REQUEST['clave']);
            $exito1 = adminDB::identificarAdmin($_REQUEST['usuario'], $_REQUEST['clave']);
            if ($exito1) {
                header("Location:crearProyecto.php");
            } else if ($exito) {
                $_SESSION["usuario"] = $_REQUEST["usuario"];
                header("Location:verProyectos.php ");
            } else {
                header("Location:index.php?mensaje=Usuario Incorrecto");
            }
            break;

        case "registrar":
            $exito = usuarioDB::guardarUsuario($_REQUEST['login'], $_REQUEST['pass'], $_REQUEST['nombre'], $_REQUEST['ape']);
            if ($exito) {
                header("Location:index.php?mensaje=Usuario Registrado");
            } else {
                header("Location:index.php?mensaje=Fallo al registrar usuario");
            }
            break;
        case "crearproyecto":
            header("Location:loginAdmin.php");
            break;
    }
}