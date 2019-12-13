<?php
// NAMESPACES: Permite organizar el código agrupando clases en común. O agrupando en paquetes diferentes clases
// IMPORTANTE: Una vez ponemos un namespace hay que usarlo para llamar al objeto sino salta un error

require_once 'autoload.php';

//ESPACIOS DE NOMBRES Y PAQUETES
use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;

use PanelAdministrador\Usuario as UsuarioAdmin;

// También sería válido hacerlo en una sola línea y separado por comas:
//use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada;


class Principal{

  public $usuario;
  public $categoria;
  public $entrada;

  public function __construct(){
    //$this->usuario = new Usuario();  //---> esto es incorrecto porque no estamos usando el namespace
    $this->usuario = new Usuario();
    $this->categoria = new Categoria();
    $this->entrada = new Entrada();
  }

}

$principal = new Principal();
var_dump($principal->usuario);
var_dump($principal->categoria);
var_dump($principal->entrada);

echo '<br>***********************<br>';

$usuario = new UsuarioAdmin();
var_dump($usuario);