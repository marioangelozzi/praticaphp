<?php

// Exercício Aula 10/10
// Exercício 01

// Exercício c, d, e acrescenta lógica numeroMagico

    const numeroMagico = 50;

    function maior ($num1, $num2, $num3 = numeroMagico) {

        $arrayMaior = [$num1, $num2, $num3];
        $maiorRetorno = 0;
        foreach ($arrayMaior as $valor) {
            if ($valor>$maiorRetorno) {
                $maiorRetorno = $valor;
            }
        }
        global $funcoesExecutadas; // exercício 06
        $funcoesExecutadas++;
        return $maiorRetorno;

    }

    // echo maior(40,5,30); echo "<br>"; 
    // echo maior(30,90); echo "<br>"; // teste número mágico 
    // echo maior(30,40); echo "<br>"; // teste número mágico

// Exercício 01 b

    function tabela ($paramBase, $paramLimite = numeroMagico) {

        if ($paramLimite>=$paramBase) {
            $j = 0;
            $arrayTabela = [];
            for ($i=$paramBase;$i<=$paramLimite;$i++) {
                $arrayTabela[$j]=$paramBase+$j;
                $j++;
            }

            echo "<pre>";
            var_dump($arrayTabela);
            return $arrayTabela; }
        else {
            $msg = "Número limite inferior a número base, não é possível executar função.";
            echo $msg;
            return $msg;
        }

    }

    // tabela (20, 20);
    // tabela (40); // teste número mágico


?>