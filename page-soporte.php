<?php get_header(); ?>
<div class="diseno">
	    <div class="row">
        <aside class="large-9 large-centered columns">
          <h1><span class="dispro">Quítate el estrés de <span>Wordpress</span></span> <span class="tagline">Soporte <span>premium </span>para blogs.</span></h1>
          
        </aside>
    </div>
</div>
	<div class="row">
		<div class="large-12 columns">
			<div class="large-10 large-centered columns">
				<?php  if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article  class="disenopost">
						<header>
							<h1>Quítate el estrés de Wordpress</h1>
							
						</header>
						<section>
							<div>
								<div class="large-4 medium-4 small-12 columns">
									<ul class="pricing-table">
									  <li class="title">Básico</li>
									  <li class="price">$49.99</li>
									  <li class="description">tareas ilimitadas</li>
									  <li class="bullet-item">48 horas</li>
									  <li class="bullet-item">5GB Storage</li>
									  <li class="bullet-item">20 Users</li>
									  <li class="cta-button"><a class="button" href="#">Buy Now</a></li>
									</ul>
								</div>
								<div class="large-4 medium-4 small-12 columns">
									<ul class="pricing-table">
									  <li class="title">Premium</li>
									  <li class="price">$69.99</li>
									  <li class="description">ilimitadas</li>
									  <li class="bullet-item">24 horas</li>
									  <li class="bullet-item">5GB Storage</li>
									  <li class="bullet-item">20 Users</li>
									  <li class="cta-button"><a class="button" href="#">Buy Now</a></li>
									</ul>
								</div>
								<div class="large-4 medium-4 small-12 columns">
									<ul class="pricing-table">
									  <li class="title">Agencia</li>
									  <li class="price">$299.99</li>
									  <li class="description">An awesome description</li>
									  <li class="bullet-item">1 Database</li>
									  <li class="bullet-item">5GB Storage</li>
									  <li class="bullet-item">20 Users</li>
									  <li class="cta-button"><a class="button" href="#">Buy Now</a></li>
									</ul>
								</div>
							</div>
							<p><strike>Realizo sitios web en HTML5, CSS3...</strike> Dejemos las cosas tecnicas aburridas para el final, y preocupemnos primero por</p>
							
							<h2>¿Que valor le puedo dar a tu negocio online?</h2>
							<p>Tu sitio web debe ser atractivo, que invite al usuario a pasar mas tiempo en el mismo y que lo lleve a realizar el objetivo de tu sitio, el cual puede ser realizar una venta, una suscrición o una acción social.</p> 
							<p>Busco la mejor manera de presentar tu contenido, para que tu blog sea agradable, útil y rentable.</p>
							<p style="max-width:400px; text-align:center; margin:auto;"><img src="http://ch3.es/wp-content/uploads/2014/11/ch3-es-iphone-.jpg" title="responsive design"></p>
							<p><strong>Cuando diseño una web, tengo cuidado de:</strong> </p>
							<ul>
								<li><span class="icon-star"></span><strong>Diseño:</strong> que el sitio sea moderno, agradable, útil y que <strong>genere conversiones.</strong> </li>
								<li><span class="icon-stats"></span><strong>SEO On Page:</strong> tu sitio no solo debe de agradarle a los usuarios, también a los motores de búsqueda.</li>
								<li><span class="icon-android"></span><strong>Diseño adaptable:</strong> siempre cuido de que el sitio se visualice correctamente en cualquier dispositivo. </li>
								<li><span class="icon-share"></span><strong>Sociable:</strong> tus visitantes deben recordar no solo comer frutas y verduras, sino también comprtir el contenido de tu sitio.</li>
							</ul>
							<br>
							<p>Puedes ver mi portafolio de trabajo en la <a href="http://ch3.es"><strong>pagina de inicio</strong></a> o en <a href="https://www.behance.net/ch3jose"><strong>mi perfil en behance.</strong></a></p>
							<h3 style="text-align:center">¿Tienes algún proyecto en mente? ¡Conversemos!</h3>
							<div class="large-10 large-centered small-12 columns">
								<?php echo do_shortcode('[contact-form-7 id="12" title="Formulario de contacto 1"]'); ?>
							</div>

							

						</section>
						<footer>
							
						</footer>
					</article>
				<?php endwhile; else:?>
					<p>No he agregado ningun post al parecer....</p>
				<?php endif; ?>	

			</div>
			<?php // get_sidebar(); ?>
		</div>			
	</div>
<?php get_footer(); ?>