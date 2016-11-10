<?php
//Ejercico hecho by Ximo Gil
$tablas=[
"primera"=>5,
"segunda"=>13,
"tercera"=>11,
"cuarta"=>2
];

foreach ($tablas as $clave => $valor) {

    for ($i=0; $i<=10 ; $i++) {
      $resultado= $i * $valor;
      echo $valor."x".$i."=".$resultado."<br>";
}

}



 ?>
