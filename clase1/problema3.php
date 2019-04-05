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
var_dump($animales);
$animales[5] = "NuevoA1 ";
$animales[6] = "NuevoA2";

var_dump($animales);
echo "Me gusta los Animales: ".$animales[0].$animales[1].$animales[2].$animales[3].$animales[4].$animales[5].$animales[6];
$animales[0]="nuevo primer animal";
$animales[100]="Cienpies";
var_dump($animales);
$animales[16]="Canguro";
var_dump($animales);


$auto["Marca"] = "Toyota";
$auto["Modelo"] = "BX-300";
$auto["Color"] = "Rojo";
$auto["Año"] = 2019;
$auto["Patente"] = "12-xs-sa";
var_dump($auto);
$auto[0]= "NOmbre del dueño";
$auto[14]= "Empresa Aseguradora";
var_dump($auto);
$auto["Poliza"]= 1421;
$auto["Patente"]= 6666;
var_dump($auto);
?>
