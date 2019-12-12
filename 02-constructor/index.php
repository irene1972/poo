<?php
// Importamos la clase
require_once 'Coche.php';

// Crear un objeto / Instanciar la clase
$coche = new Coche( 'Rosa', 'Seat', 'Cordoba', 150, 200, 5 );
$coche2 = new Coche( 'Verde', 'Citroen', 'Xara', 250, 220, 2 );
$coche3 = new Coche( 'Azul', 'Renault', 'Clio', 100, 230, 4 );
$coche4 = new Coche( 'Amarillo', 'Mercedes', 'Clase A', 350, 100, 3 );

var_dump($coche);
var_dump($coche2);
var_dump($coche3);
var_dump($coche4);

$coche->color = "Lila";
echo $coche->getColor() . '<br>';

//$coche->marca = "Audi";
$coche->setMarca( 'Audi' );
echo $coche->getMarca() . '<br>';

//$coche->modelo = "horsas";
$coche->setModelo( 'horsas' );
echo $coche->getModelo() . '<br>';

echo $coche->mostrarInformacion( $coche2 );
//echo $coche->mostrarInformacion( 'coche2' );


