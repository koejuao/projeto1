<!DOCTYPE html>
<html lang="pt-br">
  <head>
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <script src="js/libs/modernizr.custom.45655.js"></script>
    <?php wp_head(); ?>

  </head>
  <body>
  	<header class="menu">
		<div class="container">
			<a class="menu-logo" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="MEDTEC"></a>	
			<nav class="menu-nav">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="servicos.html">Serviços</a></li>
					<li><a href="produtos.html">Produtos</a></li>
					<li><a href="clientes.html">Clientes</a></li>
					<li><a href="contato.html">Contato</a></li>
				</ul>
			</nav>
		</div>
	</header>