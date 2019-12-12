<?php

require_once 'Configuracion.php';

Configuracion::setColor('gris');
Configuracion::setNewsletter(true);
Configuracion::setEntorno('localhost');

echo Configuracion::$color . '<br>';
echo Configuracion::$newsletter . '<br>';
echo Configuracion::$entorno . '<br>';

$configuracion = new Configuracion();
echo '************<br>';
Configuracion::$color = 'verde';
echo Configuracion::$color;
var_dump($configuracion);




