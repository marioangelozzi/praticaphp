<?php 
// 1. Mostra a tabela de multiplicação de 2 usando um for.
    // for ($i=1;$i<=10;$i++) {
    //     echo $i." x 2= ".$i*2;
    //     echo "<br>";
    // }

// 2. Um loop while que conta de 100 a 85 (observe que, nesse caso, está
// diminuindo).
    // $i=100;
    // while ($i>=85) {
    //     echo $i;
    //     echo "<br>";
    //     $i--;
    // }

// 3. Um loop while que dê uma variável $counter que recebe valores de 1 a 5,
// mostra por tela duas vezes o valor de $counter, ou seja, que mostra 2, 4, 6, 8,
// 10.
    // $counter = [1,2,3,4,5];
    // $i=0;
    // while ($i<count($counter)) {
    //     echo $counter[$i]*2;
    //     echo "<br>";
    //     $i++;
    // } 


// 4. Utilizando um while, vamos fazer um programa que puxa uma moeda (ele
// selecionará um número aleatório que pode ser 0 ou 1) até que ele tire 5 vezes
// cara(o número 1). Quando terminar, você deve imprimir quantas jogadas de
// moedas foram necessárias para obter 5 vezes a cara.
    // $countTotal=0;
    // $countCara=0;

    // while ($countCara<5) {
    //     $jogada=rand(0,1);
    //     $countTotal++;
    //     if ($jogada==1) {
    //         $countCara++;
    //     }
    // }

    // echo $countTotal;

// Defina um array com 5 strings que são nomes. Passe por este array para
// imprimir cada um dos nomes na tela.
// a. Resolva este problema com um for.
// b. Resolva esse problema com o while.
// c. Resolva este problema com um do / while.
// d. Resolva este problema com um foreach.
    // $arrayNomes = ["Bianca","Rafaela","Luciana","Fernanda","Costanza"];
    // echo "Item a:<br>";
    // for ($i=0;$i<5;$i++) {
    //     echo "$arrayNomes[$i] <br>";
    // }
    // echo "Item b:<br>";
    // $i=0;
    // while ($i<5) {
    //     echo "$arrayNomes[$i] <br>";
    //     $i++;
    // }
    // echo "Item c:<br>";
    // $i=0;
    // do {
    //     echo "$arrayNomes[$i] <br>";
    //     $i++;
    // } while ($i<5);
    // echo "Item d:<br>";
    // foreach ($arrayNomes as $value) {
    //     echo "$value <br>";
    // } 

// 6. Defina um array com 10 números aleatórios entre 0 e 10. Passe por esse array
// para imprimir todos os números. A execução deve ser concluída se qualquer
// um dos números encontrados for um 5 (deve imprimir "O 5 foi encontrado!")
    // $array10Random = [rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10)];
    // $i=0;
    // do {
    //     if ($array10Random[$i]==5) {
    //         echo "O $array10Random[$i] foi encontrado!<br>";
    //         break;
    //     }
    //     echo $array10Random[$i];
    //     echo "<br>";
    //     $i++;
    // } while ($i<10);

    // foreach ($array10Random as $value) {
    //     if ($value==5) {
    //         echo "O $value foi encontrado!<br>";
    //         break;
    //     }
    //     echo $value;
    //     echo "<br>";
    // }

// 7. Defina um array com 10 números aleatórios entre 0 e 100. Passe por essa
// matriz, contando quantos números são pares
    // $array10Random = [rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100),rand(0,100)];
    // $countPares=0;
    // foreach ($array10Random as $value) {
    //     if ($value%2==0) {
    //         $countPares=$countPares+1;
    //     }
    //     echo $value;
    //     echo "<br>";
    // }
    // echo "O total de pares é $countPares";


// 8. Definir uma variável $mascote que é um array associativo
// a. No índice de animais, você deve dizer qual animal é.
// b. Na idade do índice deve informar a idade.
// c. No índice de altura, você deve dizer a altura.
// d. No índice do nome, você deve dizer o nome
// e. Percorra os valores do array com uma impressão foreach (como um
// exemplo):
// animal: cão
// idade: 5 anos
// altura: 0,60
// nome: Sonic
    // $mascote = ["animal"=>"cão",
    //         "idade"=>"5",
    //         "altura"=>0.60,
    //         "nome"=>"Sonic"
    //     ];

    // foreach ($mascote as $key => $value) {
    //     if ($key=="idade") {
    //         echo "$key: $value anos<br>";    
    //     } else {
    //         echo "$key: $value<br>";
    //     }
    // }


// 9. Começando de um arquivo com a seguinte variável definida:
// $ceu = array ("Itália" => "Roma", "Luxemburgo" => "Luxemburgo", "Bélgica" =>
// "Bruxelas", "Dinamarca" => "Copenhaga", "Finlândia" => "Helsínquia", "França" =>
// "Paris", "Eslováquia" => "Bratislava", "Eslovénia" => "Liubliana", "Alemanha" =>
// "Berlim", "Grécia" => "Atenas", "Irlanda" => "Dublin", "Holanda" => "Amesterdão",
// "Portugal" => "Lisboa", "Espanha" => "Madrid", "Suécia" => "Estocolmo", "Reino
// Unido" => "Londres", "Chipre" => "Nicósia", "Lituânia" => "Vilnius", "República
// Checa" => "Praga", "Estónia" => "Tallinn", "Hungria" => "Budapeste", "Letónia" = >
// "Riga", "Malta" => "Valeta", "Áustria" => "Viena", "Polónia" => "Varsóvia");
// Crie um script que mostre o nome da capital e o país da variável $ceu.

    $ceu = ["Itália" => "Roma", 
        "Luxemburgo" => "Luxemburgo", 
        "Bélgica" => "Bruxelas", 
        "Dinamarca" => "Copenhaga", 
        "Finlândia" => "Helsínquia", 
        "França" => "Paris", 
        "Eslováquia" => "Bratislava", 
        "Eslovénia" => "Liubliana", 
        "Alemanha" => "Berlim", 
        "Grécia" => "Atenas", 
        "Irlanda" => "Dublin", 
        "Holanda" => "Amesterdã",
        "Portugal" => "Lisboa", 
        "Espanha" => "Madrid", 
        "Suécia" => "Estocolmo", 
        "Reino Unido" => "Londres", 
        "Chipre" => "Nicósia", 
        "Lituânia" => "Vilnius", 
        "República Checa" => "Praga", 
        "Estónia" => "Tallinn", 
        "Hungria" => "Budapeste", 
        "Letónia" => "Riga", 
        "Malta" => "Valeta", 
        "Áustria" => "Viena", 
        "Polónia" => "Varsóvia"];

    foreach ($ceu as $pais => $capital) {
        echo "País: $pais - Capital: $capital.<br>";
    }

// 10. Começando de um arquivo com a seguinte variável definida:
// $ceu = [
// "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
// "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"],
// "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"],
// "França" => ["Paris", "Nantes", "Lyon"],
// "Itália" => ["Roma", "Milão", "Veneza"],
// "Alemanha” => ["Munique", "Berlim", "Frankfurt"]
// ];
// Crie um script que mostre o nome de cada país e suas cidades da variável $ceu
// com o seguinte formato:
// As cidades da Argentina são:
// ● Buenos Aires
// ● Córdoba
// ● Santa Fé
// As cidades do Brasil são:
// ● Brasília
// ● Rio de Janeiro
// ● São Paulo
    // $ceu = [
    //     "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
    //     "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"],
    //     "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"],
    //     "França" => ["Paris", "Nantes", "Lyon"],
    //     "Itália" => ["Roma", "Milão", "Veneza"],
    //     "Alemanha" => ["Munique", "Berlim", "Frankfurt"]
    //     ];
        
    // foreach ($ceu as $pais => $cidades) {
    //     echo "As cidades do(a) $pais são:<br>";
    //     foreach ($cidades as $cidade) {
    //         echo "$cidade<br>";
    //     }
    // }

// 11. Do exercício anterior:
// ● Adicione a cada país um dado extra, além de suas cidades chamadas
// eAmericano. Este valor deve ser verdadeiro ou falso.
// ● Faça com que a impressão anterior não mostre países que não sejam
// americanos.
// IMPORTANTE: Para que isso funcione de maneira simples, você deve criar uma
// matriz associativa para cada país em que cada país terá os dados de suas
// cidades e seja americano

    // $ceu = [
    //     "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
    //     "Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"],
    //     "Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"],
    //     "França" => ["Paris", "Nantes", "Lyon"],
    //     "Itália" => ["Roma", "Milão", "Veneza"],
    //     "Alemanha" => ["Munique", "Berlim", "Frankfurt"]
    //     ];
    
    // $ceu["Argentina"][]="Bariloche";
    // $ceu["Argentina"]["Americano"]=true;

    // $ceu["Brasil"][]="Minas Gerais";
    // $ceu["Brasil"]["Americano"]=true;

    // $ceu["Colômbia"][]="Medelin";
    // $ceu["Colômbia"]["Americano"]=true;

    // $ceu["França"][]="Marselha";
    // $ceu["França"]["Americano"]=false;

    // $ceu["Itália"][]="Florença";
    // $ceu["Itália"]["Americano"]=false;

    // $ceu["Alemanha"][]="Hamburgo";
    // $ceu["Alemanha"]["Americano"]=false;

    // // echo "<pre>";
    // // var_dump($ceu);

    // foreach ($ceu as $pais => $cidades) {
    //     if ($cidades["Americano"]==true) {
    //         echo "As cidades do(a) $pais são:<br>";
    //         foreach ($cidades as $cidade) {
    //             if ($cidade!=1){
    //             echo "$cidade<br>";}
    //         }
    //     }
    // }



    
?>