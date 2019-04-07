<?php

$variable01 = true;

$variable02 = false;

$variable03 = 0;

$variable04 = 1;

$variable05 = 6;

$variable06 = '';

$variable07 = "3";

$variable08 = "true";

$variable09 = 'false';

$variable10 = null;

function tipoDato($varN)
{
    if ( $varN == true )
    {
        echo 'el valor ' . $varN . ' es verdadero.';
    }
    else
    {
        echo 'el valor' . $varN . ' es falso.';
    }
}

tipoDato($variable10);


$animales = ["leon ","cebra ","jirafa ","pingui ","mono "];
echo "<br>";
var_dump($animales);
$animales[5] = "NuevoA1 ";
$animales[6] = "NuevoA2";

var_dump($animales);
echo "<br>";
echo "Me gusta los Animales: ".$animales[0].$animales[1].$animales[2].$animales[3].$animales[4].$animales[5].$animales[6];
$animales[0]="nuevo primer animal";
$animales[100]="Cienpies";
var_dump($animales);
echo "<br>";
$animales[16]="Canguro";
var_dump($animales);

echo "<br>";
$auto["Marca"] = "Toyota";
$auto["Modelo"] = "BX-300";
$auto["Color"] = "Rojo";
$auto["Año"] = 2019;
$auto["Patente"] = "12-xs-sa";
var_dump($auto);
echo "<br>";
$auto[0]= "NOmbre del dueño";
$auto[14]= "Empresa Aseguradora";
var_dump($auto);
echo "<br>";
$auto["Poliza"]= 1421;
$auto["Patente"]= 6666;
$auto[0]= "Jorge nuevoDueño";
var_dump($auto);
echo "<br>";
echo "<br>";
echo "<br>";
$entero = 60;
$decimal = 20.01;
echo "El entero es: ".$entero;	echo "<br>";
echo "El decimal es: ".$decimal; echo "<br>";
echo "La suma es: ". ($entero + $decimal);echo "<br>";
echo "La diferencia es: ".($entero - $decimal);echo "<br>";
echo "La division es: ".($entero / $decimal);echo "<br>";
echo "La multiplicacion es: ".($entero * $decimal);echo "<br>";
$division = $entero / $decimal;
echo "variable division: ".$division;echo "<br>";

echo "ab) Sumarle 1 al entero y al decimal";echo "<br>";
echo $entero + 1;echo "<br>";
echo $decimal + 1;echo "<br>";

echo "Sumarle 5 a $entero y restarle 0.6 a $decimal.";echo "<br>";
echo $entero + 5;echo "<br>";
echo $decimal - 0.6;echo "<br>";
echo "Notemos que toman como referencia ala primera declaracion";echo "<br>";
echo "<br>";
echo "Crear resultado, cuyo valor sea el resultado de multiplicar entero * 2, sumarle decimal, y dividir todo por la mitad de entero";
$resultado = (($entero * 2) + $decimal )/($entero / 2);echo "<br>";
echo $resultado;echo "<br>";

echo "Declarar una variable con el string ‘Hola’, y otra variable con el string ‘mundo!’";echo "<br>";
$hola = 'Hola';echo $hola;echo "<br>";
$mundo = 'mundo!';echo $mundo;echo "<br>";
$nueva = $hola . $mundo;echo $nueva;echo "<br>";
echo "Crear una nueva variable que concatene la variable creada en el punto a, y concatenarle el string ‘Que bueno esta PHP’.";echo "<br>";
$concat = $nueva . 'Que bueno esta PHP';echo $concat;echo "<br>";


?>
