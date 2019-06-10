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
			 	<img src="<?php echo get_template_directory_uri(); ?>/img/location.svg"/>
			 	<h3> Sistema integrado de gestão empresarial (ERP)</h3>
			 	<span>	
				 <?php the_field('texto_erp'); ?> </span>
			 </div>
			 <div class="card-item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/fone.svg"/>
				<h3> Relacionamento com o Cliente (CRM)</h3>
				<span><?php the_field('texto_crm'); ?></span>
			</div>
			 <div class="card-item">
			 	<img src="<?php echo get_template_directory_uri(); ?>/img/doc.svg"/>
			 	<h3> Gestão Eletrônica de Documentos (GED)</h3>
			 	<span><?php the_field('texto_ged'); ?></span>
			 </div>
			 			</div>
   		</div>
   		</section>

   		<section class="container service animar">
   			<h1 class="subtitulo">Serviços</h1>
   			<ul class="service-list">
   				<li>
   					<div class="service-list-item">
   					<img src="<?php echo get_template_directory_uri(); ?>/img/radar.svg">
   					<div >
   						<h3>Radar</h3>
   						<span><?php the_field('texto_radar'); ?> </span>
   					</div>
   					</div>
   					<li>
   					<div class="service-list-item">
   					<img src="<?php echo get_template_directory_uri(); ?>/img/sec.svg">
   					<div >
   						<h3>Segurança</h3>
   						<span><?php the_field('texto_sec'); ?></span>
   					</div>
   					</div>
   				</li>
   				<li>
   					<div class="service-list-item">
   					<img src="<?php echo get_template_directory_uri(); ?>/img/met.svg">
   					<div >
   						<h3>Meteorologia</h3>
   						<span><?php the_field('texto_met'); ?> </span>
   					</div>
   					</div>
   				</li>
   				<li>
   					<div class="service-list-item">
   					<img src="<?php echo get_template_directory_uri(); ?>/img/tele.svg">
   					<div >
   						<h3>Telecomunicações</h3>
   						<span><?php the_field('texto_tele'); ?></span>
   					</div>
   					</div>
   				</li>
   				<li>
   					<div class="service-list-item">
   					<img src="<?php echo get_template_directory_uri(); ?>/img/ener.svg">
   					<div >
   						<h3>Energia</h3>
   						<span><?php the_field('texto_ener'); ?></span>
   					</div>
   					</div>
   				</li>
   				<li>
   					<div class="service-list-item">
   					<img src="<?php echo get_template_directory_uri(); ?>/img/bio.svg">
   					<div >
   						<h3>Biomédica</h3>
   						<span><?php the_field('texto_bio'); ?> </span>
   					</div>
   					</div>
   				</li>
   				</li>
   		    </ul>
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

 
