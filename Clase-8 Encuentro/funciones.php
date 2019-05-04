<?php
//echo "soy funciones";  // La usamos solo para chequear que estamos trayendo correctamente el archivo de funciones.

function validarRegistro($datos){
    $errores=[];
    $datosFinales = [];

    foreach ($datos as $posicion => $valores) {

      if(!is_array($datos[$posicion])){
        $datosFinales[$posicion] = trim($valores);
      }
      // if($posicion !== "hobbies"){
      //   $datosFinales[$posicion] = trim($valores);
      // }
    } // ver en que caso rompe.... Rta: cuando el dato es un array.

    //var_dump($errores, $datosFinales);

    if($_FILES["avatar"]["error"] !== 0){
      $errores["avatar"]="Hubo un error. Por favor, vuelva a subir la imagen";
    }

    if(strlen($datosFinales["name"]) == 0){
      $errores["name"] = "Por favor complete el campo nombre.";
    } elseif(ctype_alpha($datosFinales["name"]) == false){
      $errores["name"] = "El nombre debe contener solo letras";
    }

    if(!isset($datosFinales["gender"])){
      $errores["gender"] = "Por favor elija una opción";
    }

    if(!isset($datos["hobbies"])){
      $errores["hobbies"] = "Por favor elija una opción";
    }

    if(strlen($datosFinales["email"]) == 0){
      $errores["email"] = "Por favor complete el campo email.";
    } elseif (!filter_var($datosFinales["email"], FILTER_VALIDATE_EMAIL)) {
      $errores["email"] = "Por favor ingrese un email con formato válido.";
    }

    if(strlen($datosFinales["pass"]) == 0){
      $errores["pass"] = "El campo contraseña no puede estar vacío.";
    } if(strlen($datosFinales["pass2"]) == 0){
      $errores["pass"] = "Por favor repita su contraseña.";
    } elseif($datosFinales["pass"] !== $datosFinales["pass2"]){
      $errores["pass"] = "Las contraseñas no coinciden.";
    }


    return $errores;
}

function nextId(){
  // TODO: que pasa si no hay usuario anterior.
  $json = file_get_contents("db.json");
  $array = json_decode($json, true);
  $ultimoUsuario = array_pop($array["usuarios"]);
  $lastId = $ultimoUsuario["id"];

  return $lastId + 1;

}

function armarUsuario(){
  return[
    "id" => nextId(),
    "nombre" => trim($_POST["name"]),
    "genero" => trim($_POST["gender"]),
    "email" => trim($_POST["email"]),
    "pass" => password_hash($_POST["pass"], PASSWORD_DEFAULT),
    "avatar" => "ruta de la imagen o nombre del archivo",
  ];

}
function guardarUsuario($usuario){
  // TODO: que pasa si no hay archivo.
  $json = file_get_contents("db.json");
  $array = json_decode($json, true);

  $array["usuarios"][] = $usuario;
  $array = json_encode($array, JSON_PRETTY_PRINT);

  file_put_contents("db.json", $array);
}



function usuarioLogueado(){


}
function traerUsuarioLogueado(){

}


?>
