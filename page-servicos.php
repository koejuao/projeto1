<?php 
//Template Name: Servicos
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<main class="intro-servi  introducao-interna">
		<div class="contain">
		<h1 class="subtitulo-servi">SERVIÇOS</h1>
		<p class="descri"> venha conhecer nossos serviços	</p>
	    
        </div>
		 </main>
		 <section class="contain 	animar-interno">
			<ul class="service-list-2">
			<?php if(have_rows('conteudo_servi')): while(have_rows('conteudo_servi')) : the_row(); ?>

				<li>
					<div class="service-list-item-2 ">
					<img src="<?php the_sub_field('foto_servi'); ?>">
					<div >
					<h3><?php the_sub_field('titulo_servi'); ?></h3>
						
						<p><?php the_sub_field('texto_servi'); ?></p>
					</div>
					</div>
</li>
					<?php endwhile; else : endif; ?>
					
				</ul>
		</section>
		<?php endwhile; else: endif; ?>
		<?php get_footer(); ?>