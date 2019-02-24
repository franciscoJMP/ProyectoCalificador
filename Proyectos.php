<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Proyectos
 *
 * @author Francisco
 */
class Proyectos {
        private $id;
        private $titulo;
        private $descripcion;
        private $documentos=[];
        
        function __construct($id, $titulo, $descripcion) {
            $this->id = $id;
            $this->titulo = $titulo;
            $this->descripcion = $descripcion;
           
        }
        function getId() {
            return $this->id;
        }

        function getTitulo() {
            return $this->titulo;
        }

        function getDescripcion() {
            return $this->descripcion;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }

        function addDocumentos($documento){
            array_push($documentos, $documento);
            
        }
        function getDocumentos(){
            return $this->documentos;
        }

}
