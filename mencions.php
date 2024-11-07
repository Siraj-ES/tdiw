<?php
  // Definimos los grados y las menciones asociadas
  $graus = array(
    array("id"=>1,"nom"=>"Enginyeria Informàtica"), 
    array("id"=>2,"nom"=>"Enginyeria de Sistemes de Telecomunicació"),
    array("id"=>3,"nom"=>"Enginyeria Electrònica de Telecomunicació"),
    array("id"=>4,"nom"=>"Enginyeria Química")
  );
  
  // Menciones por cada grado
  $mencions = array( 
    1 => array(
      array("id"=>1,"nom"=>"Eng Software"), 
      array("id"=>2,"nom"=>"Eng Comp"),
      array("id"=>3,"nom"=>"Computació"),
      array("id"=>4,"nom"=>"TIC")
    )
  );

  // Obtenemos el grado seleccionado desde la solicitud
  $grau = $_REQUEST['grau'];

  // Verificamos si existen menciones para el grado seleccionado
  if (isset($mencions[$grau])) {
    // Si hay menciones, las mostramos
    foreach ($mencions[$grau] as $valor) {
      echo "<option value=".$valor['id'].">".$valor['nom']."</option>";
    }
  } else {
    // Si no hay menciones, mostramos una opción vacía o un mensaje indicativo
    echo "<option value=''>No hi ha mencions per aquest grau</option>";
  }
?>
