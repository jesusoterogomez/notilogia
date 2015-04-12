<?php get_header(); ?>
<div class="imagencategoria">
	<div class="row">
		<div class="medium-5 medium-centered columns">
			<h1><!--Te encuentras en: --><?php single_cat_title();?></h1>
			<p><?php echo category_description();?></p>
		</div>
	</div>

</div>

	<div class="row">
		<div class="large-12  columns">
			<div class="large-8 medium-8 columns">
				<?php $clearfix_archive;
				if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article <?php post_class('archive large-6 medium-6 columns'); ?>>
					<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('blogdestacada');  ?>
					<h1><?php the_title(); ?></h1>	
					</a>
					<footer>
						<?php the_category(',');echo " - "; the_date();echo " - "; ?>
						
					</footer>
					<?php the_excerpt('ch3_texto_resumen'); ?>
					<a class="leermas" href="<?php  the_permalink(); ?>">Leer más</a>
				</article>
				<?php $clearfix_archive++;
					if ($clearfix_archive == 2 || $clearfix_archive == 4 || $clearfix_archive == 8 || $clearfix_archive == 10) { ?>
					<hr class="cleararchive">
					<?php }

					 endwhile; else: ?>
						<p>No he agregado ningun post al parecer....</p>
						<?php endif; ?>	

			</div>
	
			<?php get_sidebar(); ?>
			<div class="large-12  columns"><?php ch3_numeric_posts_nav('Anterior','Siguiente','paginacion');  ?></div>
			
		</div>
	</div>
<?php get_footer(); ?>
