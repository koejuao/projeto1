<?php 
//Template Name: Produtos
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<main class="intro-prod  introducao-interna">
		<div class="contain">
		<h1 class="subtitulo-prod">PRODUTOS</h1>
		<p class="descri"> conheça todos os nossos produtos	</p>
	    
        </div>
		 </main>

        <section class="contain card-prod-list  animar-interno">
		<?php if(have_rows('produtos')): while(have_rows('produtos')) : the_row(); ?>
                <div class="card-prod">
              <div class="card-item-prod">
			  <img src="<?php the_sub_field('foto_produtos'); ?>">
                  <span><?php the_sub_field('texto_produtos'); ?></span>
				</div>
				</div>
				<?php endwhile; else : endif; ?>

				 </section>
					
							<section class="contain">	
							<a href="/contato" class="btn-prod">Contato</a>
							
              </section>

									
								
						<?php endwhile; else: endif; ?>
						<?php get_footer(); ?>
