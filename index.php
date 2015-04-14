<?php get_header(); ?>
	<div class="row">
		<div class="large-12  columns">

			<div class="contenedor medium-8 columns np">
				<aside class="large-12 columns">
					<div class="slider">
						<ul class="wrap">
						<?php $the_slider = new WP_Query( 'cat=4667&posts_per_page=3' );
							if ( $the_slider->have_posts() ) {
								while ( $the_slider->have_posts() ) {
									$the_slider->the_post();
									$imagen_fondo = wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'blogdestacada');
									echo '<li style="background: url('.$imagen_fondo[0].') no-repeat center center; background-size:cover;" '; post_class(); echo '><h2><a href="'.get_the_permalink().'" >'.get_the_title().'</a></h2>	</li>'; 
								}
							
							} 
							else {
							}
							wp_reset_postdata(); ?>
					
						</ul>
					</div>
					<a href="#" class="unslider-arrow prev"><span class="icon-keyboard-arrow-left">
					
					</span></a>
					<a href="#" class="unslider-arrow next"><span class="icon-keyboard-arrow-right">
					
					</span></a>
				</aside>
				<div class="large-9 medium-12 columns">

				<?php $portada = new WP_Query( 'cat=4669&posts_per_page=6' );
				// The Loop
				if ( $portada->have_posts() ) {
					//echo '<ul>';
					while ( $portada->have_posts() ) { 
					$portada->the_post();?>
					
					<article <?php post_class('index'); ?>>
						<a href="<?php the_permalink(); ?>">


						<?php the_post_thumbnail('blogdestacada');	?>




						<h1><?php the_title(); ?></h1>	
						</a>
						<footer>
							<?php the_category(',');echo " - "; the_time('d/m/Y');echo " - ";ch3_fb_comments_count(); ?>
							
						</footer>
						<?php the_excerpt('ch3_texto_resumen'); ?>
					</article>
					

					<?php } 
					}
					else{ ?>
					<p>No he agregado ningun post al parecer....</p>
					<?php } ?>	

				</div>

				<div class="large-3 hide-for-medium hide-for-small columns" id="sidebarmedio" style="float:left;">
					<?php
					$args = array('posts_per_page' => 15 );
					$sidebar_medio = new WP_Query( $args );
					if ( $sidebar_medio->have_posts() ) {
						//echo '<ul>';
						while ( $sidebar_medio->have_posts() ) {
							$sidebar_medio->the_post(); ?>
							<article <?php post_class('sidebarmedio'); ?>>
								<a href="<?php echo get_the_permalink(); ?>">
								<?php the_post_thumbnail('cuadro') ?>
								<h3><?php the_title(); ?></h3>	
								</a>
								<footer>
									<?php //the_category(',');echo " - "; the_date();echo " - "; ?>
								</footer>
							</article>
					<?php
						}
						//echo '</ul>';
					} else {
						// no posts found
					}
					/* Restore original Post Data */
					wp_reset_postdata(); ?>
				</div>

			</div>


			
			<?php get_sidebar('index'); ?>
			<div class="large-12  columns">
					<div style="background:orange; text-align:center; color:white; padding:2.5em 0;margin: 0 0 4em 0;	">
						<h2>Publicidad</h2>
					<?php //ch3_numeric_posts_nav('Anterior','Siguiente','paginacion');  ?>
				</div>
			</div>
			
		</div>
	</div>
	<div class="row postbajos">
		<div class="medium-8 columns">



				<?php global $wp_query;
				 if (have_posts()) : while (have_posts()) : the_post(); 


					if ( ( $wp_query->current_post % 2 ) == 0 ) : ?>
					<div class="clearpostbajos"></div>
					<?php else : ?>
					
						
					<?php endif;

					echo '<article '; post_class('lesspadding small-6 columns'); echo '><a href="'.get_the_permalink().'" >'; ?>
					<?php the_post_thumbnail('miniatura');?>
					<h2><?php the_title(); ?></h2>	
					</a>
					<footer>
						<?php the_category(',');echo " - "; the_time('d/m/Y');echo " - <span class='icon-messenger'></span>"; ch3_fb_comments_count();?> 
						
					</footer>
					<?php the_excerpt('ch3_texto_resumen'); ?>
					</article><?php

				endwhile;
				
			
			 else:
				echo "No se encontraron posts.";
			endif;
			wp_reset_postdata(); ?>

			<div class="cargarmas">
				<a href="#">Cargas mas posts</a>
			</div>
		</div>
		<div class="medium-4 columns">
			<?php get_sidebar('indexdos'); ?>
		</div>
	</div>
<?php get_footer(); ?>
