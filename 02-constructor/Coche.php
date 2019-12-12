<?php

class Coche{

  //**************************************************************************************/
  // Atributos o propiedades(variables)
  //**********************************/
  // PUBLIC: podemos acceder desde cualquier lugar
  public $color;
  
  //PROTECTED: podemos acceder desde la clase que los define y desde clases que hereden de esta misma clase
  protected $marca;
  
  // PRIVATE: únicamente se puede acceder desde esta clase
  private $modelo;
  private $velocidad;
  private $caballaje;
  private $plazas;
  //**************************************************************************************/

  // Constructor
  public function __construct( $color, $marca, $modelo, $velocidad, $caballaje, $plazas ){
    $this->color = $color;
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->velocidad = $velocidad;
    $this->caballaje = $caballaje;
    $this->plazas = $plazas;
  }

  // Métodos, son acciones que hace el objeto (funciones)
  public function getColor(){
    return $this->color;
  }

  public function getMarca(){
    return $this->marca;
  }

  public function getModelo(){
    return $this->modelo;
  }

  public function getVelocidad(){
    return $this->velocidad;
  }

  public function setColor( $color ){
    $this->color = $color;
  }

  public function setMarca( $marca ){
    $this->marca = $marca;
  }

  public function setModelo( $modelo ){
    $this->modelo = $modelo;
  }

  public function acelerar(){
    $this->velocidad++;
  }

  public function frenar(){
    $this->velocidad--;
  }


}