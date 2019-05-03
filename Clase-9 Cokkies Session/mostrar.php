<?php
session_start();//NUNCA OLVIDAR PONER ESTO EN CADA PAGINA QUE QUIERAS USAR EL $_SESSION
var_dump($_POST);
echo "<hr>";
//$valor = $_SESSION['contador'];
if (isset($_POST['buttonR'])) {//existe y no tiene valor NULL : En este caso tiene valor=''
  $_SESSION['contador'] = 0;
}
if (isset($_POST['buttonI'])) {//existe y no tiene valor NULL : En este caso tiene valor=''
   $_SESSION['contador']++;
}
var_dump($_SESSION);
echo "<hr>";
if (isset($_SESSION['contador'])) {
  echo  'El valor de contador es: '.$_SESSION['contador'];
}else {
  echo "No existe contador";
}

?>
