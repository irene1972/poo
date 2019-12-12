<?php
//CLASE ABSTRACTA: Clase que no se puede instanciar pero si podemos heredar de ella

abstract class Ordenador{
  public $encendido;

  //Si un método es abstracto no puede estar definido en la clase abstracta, sino en las clase que herede de ella
  abstract public function encender();
  //{
    //$this->encendido = true;
  //}

  public function apagar(){
    $this->encendido = false;
  }
}

class PcAsus extends Ordenador{
  public $software;

  public function encender(){
    $this->encendido = true;
  }

  public function arrancarSoftware(){
    $this->software = true;
  }

}

//echo Usuario::URL_COMPLETA;
//echo '<br>*************<br>';
$ordenador = new PcAsus();
$ordenador->arrancarSoftware();
$ordenador->encender();
$ordenador->apagar();
//echo $usuario::URL_COMPLETA;
var_dump($ordenador);




