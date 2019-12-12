<?php
// METODO MÁGICO DESTUCTOR: cuando el objeto ya no va a usarse más 
// porque p.e. hemos llegado al final de la página web... entonces se destruye el objeto

class Usuario{
  public $nombre;
  public $email;

  public function __construct(){
    echo 'Creando instancia del objeto Usuario<br>';
  }

  public function __destruct(){
    echo 'Destruyendo instancia del objeto Usuario<br>';
  }

}


$usuario = new Usuario();

for( $i = 0; $i <= 30; $i++ ){
  echo $i . '<br>';
}





