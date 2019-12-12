<?php

require_once 'Usuario.php';

echo Usuario::URL_COMPLETA;
echo '<br>*************<br>';
$usuario = new Usuario();
echo $usuario::URL_COMPLETA;
var_dump($usuario);




