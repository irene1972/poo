<?php

class Coche{

  // Atributos o propiedades(variables)
  private $color;
  private $marca;
  private $modelo;
  private $velocidad;
  private $caballaje;
  private $plazas;

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