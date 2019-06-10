<?php 
//Template Name: Produtos
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<main class="intro-prod  introducao-interna">
		<div class="container">
		<h1 class="subtitulo-prod">PRODUTOS</h1>
		<p class="descri"> conheça todos os nossos produtos	</p>
	    
        </div>
		 </main>

        <section class="container card-prod-list  animar-interno">
		<?php if(have_rows('produtos')): while(have_rows('produtos')) : the_row(); ?>
                <div class="card-prod">
              <div class="card-item-prod">
			  <img src="<?php the_sub_field('foto_produtos'); ?>">
                  <span><?php the_sub_field('texto_produtos'); ?></span>
				</div>
				</div>
				<?php endwhile; else : endif; ?>

				 </section>
						<h1 class="subtitulo-orc">ORÇAMENTO</h1>
						<section class="produtos container">
							<form id="form_orcamento" class="produtos_form">
								<label for="nome">Nome</label>
								<input type="text" id="nome">
								<label for="email">E-mail</label>
								<input type="text" id="email">
								<label for="telefone">Telefone</label>
								<input type="text" id="telefone">
								
								<button type="submit" class="btn-prod">Enviar</button>
							</form>
							<div class="produtos_dados">
								<h3>Dados</h3>
								<span>+55 21 93223 3232</span>
								<span>orcamento@bikcraft.com</span>
								
								<h3>PEÇA SEU EQUIPAMENTO</h3>
								<span>Escolha as especificações:</span>
								<p>
									<select class="basic">
										<option value="" selected="selected" >-Equipamento</option>
										<option value="" >Placas</option>
										<option value="" >Switch</option>
										<option value="" >Cabos</option>
									</select>
								</p>
								<p>
									<select class="basic">
											<option value="" selected="selected" >-Quantidade</option>
										<option value="" >5</option>
										<option value="" >10</option>
										<option value="" >15</option>
									</select>
								</p>
</div>

									
								
						</section>
						<?php endwhile; else: endif; ?>
						<?php get_footer(); ?>
