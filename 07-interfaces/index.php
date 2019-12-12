<?php
//INTERFAZ: Es un contrato donde definimos que métodos van a existir y en que orden van

interface Ordenador{

  public function encender();
  public function apagar();
  public function reiniciar();
  public function defragmemtar();
  public function detectarUSB();

}

class iMac implements Ordenador{
  private $modelo;

  public function encender(){}
  public function apagar(){}
  public function reiniciar(){}
  public function defragmemtar(){}
  public function detectarUSB(){}

  function getModelo(){
    return $this->modelo;
  }

  function setModelo( $modelo ){
    $this->modelo = $modelo;
  }

}

$macintosh = new iMac();
$macintosh->setModelo('Macbook PRO');
echo $macintosh->getModelo();
var_dump($macintosh);





