<?php

namespace NsDanza;
class Actividad{
    private $id;
    private $descripcion;
    private $fecha;
    private $lugar;

    function __construct($id, $descripcion, $fecha, $lugar)
    {
        $this->id =$id;
        $this->descripcion =$descripcion;
        $this->fecha =$fecha;
        $this->lugar =$lugar;
    }
    function getId(){
        return $this->id;
    }
    function getDescripcion(){
        return $this->descripcion;
    }
    function getFecha(){
        return $this->fecha;
    }
    function getLugar(){
        return $this->lugar;
    }
    function setId($id){
        $this->id =$id;
    }
    function setDescripcion($descripcion){
        $this->descripcion =$descripcion;
    }
    function setFecha($fecha){
        $this->fecha =$fecha;
    }
    function setLugar($lugar){
        $this->lugar =$lugar;
    }
    function mostrar(){
        return "La actividad $this->descripcion se realizara en: $this->lugar el: $this->fecha";
    }
}


?>