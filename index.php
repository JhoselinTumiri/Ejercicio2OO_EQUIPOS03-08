<?php
//Probando clase 
include "clases/NsDanza.php";
 use NsDanza\Actividad;
 use NsDanza\Baile;

 //objetos creados
$actividad1=new Actividad("", "Exposición Zuloaga", "27-11-2021","Sala de Armas");
$baile1=new Baile("", "Master Class Zumba ", "28-12-2021","Estadio Perico de Beltrán","Juan Medina Valtierra",42);
$baile2 = new Baile("","Exposición Zuloaga", "Sala de Armas","27-11-2021","","");


//Llamada al método mostrar
$resultado =""; 

$resultado .= $actividad1->mostrar()."<br>";
$resultado .= $baile1->mostrar()."<br>";
$resultado .= $baile2->mostrar();

include "includes/vista_resultado.php";
?>