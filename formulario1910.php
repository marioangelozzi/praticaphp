
<!-- Exercício 01 de persistência e validação -->


<!DOCTYPE HTML>
<html>
    <body>
        <form action="formulario1910.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nombre">
            <br>
            <label for="email">E-mail:</label>
            <input type="text" name="email">
            <br>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>

<?php

    echo "<pre>";
    var_dump($_POST);

    if ($_POST) {

        // if ( (!(isset($_POS["nombre"]))) && (!(isset($_POST["idade"]))) ) {
        //     echo "<br>Favor preencher os campos";
        // } elseif ($_POST["nome"]==null) {
        //     echo "<br>Favor preencher o campo nome";
        // } else {
        //     echo "<br>Favor preencher o campo email";
        // }

        echo strlen($_POST["nombre"]);
        echo "<br>";
        echo filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
   

        if ( ($_POST["nombre"] == "") && (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)==false) )  {
            echo "<br>Favor preencher os campos";
        } elseif ($_POST["nombre"] == "") {
            echo "<br>Favor preencher o campo nome";
        } elseif (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)==false) {
            echo "<br>Favor preencher o campo email";
        } else {
            header('Location: imprimir.php?nombre=Mario&email=mario.angelozzi@yahoo.com.br');
            die();
        }
       
    }

?>

