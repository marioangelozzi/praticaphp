<?php

    // aula presencial 19/10
    // exercício 01

    echo "<pre>";
    var_dump($_GET);

    // exercício 02 item 1
    // executar no browse http://localhost/aulaexercicio/imprimir.php?nome=maria&email=maria@digitalhouse.com

    // exercício 02 itens b e c

   foreach ($_GET as $chave => $valor) {
       echo "<br>".$chave." ".$valor;
   }

   echo "<br>";
   // exercício 03

   foreach ($_POST as $chave => $valor) {
    echo "<br>".$chave." ".$valor;
}

echo "<br>";
echo "<br>";

    // exercício 03 a
    echo "<br>Conteúdo GetAllHeaders:<br>";
    foreach (getallheaders() as $name => $value) {
        echo "$name: $value\n";
    }

    // exercício 03 b
    echo "<br>Conteúdo Server:<br>";
    foreach ($_SERVER as $name => $value) {
        echo "$name: $value\n";
    }

    echo "<br>Conteúdo Files:<br>";
    foreach ($_FILES as $name => $value) {
        echo "$name: $value\n";
    }

    echo "<br>Conteúdo Request:<br>";
    foreach ($_REQUEST as $name => $value) {
        echo "$name: $value\n";
    }

    echo "<br>Conteúdo Session:<br>";
    foreach ($_SESSION as $name => $value) {
        echo "$name: $value\n";
    }

    echo "<br>Conteúdo Cookie:<br>";
    foreach ($_COOKIE as $name => $value) {
        echo "$name: $value\n";
    }

    echo "<br>Conteúdo Globals:<br>";
    foreach ($GLOBALS as $name => $value) {
        echo "$name: $value\n";
    }

    echo "<br>";
    echo "<pre>";
    var_dump($_FILES);
    var_dump($_SESSION);
    var_dump($_COOKIE);
    var_dump($GLOBALS);



?>