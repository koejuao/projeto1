<?php get_header(); ?>

	<main class="intro-cont introducao-interna ">
		<div class="container">
		<h1 class="subtitulo-cont">CONTATO</h1>
		<p class="descri"> tire suas dúvidas com a gente	</p>
	    
        </div>
         </main>
		<section class="contato container animar-interno">
         <form id="form_orcamento" class="contato_form">
                <label for="nome">Nome</label>
                <input type="text" id="nome">
                <label for="email">E-mail</label>
                <input type="text" id="email">
                <label for="telefone">Telefone</label>
                <input type="text" id="telefone">
                <label for="nome">Assunto</label>
                <input type="text" id="assunto">
                <label for="espec">Especificações</label>
				<textarea id="espec"></textarea>
                
                <button type="submit" class="btn-prod">Enviar</button>
            </form>
           
            <div class="contato_redes "> 
                    <h3>Dados</h3>
                    <span>+55 21 93223 3232</span>
                    <span>orcamento@bikcraft.com</span>
                    <span>Rua Ali Perto - Botafogo</span>
                    <span>Rio de Janeiro - RJ - Brasil</span>
                    <div class="mapa-contato">
                            <img src="img/mapa.png">
                            </div>   
                            
                    <div class="cont_redes">
                            <h3 class="rede-sub">Contato</h3>
                            <ul>
                                <li><a href="http://facebook.com" target="_blank"><img class="soci" src="img/face.svg"></a></li>
                                <li><a href="http://instagram.com" target="_blank"><img class="soci" src="img/insta.svg"></a></li>
                                <li><a href="http://twitter.com" target="_blank"><img class="soci" src="img/twt.svg"></a></li>
                            </ul>
                        </div>
                        </div>
            </section>
            <?php get_footer(); ?>