<?php 
//Template Name: Contato
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<main class="intro-cont introducao-interna ">
		<div class="container">
		<h1 class="subtitulo-cont">CONTATO</h1>
		<p class="descri"> tire suas dúvidas com a gente	</p>
	    
        </div>
         </main>
		<section class="contato container animar-interno">
         <form action="<?php echo get_template_directory_uri(); ?>/enviar.php" id="form_orcamento" class="formphp contato_form">
                <label for="nome">Nome</label>
                <input id="nome" name="nome" type="text">
                <label for="email">E-mail</label>
                <input id="email" name="email" type="text">
                <label for="telefone">Telefone</label>
                <input id="telefone" name="telefone" type="text">
                <label for="nome">Assunto</label>
                <input id="assunto" name="assunto" type="text">
                <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
				<input type="text" class="nao-aparece" name="leaveblank">
				<label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
				<input type="text" class="nao-aparece" name="dontchange" value="http://" >
                <label for="espec">Especificações</label>
                <textarea name="espec" id="espec"></textarea>
                
                <button id="enviar" name="enviar" type="submit" class="btn-cont">Enviar</button>
            </form>
           
            <div class="contato_redes "> 
                    <h3>Dados</h3>
                    <span><?php the_field('telefone'); ?></span>
				    <span><?php the_field('email'); ?></span>
				    <span><?php the_field('endereco1'); ?></span>
				    <span><?php the_field('endereco2'); ?></span>
                    <div class="mapa-contato">
                    <a href="<?php the_field('link_mapa'); ?>" target="_blank" ><img src="<?php the_field('imagem_mapa'); ?>" alt="<?php the_field('texto_mapa'); ?>"></a>
                            </div>   
                            
                    <div class="cont_redes">
                            <h3 class="rede-sub">Contato</h3>
                            <ul>
                                <li><a href="<?php the_field('link_face'); ?>" target="_blank"><img class="soci" src="<?php echo get_template_directory_uri(); ?>/img/face.svg"></a></li>
                                <li><a href="<?php the_field('link_insta'); ?>" target="_blank"><img class="soci" src="<?php echo get_template_directory_uri(); ?>/img/insta.svg"></a></li>
                                <li><a href="<?php the_field('link_twt'); ?>" target="_blank"><img class="soci" src="<?php echo get_template_directory_uri(); ?>/img/twt.svg"></a></li>
                            </ul>
                        </div>
                        </div>
            </section>
            <?php endwhile; else: endif; ?>
            <?php get_footer(); ?>