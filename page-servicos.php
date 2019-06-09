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
					<img src="img/radar.svg">
					<div >
						<h3 class="servi-h3">Radar</h3>
						<p>A empresa MEDTEC trabalha fornecendo placas, módulos, válvulas e peças de uma forma geral importando com os principais fabricantes. Atuamos no mercado nos modelos de Radar de Defesa, Radar de Controle, Radar Meteorológico, Radar de Busca, Radar Banda C, Radar Secundário, Radar Transportável, Giga de Testes, Simuladores, Contra Medidas, atendendo as Forças Armadas, Prefeitura e Governo do Estado. Realizamos manutenção, atualização tecnológica, contratos de serviços.</p>
					</div>
					</div>
					<li>
					<div class="service-list-item-2">
					<img src="img/sec.svg">
					<div >
						<h3 class="servi-h3">Segurança</h3>
						<p>A empresa MEDTEC trabalha fornecendo Placas, Módulos, Câmeras, Speed Dome, DVR, cabos, Drone Sistemas, Sistemas de extinção de incêndio, fibra ótica e peças de uma forma geral importando com os principais fabricantes. Realizamos manutenção, atualização tecnológica, contratos de serviços.</p>
					</div>
					</div>
				</div>
				</li>
				<li>
					<div class="service-list-item-2">
							<img src="img/tele.svg">
							<div >
								<h3 class="servi-h3">Telecomunicações</h3>
								<p>A empresa MEDTEC trabalha fornecendo Placas, Módulos, Roteadores, Switch, Servidores, Sistemas, fibra ótica e peças de uma forma geral importando com os principais fabricantes.</p>					</div>
					</div>
				</li>
				<li>
					<div class="service-list-item-2">
							<img src="img/ener.svg">
							<div >
								<h3 class="servi-h3">Energia</h3>
								<p>A empresa MEDTEC trabalha fornecendo Placas, Módulos, Led, Placas Solares, Sistemas, Inversores, Baterias e peças de uma forma geral importando com os principais fabricantes. Desenvolvemos projetos específicos de diminuição de consumo de energia minimizando gastos nas empresas. Realizamos manutenção, atualização tecnológica, contratos de serviços.

								</p>		
								</div>
					</div>
				</li>
				<li>
					<div class="service-list-item-2">
							<img src="img/met.svg">
							<div >
									<h3 class="servi-h3">Meteorologia</h3>
									<p>A empresa MEDTEC trabalha fornecendo Placas, Módulos, Estações Meteorológicas, Medidores de vento, Medidores de pressão, Medidores de umidade, Medidores de temperatura, Sistemas, e peças de uma forma geral importando com os principais fabricantes. Realizamos ajustes e calibração em instrumentos de medidas.</p>					</div>
					</div>
				</li>
				<li>
					<div class="service-list-item-2">
					<img src="img/bio.svg">
					<div >
						<h3 class="servi-h3">Biomédica</h3>
						<p>A empresa MEDTEC trabalha fornecendo Placas, Módulos, Sistemas, e peças de uma forma geral importando com os principais fabricantes. Realizamos manutenção em equipamentos biomédicos atendendo os principais hospitais e postos de saúde do Rio de Janeiro.

						</p>	
					</div>
					</div>
				</li>
				</li>
				</ul>
		</section>
		<?php endwhile; else: endif; ?>
		<?php get_footer(); ?>
