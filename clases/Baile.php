<?php

class Baile extends Actividad {
    private static $profesor;
    private $claseHora;

    function __construct($id, $descripcion, $fecha, $lugar, $profesor,$claseHora)
    {
        parent::__construct($id, $descripcion, $fecha, $lugar, $claseHora);
        Baile::$profesor = $profesor;
        $this->claseHora = $claseHora;

    }

    function getProfesor() {
        return $this->profesor;
    }

    function getClaseHora() {
        return $this->claseHora;
    }

    function setProfesor($profesor) {
        $this->profesor = $profesor;
    }

    function setClaseHora($claseHora) {
        $this->claseHora = $claseHora;
    }

   function mostrar() {
       return parent::mostrar() . "y la realiza" . Baile::$profesor . " que cobra la hora $this->claseHora €";
   } 
}
?>