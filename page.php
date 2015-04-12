<?php get_header(); ?>

	<div class="row">
		<div class="large-12 columns">
			<div class="large-10 large-centered columns">
				<?php  if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article>
						<header>
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							
						</header>
						<section>
							<?php the_content() ?>
						</section>
						<footer>
							<hr>
							<div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false"></div>
							<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" <?php 
							if (get_option('winged_twv')) {		echo 'data-via="'.get_option('winged_twv').'"'; } echo 'data-lang="es"'; 
							if (get_option('winged_twh')) { echo 'data-hashtags="'.get_option('winged_twh').'"';}	?> >Twittear</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
							<div class="gplus">
							<div class="g-plusone" data-size="tall" data-annotation="inline" data-width="120" data-href="<?php the_permalink(); ?>"></div>
							</div>
						</footer>
					</article>
					<hr>
				<?php endwhile; else:?>
					<p>No he agregado ningun post al parecer....</p>
				<?php endif; ?>	

			</div>
			<?php // get_sidebar(); ?>
		</div>			
	</div>
<?php get_footer(); ?>