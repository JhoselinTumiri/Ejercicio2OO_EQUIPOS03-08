<?php
//Probando clase 
include "clases/NsDanza.php";
 use NsDanza\Actividad;
 use NsDanza\Baile;


 //objetos creados
$actividad1=new Actividad("", "Exposición Zuloaga", "27-11-2021","Sala de Armas");
$baile1=new Baile("", "Master Class Zumba ", "28-12-2021","Estadio Perico de Beltrán","Juan Medina Valtierra",42);
$actividad2 = new Actividad("", "Denomicacion de Origen Navarro", "30-12-2021", "Baluarte");
$baile2 = new Baile("", "Bailes de Salón", "01-01-2022", "Baluarte", "Maria Lekuona", 27);

//Llamada al método mostrar
$resultado =""; 

$resultado .= $actividad1->mostrar()."<br>";
$resultado .= $baile1->mostrar()."<br>";
$resultado .= $actividad2->mostrar() . "<br>";
$resultado .= $baile2->mostrar() . "<br>";

include "includes/vista_resultado.php";
?>