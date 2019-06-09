<?php 
//Template Name: Home
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="intro introducao">
		<div class="container">
		<h1>Impulsionando o seu negócio</h1>
			    <a href="/produtos" class="btn">Orçamento</a>
        </div>
   	</section>
   	<section class="intro-card">
   		<div class="container">
   			<div class="card">
			 <div class="card-item">
			 	<img src="img/location.svg"/>
			 	<h3> Sistema integrado de gestão empresarial (ERP)</h3>
			 	<span>	
					Planejamento de recurso corporativo (em inglês Enterprise Resource Planning – ERP) é um sistema de informação que integra todos os dados e processos de uma organização em um único sistema.  </span>
			 </div>
			 <div class="card-item">
				<img src="img/fone.svg"/>
				<h3> Relacionamento com o Cliente (CRM)</h3>
				<span>	Customer Relationship Management (CRM) é um termo em inglês que pode ser traduzido para a língua portuguesa como Gestão de Relacionamento com o Cliente . Criada para definir toda uma classe de ferramentas que automatizam as funções de contacto com o cliente.</span>
			</div>
			 <div class="card-item">
			 	<img src="img/doc.svg"/>
			 	<h3> Gestão Eletrônica de Documentos (GED)</h3>
			 	<span>Gerenciamento eletrônico de documentos ou Gestão eletrônica de documentos (GED) é uma tecnologia que provê um meio de facilmente gerar, controlar, armazenar, compartilhar e recuperar informações existentes em documentos. </span>
			 </div>
			 			</div>
   		</div>
   		</section>

   		<section class="container service animar">
   			<h1 class="subtitulo">Serviços</h1>
   			<ul class="service-list">
   				<li>
   					<div class="service-list-item">
   					<img src="img/radar.svg">
   					<div >
   						<h3>Radar</h3>
   						<span>A empresa MEDTEC trabalha fornecendo placas, módulos, válvulas e peças de uma forma geral importando com os principais fabricantes. Atuamos no mercado nos modelos de Radar <a href="/servicos">...</a></span>
   					</div>
   					</div>
   					<li>
   					<div class="service-list-item">
   					<img src="img/sec.svg">
   					<div >
   						<h3>Segurança</h3>
   						<span>A empresa MEDTEC trabalha fornecendo Placas, Módulos, Câmeras, Speed Dome, DVR, cabos, Drone Sistemas, Sistemas <a href="/servicos">...</a></span>
   					</div>
   					</div>
   				</li>
   				<li>
   					<div class="service-list-item">
   					<img src="img/met.svg">
   					<div >
   						<h3>Meteorologia</h3>
   						<span>A empresa MEDTEC trabalha fornecendo Placas, Módulos, Estações Meteorológicas, Medidores de vento, Medidores <a href="/servicos">...</a></span>
   					</div>
   					</div>
   				</li>
   				<li>
   					<div class="service-list-item">
   					<img src="img/tele.svg">
   					<div >
   						<h3>Telecomunicações</h3>
   						<span>A empresa MEDTEC trabalha fornecendo Placas, Módulos, Roteadores, Switch, Servidores, Sistemas<a href="/servicos">...</a></span>
   					</div>
   					</div>
   				</li>
   				<li>
   					<div class="service-list-item">
   					<img src="img/ener.svg">
   					<div >
   						<h3>Energia</h3>
   						<span>A empresa MEDTEC trabalha fornecendo Placas, Módulos, Led, Placas Solares, Sistemas<a href="/servicos">...</a></span>
   					</div>
   					</div>
   				</li>
   				<li>
   					<div class="service-list-item">
   					<img src="img/bio.svg">
   					<div >
   						<h3>Biomédica</h3>
   						<span>A empresa MEDTEC trabalha fornecendo Placas, Módulos, Sistemas, e peças de uma forma geral importando <a href="/servicos">...</a></span>
   					</div>
   					</div>
   				</li>
   				</li>
   		    </ul>
   		</section>
   			
   		<section class="portfolio">
   			<h1 class="subtitulo" >Parceiros</h1>
			<div class="container">
				<section class="Cliente">
				<ul class="portfolio_lista rslides_portfolio">
					<li>
						<div class="slide">
							<img src="img/1.png" alt="*"></div>
						<div class="slide">
							<img src="img/2.png" alt="*"></div>
						<div class="slide">
							<img src="img/3.png" alt="*"></div>
					</li>

					<li>
						<div class="slide">
							<img src="img/4.png" alt="*"></div>
						<div class="slide">
							<img src="img/5.png" alt="*"></div>
						<div class="slide">
							<img src="img/6.png" alt="*"></div>
					</li>
					<li>
						<div class="slide">
							<img src="img/8.png" alt="*"></div>
						<div class="slide">
							<img src="img/7.png" alt="*"></div>
						<div class="slide">
							<img src="img/9.png" alt="*"></div>
					</li>
				</ul>
				</section>
			</div>
		</section>
		<?php endwhile; else: endif; ?>
        <?php get_footer(); ?>

 
