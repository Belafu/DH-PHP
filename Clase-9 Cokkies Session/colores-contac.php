<?php

session_start();
$color=$_SESSION['color'];
var_dump($_SESSION);
echo "<hr>";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CONTAC</title>
  </head>
  <body style= "background-color:<?= $_SESSION['color'] ?>;">

  </body>
</html>
