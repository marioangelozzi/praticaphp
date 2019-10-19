<?php

// Exercício aula presencial 10/10

// Exercício 02 a

function superTriangulo ($lado1,$lado2,$lado3) {

    if($lado1!="" and $lado2!="" and $lado3!=""){
        echo "<br>todos os lado informados";
        
        if (($lado1==$lado2) and ($lado2==$lado3)) {
            echo "<br>Equilatero";
        } elseif (($lado1 !=$lado3)  and ($lado1 !=$lado2)  and ($lado2 !=$lado3) ) {
                echo "<br>Escaleno";
        } else {
            echo "<br>Isosceles";
        }
    } else {
        echo "<br>informe os lados do triângulo";
    }

}

// superTriangulo (10,12,15);
// superTriangulo (10,10,10);
// superTriangulo (10,10,15);
// superTriangulo ("","","");

function triangulo ($base,$altura) {

    return (($base*$altura)/2);

}

$areaTriangulo = triangulo (6,4);

// echo "<br>área triângulo = ".$areaTriangulo." m2";

// Exercício 02 b

function retangulo ($base,$altura) {

    return ($base*$altura);

}

$areaRetangulo = retangulo (6,4);

// echo "<br>área retângulo = ".$areaRetangulo." m2";


// Exercício 02 c

function quadrado ($lado) {

    return (pow($lado,2)); // potência de 2
}

$areaQuadrado = quadrado (6);

// echo "<br>área quadrado = ".$areaQuadrado." m2";


// Exercício 02 d

function circulo ($raio) {

    global $funcoesExecutadas; // exercício 06
    $funcoesExecutadas++;
    $pi = 3.14159265;
    return ((pow($raio,2))*$pi);

}

$areaCirculo = circulo (6);

// echo "<br>área círculo = ".$areaCirculo." m2";


?>