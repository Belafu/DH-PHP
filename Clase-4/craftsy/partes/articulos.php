<?php
$productos =[
0 => ["imagen" => "img/img-phone-01.jpg" , "nombre" => "Nombre del Producto", "texto" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam."
  ,"precio" => 100, "estaEnOferta" => true],
1 => ["imagen" => "img/img-phone-02.jpg" , "nombre" => "Nombre del Producto", "texto" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam."
  ,"precio" => 150, "estaEnOferta" => false],
2 => ["imagen" => "img/img-phone-03.jpg" , "nombre" => "Nombre del Producto", "texto" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam."
  ,"precio" => 400, "estaEnOferta" => true],
3 => ["imagen" => "img/img-phone-01.jpg" , "nombre" => "Nombre del Producto", "texto" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam."
  ,"precio" => 100, "estaEnOferta" => true],
4 => ["imagen" => "img/img-phone-02.jpg" , "nombre" => "Nombre del Producto", "texto" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam."
  ,"precio" => 150, "estaEnOferta" => false],
5 => ["imagen" => "img/img-phone-03.jpg" , "nombre" => "Nombre del Producto", "texto" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam."
  ,"precio" => 400, "estaEnOferta" => true]
];


function descripcionLarga($nombreArticulo){
  global $productos;
    foreach ($productos as $key => $value) {
      if($value["nombre"]==$nombreArticulo){
        return "El texto es ".$value["texto"]." con precio:".$value["precio"];
      }
    }
}

function precioFinal($articulo){
    if($articulo["estaEnOferta"]){
    return  $articulo["precio"]*0.8;
    }
    else {
    return $articulo["precio"];
    }
}

 ?>
