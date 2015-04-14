<?php
if (is_home()) {
	# code...
}
else{ ?>


<div class="contenedor row">
	<aside class="otrosrelacionados large-12 columns">
		<p class="titulorelacionados">También te puede interesar</p>
			<?php $the_query = new WP_Query( 'posts_per_page=6&orderby=rand&ignore_sticky_posts=1' );
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					if ( ( $the_query->current_post ) == 3   ){
						echo '<div class="clearpostbajos"></div>';

					}
					else{

					}
					echo '<div class="lesspadding medium-4 small-6 columns"><a href="'.get_the_permalink().'" >';
						if (has_post_thumbnail()) {
					        the_post_thumbnail('miniatura');
					    }
					    else{ 
					        echo '<img src="'.get_bloginfo('stylesheet_directory').'/img/default-relacionadas.jpg">';
					    };
	    				echo '<span class="titulo">'.get_the_title().'</span></a></div>'; 
				}
				}
			else {
			}
			wp_reset_postdata(); ?>

	</aside>
</div>





<?php }

 ?>



<div style="clear:both;"></div>
	<footer class="footer" id="footer">
		<!--<aside class="postfooters">
			<div class="row">
				<div class="medium-3 columns">
				</div>

				<div class="medium-3 columns">
				</div>

				<div class="medium-3 columns">
				</div>

				<div class="medium-3 columns">
				</div>
			</div>
		</aside>-->
		<aside class="row">
			<div class="large-12 columns show-for-medium-up categoriasfooter">
				<div class="medium-3 columns">
					<li class="cat-item cat-item-3688"><a href="http://www.notilogia.com/amazon" title="Tutoriales, productos y recomendaciones de la Tienda Amazon." class="titulocat">Amazon</a>
						<ul class="children">
							<li class="cat-item cat-item-3693"><a href="http://www.notilogia.com/amazon/celulares" title="Revisiones, Análisis, y Listas de Teléfonos Smartphone de ultima generación a la venta en Amazon.">Celulares</a>
						</li>
							<li class="cat-item cat-item-3695"><a href="http://www.notilogia.com/amazon/gift-card" title="Tarjetas de Regalo de Amazon, una excelente opción para guardar Dolares y Comprar.">Gift card</a>
						</li>
							<li class="cat-item cat-item-3998"><a href="http://www.notilogia.com/amazon/ofertas" title="Amazon siempre ofrece ofertas sorpresa, las que podamos pescar las aprovechamos y hacemos post con mucho contenido en la red para impulsar el producto y generar comisiones.">Ofertas</a>
						</li>
							<li class="cat-item cat-item-3755"><a href="http://www.notilogia.com/amazon/regalos" title="Aprovecha tu cupo para comprar regalos para toda ocasión. ">Regalos</a>
						</li>
							<li class="cat-item cat-item-3694"><a href="http://www.notilogia.com/amazon/ropa-zapatos" title="Vístete con Amazon con la ultima tendencia en moda disponible aquí.">Ropa y Zapatos</a>
						</li>
							<li class="cat-item cat-item-3999"><a href="http://www.notilogia.com/amazon/tutoriales-amazon" title="Comprar en Amazon puede resultar engorroso, presentamos guías y manuales para orientar a los compradores, ofreciendo implícitamente los productos de amazon.">Tutoriales de Amazon</a>
						</li>
						</ul>
					</li>
					<li class="cat-item cat-item-3985"><a href="http://www.notilogia.com/gastronomia" class="titulocat" title="Esta sección estará orientada a la publicación de recetas de cocina y reviews (evaluaciones y opiniones) de los mejores restaurantes de Venezuela">Gastronomía</a>
						<ul class="children">
							<li class="cat-item cat-item-4007"><a href="http://www.notilogia.com/gastronomia/recetas" title="Selección exclusiva de las mejores recetas del mundo y locales.">Recetas</a>
						</li>
						</ul>
					</li>
					<li class="cat-item cat-item-3981"><a href="http://www.notilogia.com/notigestion" class="titulocat" title="Aquí irán compiladas todas las publicaciones referentes a tramites y tutoriales del sistema administrativo venezolano, también se agregaran todas aquellas cadenas de interés publico como las de bancos, leyes, símbolos patrios.">Notigestión</a>
						<ul class="children">
							<li class="cat-item cat-item-3996"><a href="http://www.notilogia.com/notigestion/monitores" title="Paginas dedicadas al control de información que se actualiza constantemente, como el precio del dolar en sus diferentes presentaciones, barril de petroleo y loterías.">Monitores</a>
						</li>
							<li class="cat-item cat-item-3686"><a href="http://www.notilogia.com/notigestion/tramites" title="Tutoriales y herramientas para realizar tramites en Instituciones en Venezuela.">Tramites</a>
						</li>
							<li class="cat-item cat-item-3995"><a href="http://www.notilogia.com/notigestion/tutoriales" title="Como tramitar y gestionar tramites, inscripciones y documentos en Venezuela, paso a paso, guías ilustradas y dirigidas.">Tutoriales</a>
						</li>
						</ul>
					</li>
				</div>
				<div class="medium-3 columns">
					<!--<li class="cat-item cat-item-3680"><a href="http://www.notilogia.com/notilogia" class="titulocat" title="Somos un portal de información útil y herramientas web para Venezuela.">Notilogia</a>
						<ul class="children">
							<li class="cat-item cat-item-3685"><a href="http://www.notilogia.com/notilogia/entretenimiento" title="Las Ultimas Noticias del espectáculo Venezolano y Mundial.">Entretenimiento</a>
							</li>
								<li class="cat-item cat-item-3681"><a href="http://www.notilogia.com/notilogia/herramientas" title="Herramientas y aplicaciones de la web que haran tu vida mas sencilla.">Herramientas</a>
							</li>
								<li class="cat-item cat-item-3683"><a href="http://www.notilogia.com/notilogia/novedades" title="Acontecimientos de ultimo momento.">Novedades</a>
							</li>
								<li class="cat-item cat-item-3696"><a href="http://www.notilogia.com/notilogia/tecnologia" title="Lo ultimo en tecnología, gadgets de ultima generación. Revisiones y presentaciones de lo ultimo en Tecnología.">Tecnología</a>
							</li>
								<li class="cat-item cat-item-3687"><a href="http://www.notilogia.com/notilogia/viral" title="Material multimedia compartido por los usuarios.">Viral</a>
							</li>
						</ul>
					</li>	-->
					<li class="cat-item cat-item-3978"><a href="http://www.notilogia.com/politica" class="titulocat" title="El acontecer político, económico y social de Venezuela, las ultimas incidencias del panorama mundial y noticias del gobierno.">Política</a>
						<ul class="children">
							<li class="cat-item cat-item-3988"><a href="http://www.notilogia.com/politica/atipico" title="Todo lo demás que no encaje en las sub categorías que conforman la categoría Política.">Atípicos</a>
						</li>
							<li class="cat-item cat-item-3986"><a href="http://www.notilogia.com/politica/economia" title="Los datos financieros de Venezuela, el impacto de los movimientos económicos internacionales en la vida diaria.">Economía</a>
						</li>
							<li class="cat-item cat-item-3684"><a href="http://www.notilogia.com/politica/gobierno" title="Noticias sobre el Gobierno Venezolano.">Gobierno</a>
						</li>
							<li class="cat-item cat-item-4483"><a href="http://www.notilogia.com/politica/opinion" title="Columnas de Opinión de los máximos exponentes del acontecer político y social venezolano, entre los mejores destacan: Nelson Bocaranda, Charito Rojas, Gustavo Tovar Arroyo, entre otros.">Opinión</a>
						</li>
							<li class="cat-item cat-item-3987"><a href="http://www.notilogia.com/politica/sucesos" title="Los últimos acontecimientos relacionados con Nicolas Maduro o los representantes del gobierno y la tolda opositora. ">Sucesos</a>
						</li>
						</ul>
					</li>
					<li class="cat-item"><a href="http://www.notilogia.com/categorydeportes"  class="titulocat" title="Información y Noticias deportivas de Venezuela y el mundo.">Deportes</a>
					<ul>
						<li><a href="#">Baloncesto</a></li>
						<li><a href="#">Beisbol</a></li>
						<li><a href="#">Futbol</a></li>
						<li><a href="#">Otros deportes</a></li>
					</ul>
					</li><!-- ordenar deportes-->

				</div>
				<div class="medium-3 columns">
					<li class="cat-item cat-item-3980"><a href="http://www.notilogia.com/salud" class="titulocat" title="Recomendaciones de belleza, tips para el cuidado personal y todo sobre las enfermedades que causan impacto hoy en día en sociedad.">Salud</a>
						<ul class="children">
							<li class="cat-item cat-item-3992"><a href="http://www.notilogia.com/salud/belleza" title="Cuidado de la piel, recomendaciones para tratamientos capilares y datos importantes para que siempre las mujeres se vean bellas.">Belleza</a>
						</li>
							<li class="cat-item cat-item-3991"><a href="http://www.notilogia.com/salud/fitness" title="La nueva tendencia en ejercicios y cuidado del cuerpo.">Fitness</a>
						</li>
							<li class="cat-item cat-item-4201"><a href="http://www.notilogia.com/salud/general" title="Temas que resumen las noticias sobre avances científicos o apariciones de enfermedades, virus, pandemias e información que no se ajuste a las demás sub categorías.">General</a>
						</li>
							<li class="cat-item cat-item-3990"><a href="http://www.notilogia.com/salud/nutricion" title="La sección Nutrición estará orientada a la forma de alimentación, daremos consejos y tips para mejorar la forma en la que comen las personas, vida sana.">Nutrición</a>
						</li>
							<li class="cat-item cat-item-3989"><a href="http://www.notilogia.com/salud/psicologia" title="Información de interés sobre la salud mental.">Psicología</a>
						</li>
							<li class="cat-item cat-item-3993"><a href="http://www.notilogia.com/salud/sexualidad" title="Vista desde un punto de vista de salud, la sexualidad es un tópico importante, por que aborda todos los aspectos relacionados con el acto sexual y aporta datos para mejorarlo.">Sexualidad</a>
						</li>
						</ul>
					</li>					
					<li class="cat-item cat-item-3982"><a href="http://www.notilogia.com/sexy" class="titulocat" title="El contenido en esta sección debe ser totalmente sexual, muy llamativo tanto para hombres como para mujeres.">Sexy</a>
						<ul class="children">
							<li class="cat-item cat-item-4000"><a href="http://www.notilogia.com/sexy/chica-semanal" title="Un post semanal sobre la chica mas destacada que adornara nuestras pantallas. ">Chica de la Semana</a>
						</li>
							<li class="cat-item cat-item-4001"><a href="http://www.notilogia.com/sexy/xplotada" title="Xplotada, la chica que se publicara los jueves, sera una estrella famosa o algo por el estilo, se hará una galería de imágenes con leyendas atrevidas.">Xplotada</a>
						</li>
							<li class="cat-item cat-item-4002"><a href="http://www.notilogia.com/sexy/xplotado" title="Lo mismo que la Xplotada pero para mujeres.">Xplotado</a>
						</li>
						</ul>
					</li>


				</div>
				<div class="medium-3 columns">
					<li class="cat-item cat-item-3983"><a href="http://www.notilogia.com/tendencia" class="titulocat" title="En esta sección se incluyen todos los contenidos virales que van a apareciendo en la red, ademas también se tratan aspectos como farándula, banalidad y noticias populares.">Tendencia</a>
						<ul class="children">
							<li class="cat-item cat-item-4003"><a href="http://www.notilogia.com/tendencia/banalidad" title="Noticias superficiales, que no son de interés social, pero si distraen.">Banalidad</a>
						</li>
							<li class="cat-item cat-item-4005"><a href="http://www.notilogia.com/tendencia/farandula" title="La vida de las estrellas, noticias de cine, arte y espectáculos, moda, entre otras.">Farandula</a>
						</li>
							<li class="cat-item cat-item-4004"><a href="http://www.notilogia.com/tendencia/popular" title="Cuando exista una información que este sonando mucho, como la muerte de un artista, ira en la sección popular, el community manager definirá que es y que no es popular.">Popular</a>
						</li>
							<li class="cat-item cat-item-4006"><a href="http://www.notilogia.com/tendencia/viral-tendencia" title="No es contenido span, son proyecciones de los temas mas hablados y jocosos que se ven en las redes sociales. Por lo general van acompañados de reacciones de personalidades y referencias.">Viral</a>
						</li>
						</ul>
					</li>					
					<li class="cat-item cat-item-3682"><a href="http://www.notilogia.com/venezuela"  class="titulocat" title="Información y Noticias de Venezuela.">Venezuela</a>
						<ul class="children">
							<li class="cat-item cat-item-3691"><a href="http://www.notilogia.com/venezuela/eventos" title="Presentaciones de artistas, conferencias y sucesos nacionales e internacionales.">Eventos</a>
							</li>
								<li class="cat-item cat-item-3689"><a href="http://www.notilogia.com/venezuela/intereses" title="Información puntual de importancia para la colectividad venezolana.">Intereses</a>
							</li>
								<li class="cat-item cat-item-3692"><a href="http://www.notilogia.com/venezuela/loteria" title="Resultados y Sorteos de las Loterías venezolanas.">Loterias</a>
							</li>
								<li class="cat-item cat-item-3690"><a href="http://www.notilogia.com/venezuela/noticias" title="Informacion, sucesos y acontecimientos de Venezuela y el mundo.">Noticias</a>
							</li>
						</ul>
					</li>

				
				</div>


			</div>
		</aside>
		<div class="footermenu large-12 columns">
			<nav>
				<ul>
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Acerca de Notilogia</a></li>
					<li><a href="#">TOS</a></li>
					<li><a href="#">Politica de privacidad</a></li>
					<li><a href="#">Publicidad</a></li>
					<li><a href="#">Contacto</a></li>
				</ul>				
			</nav>
				<p>© 2015 Todos los derechos reservados</p>
		</div>
	</footer>
<script>
  var nav = responsiveNav(".nav-collapse");
</script>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/twitterFetcher_min.js"></script>
<script type="text/javascript">
var tuits = {
  "id": '568012078628470784',
  "domId": 'tweets',
  "maxTweets": 4,
  "enableLinks": true
};
twitterFetcher.fetch(tuits);

</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=626933740708235";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>
   $(function() {
    $('.slider').unslider();
	});

   var unslider = $('.slider').unslider();

    $('.unslider-arrow').click(function() {
        var fn = this.className.split(' ')[1];

        //  Either do unslider.data('unslider').next() or .prev() depending on the className
        unslider.data('unslider')[fn]();
    });
    $('a[href^="#"]').click(function() {
				//  Find the target element
				var target = $($(this).attr('href'));

				//  And get its position
				var pos = target.offset(); // fallback to scrolling to top || {left: 0, top: 0};

				//  jQuery will return false if there's no element
				//  and your code will throw errors if it tries to do .offset().left;
				if(pos) {
					//  Scroll the page
					$('html, body').animate({
						scrollTop: pos.top,
						scrollLeft: pos.left
					}, 1000);
				}

				//  Don't let them visit the url, we'll scroll you there
				return false;
			});



$( ".open-search" ).click(function(e) {
    e.preventDefault();

  $('.search-wrapper').fadeToggle();
	$('.open-search .icon-search').toggleClass('close');
});
</script>
</body>
</html>
</html>