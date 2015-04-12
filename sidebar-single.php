
<aside class="sidebarsingle npl large-3 medium-3 columns left">
<aside class="tuiter">
	<h2>Sigueme</h2>
	<div id="tweets"></div>
</aside>
	<!-- <div class="category-related-single">
		Relacionados por categoria
		<h2><?php $showcategory = get_the_category(); echo $showcategory[0]->name; ?></h2>
		<?php $catid = $showcategory[0]->cat_ID;
		$args = array(
			'category__in' => $catid,
			'ignore_sticky_posts' => 1,
			'posts_per_page' => 4,
			'orderby' => 'rand'
		);
		$the_query = new WP_Query($args);
		if ( $the_query->have_posts() ) {
			echo '<div class="relacionados  row ">';
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				echo '<div class="inline-block sidebarderechosingle"><div class="small-5 columns"><a href="'.get_the_permalink().'">';
				if (has_post_thumbnail()) {
			        the_post_thumbnail('cuadro');
				}
				else{ 
				    echo '<img src="'.get_bloginfo('stylesheet_directory').'/img/default-thumbnail.jpg">';
				};
				echo '</a></div><div class="small-7 columns align-left nopadding"><a href="'.get_the_permalink().'">'.get_the_title() . '</a></div></div>';
			}
			echo '</div>';
		} 
		else {
			echo "No se encontraron posts";
		}
		wp_reset_postdata(); ?>

	</div> -->



	<!--<div class="category-related-single">
		<h2>Notigestión</h2>
		<?php 
		$args = array(
			'category__in' => 3981,
			'ignore_sticky_posts' => 1,
			'posts_per_page' => 4,
			'orderby' => 'rand'
		);
		$the_query = new WP_Query($args);
		if ( $the_query->have_posts() ) {
			echo '<div class="relacionados  row ">';
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				echo '<div class="inline-block sidebarderechosingle"><div class="small-5 columns"><a href="'.get_the_permalink().'">';
				if (has_post_thumbnail()) {
			        the_post_thumbnail('cuadro');
				}
				else{ 
				    echo '<img src="'.get_bloginfo('stylesheet_directory').'/img/default-thumbnail.jpg">';
				};
				echo '</a></div><div class="small-7 columns align-left nopadding"><a href="'.get_the_permalink().'">'.get_the_title() . '</a></div></div>';
			}
			echo '</div>';
		} 
		else {
			echo "No se encontraron posts";
		}
		wp_reset_postdata(); ?>

	</div>-->

	<div class="category-related-single">
		<h2>Notigestión</h2>
		<?php 
		$args = array(
			'category__in' => 3981,
			'ignore_sticky_posts' => 1,
			'posts_per_page' => 4,
			'orderby' => 'rand'
		);
		$the_query = new WP_Query($args);
		if ( $the_query->have_posts() ) {
			echo '<div class="relacionados  row ">';
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				echo '<div class="small-12 columns align-left nopadding"><a href="'.get_the_permalink().'">';
				if (has_post_thumbnail()) {
			        the_post_thumbnail('miniatura');
				}
				else{ 
				    echo '<img src="'.get_bloginfo('stylesheet_directory').'/img/default-thumbnail.jpg">';
				};
				echo get_the_title() . '</a></div>';
			}
			echo '</div>';
		} 
		else {
			echo "No se encontraron posts";
		}
		wp_reset_postdata(); ?>

	</div>

	<div class="notigestionsidebar">
		<h2>Notigestión</h2>
		<?php 
		$args = array(
			'category__in' => 3981,
			'ignore_sticky_posts' => 1,
			'posts_per_page' => 4,
			'orderby' => 'rand'
		);
		$the_query = new WP_Query($args);
		if ( $the_query->have_posts() ) {
			echo '<div class="relacionados  row ">';
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				echo '';
				echo '<div class="small-12 columns align-left nopadding">';
				echo '<a href="'.get_the_permalink().'"><span class="icon-keyboard-arrow-right" style="font-weight: bold;color: #045e67;"></span>'.get_the_title() . '</a><hr class="separadorrelacionadas"></div>';
			}
			echo '</div>';
		} 
		else {
			echo "No se encontraron posts";
		}
		wp_reset_postdata(); ?>

	</div>

<div class="fb-like-box" data-href="https://www.facebook.com/notilogia" data-width="230" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
<br>
</aside>