<?php $contato = get_page_by_title('contato'); ?>

<section class="quebra">
			<div class="quote container">
				<span class="frase">“o verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana.”</span>
			</div>
			<h3 class="cite">WILLIAM MORRIS</h3>
		</section>

		<footer>
			<div class="footer">
				<div class="container">

					<div class="footer_historia">
						<h3>Nossa História</h3>
						<p>O verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana cotidiana. interesse por todos os detalhes da vida cotidiana cotidiana.</p>
					</div>

					<div class="footer_contato">
						<h3>Contato</h3>
						<ul>
							<li> <?php the_field('telefone', $contato); ?></li>
							<li> <?php the_field('email', $contato); ?></li>
							<li> <?php the_field('endereco1', $contato); ?></li>
						</ul>
					</div>

					<div class="footer_redes">
						<h3>Redes Sociais</h3>
						<ul>
                                <li><a href="<?php the_field('link_face', $contato); ?>" target="_blank"><img class="soci" src="<?php echo get_template_directory_uri(); ?>/img/face.svg"></a></li>
                                <li><a href="<?php the_field('link_insta', $contato); ?>" target="_blank"><img class="soci" src="<?php echo get_template_directory_uri(); ?>/img/insta.svg"></a></li>
                                <li><a href="<?php the_field('link_twt', $contato); ?>" target="_blank"><img class="soci" src="<?php echo get_template_directory_uri(); ?>/img/twt.svg"></a></li>
                            </ul>
						</div>
					</div>
			</div>

			<div class="copy">
				<div class="container">
					<p class="teste">Copyright (c)  <?php echo date('Y'); ?> MEDTEC - Todos os Direitos Reservados.</p>
				</div>
			</div>
		</footer>

		<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60088262-1', 'auto');
	  ga('send', 'pageview');

	</script>

	<!-- Inicio Wordpress Footer -->
	<?php wp_footer(); ?>
	<!-- Final Wordpress Footer -->

</body>
</html>