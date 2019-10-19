<?php

    // Exercício 03

    echo "Sou incluir.php";

    // item a    
    // include ('cumprimento.php'); // gera warning, quando não existe cumprimento.php

    // item b
    // require ('cumprimento.php'); // gera fatal error, quando não existe cumprimento.php

    // item d - inclui o echo do cumprimento.php 3 vezes
    // include ('cumprimento.php'); 
    // include ('cumprimento.php'); 
    // include ('cumprimento.php'); 

    // item e - inclui o echo do cumprimento.php 1 única vez
    // include_once ('cumprimento.php'); 
    // include_once ('cumprimento.php'); 
    // include_once ('cumprimento.php'); 


?>
