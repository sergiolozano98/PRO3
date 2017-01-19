<?php
//con el include incluimos el archivo gimnasio aqui
include 'Gimnasio.php';
//creamos el objeto semana
$semana=new gym();
//le damos los valor del formulario a cada dia de la semana
$semana->almacenar($_POST["Lunes"]);
$semana->almacenar($_POST["Martes"]);
$semana->almacenar($_POST["Miercoles"]);
$semana->almacenar($_POST["Jueves"]);
$semana->almacenar($_POST["Viernes"]);
$semana->almacenar($_POST["Sabado"]);
echo "El Total de Socios:".$semana->numpersonas();
echo "<br>";
echo "La media de las Personas:".$semana->MediaPersonas();



 ?>
