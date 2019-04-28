<?php
$titulo = 'Tutorial PHP';
$paises = ["Brazil", "urugays", "francia", "noruega","chile","bolivia","Kasakistan","Estados-Unidos","Mexico","Canada","Islandia"];

$nombre="";
$email='';
$nombreUsuario='';
$errores=[];
$pais="";
function validarRegistro($datos){
    $errores=[];
    $datosFinales = [];

    foreach ($datos as $posicion => $valores) {
      if(!is_array($datos[$posicion])){
        $datosFinales[$posicion] = trim($valores);
      }
    }
    //var_dump($errores, $datosFinales);

    if(strlen($datosFinales["name"]) == 0){
      $errores["name"] = "Por favor complete el campo nombre.";
    } elseif(ctype_alpha($datosFinales["name"]) == false){
      $errores["name"] = "El nombre debe contener solo letras";
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
if ($_POST) {
  $nombre = $_POST["name"];
  $email = $_POST["email"];
  $nombreUsuario = $_POST["username"];
  $pais=$_POST["pais"];
  $errores= validarRegistro($_POST);
  //var_dump($errores);
  if (empty($errores)) {
    header('Location: felicitaciones.php');
  }else {
    var_dump($errores);
  }

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>
<header>
  <h1><u><b><?=  $titulo  ?> </b></u></h1>
  <p>“PHP es un lenguaje de programación de uso general de código del lado del servidor originalmente diseñado para el desarrollo web de contenido dinámico.”</p>
</header>
<?php var_dump($_GET)?>
    <div id='fg_membersite'>
        <form id='register' action="register.php" method='post'>
            <fieldset >
                <legend>Registrate</legend>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='<?= $nombre  ?>' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='<?= $email  ?>' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='<?= $nombreUsuario  ?>' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <br>
                <div class='container'>
                <label for="pais">Pais</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="pais" value='<?= $pais ?>' >
                    <?php foreach ($paises as $value): ?>
                        <option value=<?=$value?>> <?=$value?></option>
                    <?php endforeach;?>
                  </select>
                </div>
                <br>
                <div class='container' style='height:80px;'>
                    <label for='pass' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='pass' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div><!--PROBAR:
                  http://localhost/carpetaPersonal/DH-PHP/Clase-6/register.php?versionCorta-->
                <?php if(!isset($_GET["versionCorta"])): ?><!--SI existe este campo no escribir el nuevo imput  empty =>me devuelve tru porque es vacio-->
                  <div class='container' style='height:80px;'>
                      <label for='pass2' >Confirmar Contaseña*:</label><br/>
                      <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                      <input type='password' name='pass2' id='password' maxlength="50" />
                      <div id='register_password_errorloc' class='error' style='clear:both'></div>
                  </div>
                <?php endif;?>

                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
</html>
