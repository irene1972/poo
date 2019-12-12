<?php
// CALL: Este método mágino nos permite que cuando llamamos a un método que todavía 
// no existe se ejecuta este método (similar a la clásica sobrecarga de métodos que hay en otros lenguages)

class Persona{
  private $nombre;
  private $edad;
  private $ciudad;

  public function __construct( $nombre, $edad, $ciudad ){
    $this->nombre = $nombre;
    $this->edad = $edad;
    $this->ciudad = $ciudad;
  }

  public function __call( $name, $arguments ){
    // $name nos da el nombre del método al que estamos llamando y NO existe

    $prefijo_metodo = substr($name, 0, 3); //---> devuelve el string: get

    if( $prefijo_metodo == 'get' ){

      $nombre_atributo = substr(strtolower($name), 3); //---> devuelve el string: name

      if( !isset($this->$nombre_atributo) ){
        return 'No existe el método: ' . $name . ' | Ni la propiedad: ' . $nombre_atributo;
      }else{
        return $this->$nombre_atributo;
      }

    }else{

      return 'No existe el método: ' . $name;

    }

  }

}



$persona = new Persona( 'María', 30, 'Palencia' );
// Estoy llamando a un método que NO EXISTE y no hay error porque responde el método mágico CALL
echo $persona->getNombre();
echo '<br>' . $persona->getEdad();
echo '<br>' . $persona->getCiudad();

echo '<br>' . $persona->getHarsas();

echo '<br>' . $persona->setNombre( 'Petra' );






