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
			<a class="menu-logo" href="/home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="MEDTEC"></a>	
			<nav class="menu-nav">
				<ul>
					<li><a href="/home">Home</a></li>
					<li><a href="/servicos">Serviços</a></li>
					<li><a href="/produtos">Produtos</a></li>
					<li><a href="/clientes">Clientes</a></li>
					<li><a href="/contato">Contato</a></li>
				</ul>
			</nav>
		</div>
	</header>