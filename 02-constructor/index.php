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

/*
echo $coche->getColor() . '<br>';
$coche->setColor( 'Amarillo' );
echo $coche->getColor() . '<br>';

echo $coche->getVelocidad() . '<br>';
$coche->acelerar();
$coche->acelerar();
$coche->frenar();
$coche->acelerar();
echo $coche->getVelocidad() . '<br>';
*/