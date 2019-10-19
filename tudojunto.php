<?php

    // Exercício Aula 10/10
    // item 04

    include('funcoes.php');
    include('superficie.php');

    // $funcoesExecutadas = 0;

    // global $funcoesExecutadas;
    
    $funcoesExecutadas=0; // exercício 06

    function maiorCirculo ($circ1,$circ2,$circ3) {

        global $funcoesExecutadas; // exercício 06
        $funcoesExecutadas++;
        return maior(circulo($circ1),circulo($circ2),circulo($circ3));
      
    }

    echo "<br>área círculo = ".maiorCirculo(4,3,5)." m2";
    echo "<br>Funções executadas ".$funcoesExecutadas;

    // Exercício 07
    echo "<br>"; 
    echo strpos("Adoro php, Eu também adoro php!","php");


?>

 <!-- Exercício 08 -->






