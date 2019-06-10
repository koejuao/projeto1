<?php 
//Template Name: Home
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="intro introducao">
		<div class="container">
		<h1><?php the_field('titulo_intro'); ?></h1>
			    <a href="/produtos" class="btn">Orçamento</a>
        </div>
   	</section>
   	<section class="intro-card">
   		<div class="container">
   			<div class="card">
			 <div class="card-item">
			 	<img src="<?php echo get_template_directory_uri(); ?>/img/location.png"/>
			 	<h3> Sistema integrado de gestão empresarial (ERP)</h3>
			 	<span>	
				 <?php the_field('texto_erp'); ?> </span>
			 </div>
			 <div class="card-item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/headset.png"/>
				<h3> Relacionamento com o Cliente (CRM)</h3>
				<span><?php the_field('texto_crm'); ?></span>
			</div>
			 <div class="card-item">
			 	<img src="<?php echo get_template_directory_uri(); ?>/img/contract.png"/>
			 	<h3> Gestão Eletrônica de Documentos (GED)</h3>
			 	<span><?php the_field('texto_ged'); ?></span>
			 </div>
			 			</div>
   		</div>
   		</section>

   		<section class="container service animar">
   			<h1 class="subtitulo">Serviços</h1>
   			<ul class="service-list">
			 <?php if(have_rows('conteudo_servi')): while(have_rows('conteudo_servi')) : the_row(); ?>
			 <li>
   					<div class="service-list-item">
						 <img src="<?php the_sub_field('foto_servi'); ?>">
						 <div>
						 <h3><?php the_sub_field('titulo_servi'); ?></h3>
						 <span><?php the_sub_field('texto_servi'); ?></span>
   					</div>
						 </li>
						 <?php endwhile; else : endif; ?>
						 </ul>

   					</div>
   		
					 <div class="call">
				<a href="/servicos" class=" btn-servi">saiba mais</a>
			</div>
   		</section>
   			
   		<section class="portfolio">
   			<h1 class="subtitulo" >Parceiros</h1>
			<div class="container">
				<section class="Cliente">
				<ul class="portfolio_lista rslides_portfolio">
					<li>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/1.png" alt="*"></div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/2.png" alt="*"></div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/3.png" alt="*"></div>
					</li>

					<li>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/4.png" alt="*"></div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/5.png" alt="*"></div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/6.png" alt="*"></div>
					</li>
					<li>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/8.png" alt="*"></div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/7.png" alt="*"></div>
						<div class="slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/9.png" alt="*"></div>
					</li>
				</ul>
				</section>
			</div>
		</section>
		<?php endwhile; else: endif; ?>
        <?php get_footer(); ?>

 
