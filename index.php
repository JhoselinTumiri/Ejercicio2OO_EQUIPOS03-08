<?php
//Probando clase 
include "clases/NsDanza.php";
 use NsDanza\Actividad;
$actividad1=new Actividad("", "Exposición Zuloaga", "Sala de Armas","27-11-2021");

$resultado =""; 
$resultado .= $actividad1->mostrar();
include "includes/vista_resultado.php";
?>