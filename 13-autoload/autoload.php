<?php

// Por convención esta función suele llamarse así, aunque puede llamarse de otra forma
function app_autoloader( $class ){
  require_once 'clases/' . $class . '.php';
}

// es una función de php que incluye todas las clases que tengamos en la carpeta 'clases/'
spl_autoload_register( 'app_autoloader' );