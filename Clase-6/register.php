<?php
$titulo = 'Tutorial PHP';
$paises = ["Brazil", "urugays", "francia", "noruega","chile","bolivia","Kasakistan","Estados-Unidos","Mexico","Canada","Islandia"];

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
        <form id='register' action='' method='get'>
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* campos requeridos</div>
                <input type='text' class='spmhidip' name='' />

                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <br>
                <div class='container'>
                <label for="pais">Pais</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="pais">
                    <?php foreach ($paises as $value): ?>
                        <option value=<?=$value?>> <?=$value?></option>
                    <?php endforeach;?>
                  </select>
                </div>
                <br>
                <div class='container' style='height:80px;'>
                    <label for='password' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div><!--PROBAR:
                  http://localhost/carpetaPersonal/DH-PHP/Clase-6/register.php?versionCorta-->
                <?php if(!isset($_GET["versionCorta"])): ?>
                  <div class='container' style='height:80px;'>
                      <label for='confir-password' >Confirmar Contaseña*:</label><br/>
                      <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                      <input type='password' name='confir-password' id='password' maxlength="50" />
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
