<?php get_header(); ?>

	<div class="row">
		<div class="single large-12 columns">
		<?php
			//$noadsense = array(3982,4000,4001,4002);
			if (is_category(3982) || is_category(4000) || is_category(4001) || is_category(4002)) {?>		
			<!-- amigos.com -->
			<?php } 
			else{?>
					<div class="adsuperior hide-for-small large-12 columns">
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- notilogia senete -->
						<ins class="adsbygoogle"
						     style="display:inline-block;width:728px;height:15px"
						     data-ad-client="ca-pub-8681690577446916"
						     data-ad-slot="2513513317"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					</div>
			<?php } ?>
			
			<?php  if (have_posts()) : while (have_posts()) : the_post(); ?>
				<main class="large-8 medium-8 columns">
					<article <?php post_class(); ?>>
						<header>
							<?php 
							//comienza codigo
							if (has_post_thumbnail( $post->ID ) ): ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							
							<?php endif; 
							$urlimg = $image[0];
							function checkRemoteFile($url)
							{
							    $ch = curl_init();
							    curl_setopt($ch, CURLOPT_URL,$url);
							    // don't download content
							    curl_setopt($ch, CURLOPT_NOBODY, 1);
							    curl_setopt($ch, CURLOPT_FAILONERROR, 1);
							    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
							    if(curl_exec($ch)!==FALSE)
							    {
							        return true;
							    }
							    else
							    {
							        return false;
							    }
							}
							$imagen = checkRemoteFile($urlimg);

					     		//echo '<img src="http://www.notilogia.com/wp-content/themes/QUINCE/img/destacada-grande.jpg">';
					     	 // termina codigo 
					     	?>

					    <h1><?php the_title(); ?></h1>
								
							<?php ch3_breadcrumb_links();?>
							<span class="metadatos">Publicado el dia: <?php the_date(); ?> </span>

						</header>
						<section>
								<div class="adsensecentrado <?php //echo $posicion; ?>">
								<div id="anuncio-cuadro-single-superior"></div>
								<script type="text/javascript"> 
									    /* Calculate the width of available ad space */
									    ad = document.getElementById('anuncio-cuadro-single-superior');
									 
									    if (ad.getBoundingClientRect().width) {
									        adWidth = ad.getBoundingClientRect().width; // for modern browsers 
									    } else {
									        adWidth = ad.offsetWidth; // for old IE 
									    }
									 
									    /* Replace ca-pub-XXX with your AdSense Publisher ID */ 
									    google_ad_client = "ca-pub-8681690577446916";
									 
									    /* Replace 1234567890 with the AdSense Ad Slot ID */ 
									    google_ad_slot = "2387379922";
									  
									    /* Do not change anything after this line */
									    if ( adWidth >= 336 )
     									  google_ad_size = ["336", "280"];
									    else if ( adWidth >= 300 )
									      google_ad_size = ["300", "250"]; /* Medium Rectangle (300 x 250) */
									    else if ( adWidth >= 250 )
									      google_ad_size = ["250", "250"]; /* Square (250 x 250) */
									    else if ( adWidth >= 200 )
									      google_ad_size = ["200", "200"]; /* Small Square (200 x 200) */
									    else if ( adWidth >= 180 )
									      google_ad_size = ["180", "150"]; /* Small Rectangle (180 x 150) */
									    else
									      google_ad_size = ["125", "125"]; /* Button (125 x 125) */
									    document.write (
									     '<ins class="adsbygoogle" style="display:inline-block;width:' 
									      + google_ad_size[0] + 'px;height:' 
									      + google_ad_size[1] + 'px" data-ad-client="' 
									      + google_ad_client + '" data-ad-slot="' 
									      + google_ad_slot + '"></ins>'
									    );
									  
									    (adsbygoogle = window.adsbygoogle || []).push({});
									</script>
									<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">
									</script>
								</div>
							<?php the_content() ?>
						</section>

								<div class="navigationlinks">
									<?php  if (is_single(7799)) {
											
										}
										else{
											ch3_custom_wp_link_pages();
										}
										?>
								
									
								</div>
						
					</article>
				</main>
				<?php get_sidebar('single'); ?>
				
				<div class="large-12 columns">
					<div style="clear:both"></div>
					<footer>
						<div class="adsbottom">
								<div id="google-ads-2"></div>
									<script type="text/javascript"> 
									    /* Calculate the width of available ad space */
									    ad = document.getElementById('google-ads-2');
									 
									    if (ad.getBoundingClientRect().width) {
									        adWidth = ad.getBoundingClientRect().width; // for modern browsers 
									    } else {
									        adWidth = ad.offsetWidth; // for old IE 
									    }
									 
									    /* Replace ca-pub-XXX with your AdSense Publisher ID */ 
									    google_ad_client = "ca-pub-8681690577446916";
									 
									    /* Replace 1234567890 with the AdSense Ad Slot ID */ 
									    google_ad_slot = "3069119120";
									  
									    /* Do not change anything after this line */
									    if ( adWidth >= 728 )
											google_ad_size = ["728", "90"]; /* Leaderboard 728x90 */
										else if ( adWidth >= 468 )
											google_ad_size = ["468", "60"]; /* Banner (468 x 60) */
										else if ( adWidth >= 336 )
									    	google_ad_size = ["336", "280"];
									    else if ( adWidth >= 300 )
									      google_ad_size = ["300", "250"]; /* Medium Rectangle (300 x 250) */
									    else if ( adWidth >= 250 )
									      google_ad_size = ["250", "250"]; /* Square (250 x 250) */
									    else if ( adWidth >= 200 )
									      google_ad_size = ["200", "200"]; /* Small Square (200 x 200) */
									    else if ( adWidth >= 180 )
									      google_ad_size = ["180", "150"]; /* Small Rectangle (180 x 150) */
									    else
									      google_ad_size = ["125", "125"]; /* Button (125 x 125) */
									    document.write (
									     '<ins class="adsbygoogle" style="display:inline-block;width:' 
									      + google_ad_size[0] + 'px;height:' 
									      + google_ad_size[1] + 'px" data-ad-client="' 
									      + google_ad_client + '" data-ad-slot="' 
									      + google_ad_slot + '"></ins>'
									    );
									  
									    (adsbygoogle = window.adsbygoogle || []).push({});
									</script>
									<script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">
									</script>
						</div>
						<hr>
						<div class="findesingle">
							<p class="titulo">Compartido <b><?php echo ch3_total_shares(get_the_permalink()) ?></b> veces, ¡Compartelo tú también!</p>
							<div class="large-7 medium-7 columns compartirnuevo">
								<div class="small-4 columns">
									<span class="circulo fb">
										<a target="_blank" href="javascript:window.location=%22http://www.facebook.com/sharer.php?u=%22+encodeURIComponent(document.location)+%22&#38;t=%22+encodeURIComponent(document.title)" title="Compartir en facebook"><span class="icon-facebook"></span></a>

									</span>
								</div>
								<div class="small-4 columns">
									<span class="circulo tw">
										<a class="top_social" href="javascript:window.location=%22https://twitter.com/share?url=%22+encodeURIComponent(document.location)+%22&text=%22+encodeURIComponent(document.title)"><span class="icon-twitter"></span></a>
									</span>
								</div>
								<div class="small-4 columns">
									<span class="circulo gp">
										<a href="https://plusone.google.com/_/+1/confirm?hl=en&url=<?php if(is_home()){echo home_url();}else{the_permalink();} ?>" target="_blank" title="Compartir este artículo en Google Plus"><span class="icon-google-plus"> </span></a>
									</span>
									</div>
								</div>
								<div class="large-5 medium-5 columns ">
									<div class="small-4 columns">
										<?php  ch3_mostrar_avatar(120); $user_ID = get_current_user_id();?>
									</div>
									<div class="small-8 columns ">
										<div class="perfilautor">
											<?php the_author(); ?>
											<a href="<?php echo 'http://twitter.com/'; the_author_meta('twitter');  ?>" rel="author"><br><span class="icon-twitter"></span><?php the_author_meta('twitter');  ?></a>
										</div>
										
									</div>
								</div>
						</div>
						<div style="clear:both"></div>
						<hr>
						<div id="comentariospost" class="large-8 medium-8 columns">
									
									<div class="comentariosfb">
										<div class="fb-comments" data-href="<?php echo wp_get_shortlink(); ?>" data-num-posts="20" data-width="650"></div>
									</div>
						</div>
						<div class="linksrelacionados large-4  medium-4 columns">
									<?php if (has_tag()) { ?>
										<p>Articulos relacionados:<p>
										<?php	
										global $post;  
										$orig_post = $post; 
										$tags = wp_get_post_tags($post->ID);  
										if ($tags){
										  $tag_ids = array();  
										  foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;  
										  $args=array(  
										    'tag__in' => $tag_ids,  
										    'post__not_in' => array($post->ID),  
										    'posts_per_page'=> 5
										  );       
										  $my_query = new wp_query( $args );
										};							
										if ( $my_query->have_posts() ) {
											echo '<ul class="relacionadasingle">';
											while ( $my_query->have_posts() ) {
												$my_query->the_post();
												echo '<li><a href="'.get_the_permalink().'">' . get_the_title() . '</a></li>';
											}
											echo '</ul>';
										} else {
											// no posts found
										}
										/* Restore original Post Data */
										wp_reset_postdata();

										?>
										<?php //linksrelacionados(); ?>
									<?php }?>
						</div>


					</footer>

				</div>
				<?php endwhile; else:?>
					<p>No he agregado ningun post al parecer....</p>
				<?php endif; ?>	
		
		</div>			
	</div>
	<!--<div class="row">
		<div class="large-4 columns">
		</div>
		<div class="large-4 columns">
		</div>
		<div class="large-4 columns">
		</div>

	</div>-->
	<div class="row">
		<div class="large-12 columns"><hr></div>
	</div>

<?php get_footer(); 