<?php
// METODO MÁGICO __toString: Este método mágico hace que al hacer un echo de un objeto se ejecute 
// el código que pongamos dentro de dicho método mágico

class Usuario{
  public $nombre;
  public $email;

  public function __construct(){
    $this->nombre = 'Irensilla';
    $this->email = 'ire@ire.es';

    echo 'Creando instancia del objeto Usuario<br>';
  }

    public function __toString(){
      return "Hola, {$this->nombre}, estás registrado con {$this->email}<br>";
    }

  public function __destruct(){
    echo 'Destruyendo instancia del objeto Usuario<br>';
  }

}


$usuario = new Usuario();
// Ahora el echo de este objeto ya no da error
echo $usuario;







