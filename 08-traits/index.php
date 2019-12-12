<?php
// TRAIT: Cuando queremos crear un método para que lo compartan diferentes clases 
// que no tienen porque estar relacionadas entre ellas

trait Utilidades{
  public function mostrarNombre(){
    return '<h1>El nombre es ' . $this->nombre . '</h1>';
  }
}

class Coche{
  public $nombre;
  public $marca;

  use Utilidades;
}

class Persona{
  public $nombre;
  public $apellidos;

  use Utilidades;
}

class VideoJuego{
  public $nombre;
  public $anio;

  use Utilidades;
}

$coche = new Coche();
$coche->nombre='Ferrari';
echo $coche->mostrarNombre();

$persona = new Persona();
$persona->nombre='Irenisa';
echo $persona->mostrarNombre();

$videojuego = new VideoJuego();
$videojuego->nombre = 'GTA 4';
echo $videojuego->mostrarNombre();




