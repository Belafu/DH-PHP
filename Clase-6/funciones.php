<?php
echo "soy funciones";

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


function armarUsuario(){

}
function guardarUsurio($usuario){

}



?>
