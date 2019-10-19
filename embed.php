
<?php

    $name = "Teste";
    $num = rand(0,1);
    $sites = ["https://google.com","https://facebook.com","https://twitter.com"];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>A internet</h1>
    <marquee>Bem vindo ao mundo da internet</marquee>
    <!-- <h2>Bem-vindo, <?php echo $name; ?> </h2> -->
    <h2>Bem-vindo, <?= $name ?> </h2>
    <h3>Você é um vencedor? <?php echo ($num==1) ? "SIM" : "Não";?> </h3>

    <h3>Alguns sites interessantes:</h3>
    <ul>
      <li>
        <a href=<?php echo $sites[0] ?>>Google</a>
      </li>
      <li>
        <a href=<?php echo $sites[1] ?>>Facebook</a>
      </li>
      <li>
        <a href=<?php echo $sites[2] ?>>Twitter</a>
      </li>
    </ul>
  </body>
</html>
