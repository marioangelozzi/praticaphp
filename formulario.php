
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercício 08</title>
</head>
<body>

<form action="formulario.php" method="post">
    <div>
        <label for="name">Nome:</label>
        <input type="text" name="nome" />
    </div>
    <div>
        <label for="idade">Idade</label>
        <input type="text" name="idade" />
    </div>
    <div>
        <label for="hobby">3 Hobbies:</label>
        <textarea name="hobby"></textarea>
    </div>
    <div class="button">
        <button type="submit">Enviar sua mensagem</button>
    </div>
</form>

</body>

<?php
    echo "<br>Olá mundo";
    echo "<br>Boas vindas  ".$_POST['nome'];
    if ($_POST["idade"]<18) {
        echo "<br>Você não está autorizado no sistema";
        exit;
    }

    hobbyValido ($_POST["hobby"]);

    function hobbyValido ($hobby) {
        if (strlen($hobby)>3 && strlen($hobby)<=20 ) {
            return true;
        } else {
            exit;
        }
    }

    $arrayHobby = explode(",",$_POST["hobby"]);

    foreach ($arrayHobby as $hobby) {
        echo "<br>Você confirma que gosta de ".$hobby."?";
        
    }

    foreach ($_POST as $key => $value) {
        echo "<br>";
        echo $key.": ".$value;
    }

?>