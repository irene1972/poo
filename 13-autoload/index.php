<?php
// AUTOLOAD: se usa para evitar hacer uso de demasiados require_once en cada una de las páginas

//*******************/
//Sistema antiguo (Ok)
//*******************/
// require_once 'clases/usuario.php';
// require_once 'clases/categoria.php';
// require_once 'clases/entrada.php';

//$usuario = new Usuario();

//echo $usuario->nombre;
//echo '<br>';
//echo $usuario->email;



//****************/
//Sistema Autoload
//****************/
// Se usa el archivo autoload.php. Con él se hace un require_once de todas las clases 
// que existen dentro de la carpeta 'clases/'
require_once 'autoload.php';

$usuario = new Usuario();
$categoria = new Categoria();
$entrada = new Entrada();

echo $usuario->nombre;
echo '<br>';
echo $usuario->email;
echo '<br><br>';
echo $categoria->nombre;
echo '<br>';
echo $categoria->descripcion;
echo '<br><br>';
echo $entrada->titulo;
echo '<br>';
echo $entrada->fecha;
echo '<br><br>';