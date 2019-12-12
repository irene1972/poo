<?php

require_once 'Clases.php';

$persona = new Persona();
//$persona->setNombre('Irene');

$informatico = new Informatico();
//$informatico->setNombre('Marta');
//echo $informatico->sabeLenguages('HTML, CSS, PHP, JS, etc');

$tecnico_redes = new TecnicoRedes();

var_dump($persona);
var_dump($informatico);
var_dump($tecnico_redes);




