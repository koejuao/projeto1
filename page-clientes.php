<?php 
//Template Name: Clientes
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <main class="intro-clien  introducao-interna">
		<div class="container">
		<h1 class="subtitulo-clien">CLIENTES</h1>
		<p class="descri"> Conheça alguns de nossos clientes	</p>
	    
        </div>
         </main>

         <section class="container animar-interno">
            <div class="card-clien-list">
                <div class="card-clien">
              <div class="card-item-clien">
                  <img src="img/osw.png"/>
                  <span>	Fundação Oswaldo Cruz  </span>
							</div>
							</div>
							<div class="card-clien">
								<div class="card-item-clien">
										<img src="img/iac.png"/>
										<span>		IACIT  </span>
								</div>
								</div>
								<div class="card-clien">
								<div class="card-item-clien">
											<img src="img/gdm.png"/>
											<span>		Governo de Minas Gerais  </span>
									</div>
									</div>
									<div class="card-clien">
								                <div class="card-item-clien">
												<img src="img/rio.png"/>
												<span>	Prefeitura da Cidade do Rio de Janeiro  </span>
										</div>
										</div>
										<div class="card-clien">
								                <div class="card-item-clien">
													<img src="img/pame.png"/>
													<span>	Parque de Material da Aeronáutica do Rio de Janeiro </span>
											</div>
											</div>
											<div class="card-clien">
								                <div class="card-item-clien">
														<img src="img/decea.png"/>
														<span>		Departamento de Controle do Espaço Aéreo</span>
												</div>
                                                </div>
                                                <div class="card-clien">
								                <div class="card-item-clien">
                                                            <img src="img/cida.png"/>
                                                            <span>	Quarto Centro Integrado de Defesa Aérea e Controle de Tráfego Aéreo</span>
                                                    </div>
                                                    </div>
                                                    <div class="card-clien">
								                <div class="card-item-clien">
                                                                <img src="img/marinha.png"/>
                                                                <span>		Marinha do Brasil</span>
                                                        </div>
                                                        </div>
							</div>
                 </section>
				 <?php endwhile; else: endif; ?>
                 
                
                 <?php get_footer(); ?>
