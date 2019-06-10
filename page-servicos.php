<?php 
//Template Name: Servicos
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<main class="intro-servi  introducao-interna">
		<div class="container">
		<h1 class="subtitulo-servi">SERVIÇOS</h1>
		<p class="descri"> venha conhecer nossos serviços	</p>
	    
        </div>
		 </main>
		 <section class="container service-2 animar-interno">
			<ul class="service-list-2">
				<li>
					<div class="service-list-item-2 ">
					<img src="<?php echo get_template_directory_uri(); ?>/img/radar.svg">
					<div >
						<h3 class="servi-h3">Radar</h3>
						<p><?php the_field('texto_radar'); ?></p>
					</div>
					</div>
					<li>
					<div class="service-list-item-2">
					<img src="<?php echo get_template_directory_uri(); ?>/img/sec.svg">
					<div >
						<h3 class="servi-h3">Segurança</h3>
						<p><?php the_field('texto_sec'); ?></p>
					</div>
					</div>
				</div>
				</li>
				<li>
					<div class="service-list-item-2">
							<img src="<?php echo get_template_directory_uri(); ?>/img/tele.svg">
							<div >
								<h3 class="servi-h3">Telecomunicações</h3>
								<p><?php the_field('texto_tele'); ?></p>
							</div>
					</div>
				</li>
				<li>
					<div class="service-list-item-2">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ener.svg">
							<div >
								<h3 class="servi-h3">Energia</h3>
								<p><?php the_field('texto_ener'); ?></p>		
								</div>
					</div>
				</li>
				<li>
					<div class="service-list-item-2">
							<img src="<?php echo get_template_directory_uri(); ?>/img/met.svg">
							<div >
									<h3 class="servi-h3">Meteorologia</h3>
									<p><?php the_field('texto_met'); ?></p>					
							</div>
					</div>
				</li>
				<li>
					<div class="service-list-item-2">
					<img src="<?php echo get_template_directory_uri(); ?>/img/bio.svg">
					<div >
						<h3 class="servi-h3">Biomédica</h3>
						<p><?php the_field('texto_bio'); ?></p>	
					</div>
					</div>
				</li>
				</li>
				</ul>
		</section>
		<?php endwhile; else: endif; ?>
		<?php get_footer(); ?>