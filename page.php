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