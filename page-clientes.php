<?php 
//Template Name: Clientes
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main class="intro-clien  introducao-interna">
		<div class="contain">
		<h1 class="subtitulo-clien">CLIENTES</h1>
		<p class="descri"> Conheça alguns de nossos clientes	</p>
	    
        </div>
         </main>

         <section class="contain card-clien-list animar-interno">
		<?php if(have_rows('clientes')): while(have_rows('clientes')) : the_row(); ?>

                <div class="card-clien">
              <div class="card-item-clien">
			  <img src="<?php the_sub_field('foto_clientes'); ?>">
                  
			  <span><?php the_sub_field('texto_clientes'); ?></span>
             </div>
                </div>
        <?php endwhile; else: endif; ?>

                 
							
                 </section>
				 <?php endwhile; else: endif; ?>
                 
                
                 <?php get_footer(); ?>