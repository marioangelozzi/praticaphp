<?php

function umADez() {
  
    $arrayumADez = [];
    
    for ($i=0;$i<10;$i++) {
      $arrayumADez[] = $i+1;
    }
    
    return $arrayumADez;
  }

function dobroDaArray() {

    $arrayDobroumADez = umADez();
    
    for ($i=0;$i<count($arrayDobroumADez);$i++) {
      $arrayDobroumADez[$i] = $i*2;
    }
    
    return $arrayDobroumADez;


} 

function fullName ($nome, $sobrenome) {

    $nomeCompleto = $nome." ".$sobrenome;
    return $nomeCompleto;

}

function entre100 ($numero) {

    return ($numero>=0 && $numero <= 100) ? true : false;

}

$teste=entre100(200);
var_dump($teste);
if ($teste) {
    echo "ok";
}
else {
    echo "not ok";
}


// function entreDoisNumeros ($numero,$limiteInferior,$limiteSuperior) {

//     return ($numero>=$limiteInferior && $numero<=$limiteSuperior) ? true : false;

// }

function entreDoisNumeros ($numero,$limiteInferior=0,$limiteSuperior=100) {

    return ($numero>=$limiteInferior && $numero<=$limiteSuperior) ? true : false;

}


$teste=entreDoisNumeros(50);
var_dump($teste);
if ($teste) {
    echo "ok";
}
else {
    echo "not ok";
}




?>