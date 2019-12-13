<?php
// Tratamiento de EXCEPCIONES (errores)

// TRY/CATCH: Sirve para capturar excepciones en código susceptible a errores (nosotros vamos a forzar el error con el throw)
try{

  if( isset( $_GET['id'] ) ){
    echo "<h1>El parámetro es: {$_GET['id']}</h1>";
  }else{
    // Creamos el objeto Exception que ya existe dentro del lenguage PHP
    // ---> esto hace saltar un Error PHP ¿cómo tratarlo? Con un try/catch
    throw new Exception('<br>Faltan parámetros por la URL'); 
  }

}catch(Exception $e){

  echo "Ha habido un error: " . $e->getMessage();

}finally{

  //El finally es el trozo de código que se ejecuta SIEMPRE después del catch
  echo "<br>Todo correcto";

}






