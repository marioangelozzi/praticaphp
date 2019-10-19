<?php

$arrayProduto = [
0 => [
    "id" => 1,
    "titulo" => "Lorem Ipsum",
    "descricao" => "Lorem Ipsum",
    "preco" => 300,
    "imagem" => "img-pdto-1.jpg",
    "emOferta" => true
    ],
1 => [
    "id" => 2,
    "titulo" => "Lorem Ipsum",
    "descricao" => "Lorem Ipsum",
    "preco" => 500,
    "imagem" => "img-pdto-2.jpg",
    "emOferta" => false
    ]
];

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Kitchening</title>
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>

	<div class="container">

		<!-- cabecalho -->
		<header class="main-header">
			<img src="images/logo.jpg" alt="logotipo" class="logo">
			<a href="#" class="toggle-nav"> <span class="ion-navicon-round"></span> </a>

			<nav class="main-nav">
				<ul>
					<li><a href="#">home</a></li>
					<li><a href="#">quem somos</a></li>
					<li><a href="#">serviços</a></li>
					<li><a href="#">portfólio</a></li>
					<li><a href="#">lojas</a></li>
					<li><a href="#">contato</a></li>
				</ul>
			</nav>
		</header>

		<!-- banner -->
		<section class="banner">
			<img src="images/img-banner.jpg" alt="banner">
		</section>

		<!-- produtos -->
		<section class="vip-products">
			<article class="product">
                <!-- <img src="images/img-pdto-1.jpg" alt="pdto 01"> -->
                <img src="images/<?php echo $arrayProduto[0]["imagem"]?>" alt="pdto 01">
				<h2><?php echo $arrayProduto[0]["titulo"]?></h2>
                <p><?php echo $arrayProduto[0]["descricao"]?></p>
                <p><?php if ($arrayProduto[0]["emOferta"]==true) { echo "Em Oferta!"; };?></p>
				<a href="#">ver mais</a>
			</article>
			<article class="product">
                <img src="images/<?php echo $arrayProduto[1]["imagem"]?>" alt="pdto 01">
				<h2><?php echo $arrayProduto[1]["titulo"]?></h2>
				<p><?php echo $arrayProduto[1]["descricao"]?></p>
				<a href="#">ver mais</a>
			</article>
			<article class="product">
				<img src="images/img-pdto-3.jpg" alt="pdto 03">
				<h2>Lorem ipsum amet</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
				<a href="#">ver mais</a>
			</article>
			<article class="product">
				<img src="images/img-pdto-1.jpg" alt="pdto 01">
				<h2>Lorem ipsum amet</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
				<a href="#">ver mais</a>
			</article>
			<article class="product">
				<img src="images/img-pdto-2.jpg" alt="pdto 02">
				<h2>Lorem ipsum amet</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
				<a href="#">ver mais</a>
			</article>
			<article class="product">
				<img src="images/img-pdto-3.jpg" alt="pdto 03">
				<h2>Lorem ipsum amet</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.</p>
				<a href="#">ver mais</a>
			</article>
		</section>

		<footer class="main-footer">
			<ul>
				<li><a href="#">home</a></li>
				<li><a href="#">quem somos</a></li>
				<li><a href="#">serviços</a></li>
				<li><a href="#">portfólio</a></li>
				<li><a href="#">lojas</a></li>
				<li><a href="#">contato</a></li>
			</ul>
		</footer>
	</div>

	</body>
</html>
