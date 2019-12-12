<h1>Hola Mundo con POO</h1>
<?php

class Coche{

  // Atributos o propiedades(variables)
  public $color = "Rojo";
  public $marca = "Ferrari";
  public $modelo = "Aventador";
  public $velocidad = 300;
  public $caballaje = 500;
  public $plazas = 2;

  // Métodos, son acciones que hace el objeto (funciones)
  public function getColor(){
    return $this->color;
  }

  public function setColor( $color ){
    $this->color = $color;
  }

  public function acelerar(){
    $this->velocidad++;
  }

  public function frenar(){
    $this->velocidad--;
  }

  public function getVelocidad(){
    return $this->velocidad;
  }

}

// Crear un objeto / Instanciar la clase
$coche = new Coche();
var_dump($coche);

echo $coche->getColor() . '<br>';
$coche->setColor( 'Amarillo' );
echo $coche->getColor() . '<br>';

echo $coche->getVelocidad() . '<br>';
$coche->acelerar();
$coche->acelerar();
$coche->frenar();
$coche->acelerar();
echo $coche->getVelocidad() . '<br>';