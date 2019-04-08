<?php
echo "<br>";
$numA = 4; echo "numA: ".$numA;echo "<br>";
$numB = 2; echo "numB: ".$numB;echo "<br>";
  if($numA > $numB ){echo "El mayor es ".$numA;}
  else {
    echo "El mayor es ".$numB;
  }
echo "<br>";
echo "<br>";
echo "Utilizando la función propia de PHP rand(x,y), donde “x” es el número mínimo e “y” el número máximo, generar un número aleatorio entre 1 y 5, asignarlo a una variable e imprimir la variable si y sólo si el número generado es 3 o 5.";echo "<br>";

  $var = rand(1,5);
      echo $var;echo "<br>";
  if ($var == 3 ||$var == 5 ) {
    echo $var;
  }
  else {
    echo "El número NO es 3";
  }
echo "<br>";
echo "<br>";
echo "Generar un número entre 1 y 100, controlar si es mayor que 50. En el caso que sea verdadero, devolver “El número es mayor a 50”, en el caso que sea falso: “El número es menor a 50”.
¿Qué pasa si el número es 50?";echo "<br>";
$var2 = rand(1,100);echo "Valor Ramdon: ".$var2;echo "<br>";
if ($var2 > 50 ) {
  echo "El número es mayor a 50";
}
else {
  if ($var2 == 50) {
    echo "El número es 50";
  }
  echo "El número es menor a 50";
}
echo "<br>";
echo "<br>";
$nombreDeUsuario="admin";
$ContraseniaDeUsuario="1234";
if ($nombreDeUsuario =="admin" &&  $ContraseniaDeUsuario="1234") {
  echo "Bienvenido!";echo "<br>";
}
else {
  if ($nombreDeUsuario != "admin") {
    echo "Error nombre de usuario";echo "<br>";
  }
  else {
    echo "Error Contrasenia de usuario";echo "<br>";
  }
}

echo "Tendremos 3 variables: edad (un número), casado (un booleano) y sexo (string que puede ser “Masculino”, “Femenino” u “Otro”). Si la persona es mayor a 18 años y no está casado se imprimirá el mensaje Bienvenido  ";echo "<br>";
$edad = 20;echo "edad: ".$edad;echo "<br>";
$casado = true;echo "casado: ".$casado;echo "<br>";
$sexo = "otro";echo "sexo: ".$sexo;echo "<br>";

  if ($sexo == "otro"||$edad > 18 && $casado==false ) {
    echo "Bienvenido";echo "<br>";
  }
echo "<br>";
echo "Definir una variable que se llame cantidadDeAlumnos que contenga un número. Luego, escribir el siguiente código: (sin copiar y pegar!!)";echo "<br>";
$cantidadDeAlumnos = 0;
if ($cantidadDeAlumnos) {
echo "true";
}
else {
echo "false";
}

echo "<br>";echo "<br>";
echo "Definir una variable numero con un número. Imprimir “El número es par” si lo es o “El número es impar” si no lo es. Se pide resolver este ejercicio con un if ternario (operadores  ?  :)";echo "<br>";
$numero =20; echo "numero: ".$numero;echo "<br>";
$res = ($numero%2==0)? "el numero es par" : "el numero es impar";
echo $res;echo "<br>";
echo "<br>";
echo "  Crear una variable nota con un valor del 1 al 10. Utilizando un switch generar la siguiente lógica:
Si la nota es menor a 4 imprimir “desaprobado”
Si la nota es 4 o 5 imprimir “zafamos”
Si la nota este entre 6 y 8 imprimir “Bien!!!”
Si la nota es un 9 imprimir “MUY bien!!”
Si la nota es un 10 imprimir “Excelente!!!!!”    ";echo "<br>";

$nota =0; echo "nota: ".$nota;echo "<br>";
switch ($nota) {
  case 0: echo "La nota es cero";//OJO QUE EL CERO ES FALSE ,ASI QUE PONGAMOS ESTE CASO
    break;
  case ($nota<4 &&$nota>0): echo "desaprobado";
    break;
  case ($nota==4 ||$nota==5): echo "zafamos";
    break;
  case ($nota<9 &&$nota>5): echo "Bien!!";
    break;
  case 9: echo "MUY Bien!!";
    break;
  case 10: echo "Excelente!!";
    break;
  default:
    echo "El número no es válido.";
    break;
}
 ?>
