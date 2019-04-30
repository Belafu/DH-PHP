<?PHP

$nombre="";
$email='';
$nombreUsuario='';
$contra='';

if ($_POST) {
  $nombre = $_POST["name"];
  $email = $_POST["email"];
  $nombreUsuario = $_POST["username"];
  $contra = $_POST["password"];
  echo "Tu contraseña es: ".$contra."<br>";
  $nuevoUsuario = armarUsuario();
  var_dump($nuevoUsuario);
  coinciden($contra,$nuevoUsuario["contraseña"]);
}

function armarUsuario(){
  return  [
    "Nombre" => $_POST["name"],
    "Email" =>  $_POST["email"],
    "Usuario" => $_POST["username"],
    "contraseña" => password_hash($_POST["password"],PASSWORD_DEFAULT)
  ];
}
function coinciden($contraseña,$contraHasheada){
  if (password_verify($contraseña,$contraHasheada)) {
    echo "coindiden las contraseñas";
  }
  else {
    echo "NO coinciden";
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

    <div id='fg_membersite'>
        <form id='register' action='register.php' method='post'>
            <fieldset >
                <legend>Registrate</legend>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='<?= $nombre ?>' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='<?= $email ?>' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='<?= $nombreUsuario ?>' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='password' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" required/>
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>

                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
</html>
