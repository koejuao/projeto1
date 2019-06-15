<!DOCTYPE html>
<html lang="pt-br">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
  </head>
  <body>
  	<header class="menu">
		<div class="container">
			<a class="menu-logo" href="/home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="MEDTEC"></a>	
			<span class="mobile-btn"></span>
			<nav class="menu-nav mobile-menu">
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