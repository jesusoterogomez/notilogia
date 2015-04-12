<?php


function ch3_compartir_post(){ ?>
<?php //echo wp_get_shortlink(); ?>
	<div class="sharing">
		<div class="small-3 columns fb">
			<a target="_blank" href="javascript:window.location=%22http://www.facebook.com/sharer.php?u=%22+encodeURIComponent(document.location)+%22&#38;t=%22+encodeURIComponent(document.title)" title="Compartir en facebook"><span class="icon-facebook"></span><span class="hide-for-small">Compartir</span></a>
		</div>
		<div class="small-3 columns tw">
			<a class="top_social" href="javascript:window.location=%22https://twitter.com/share?url=%22+encodeURIComponent(document.location)+%22&text=%22+encodeURIComponent(document.title)"><span class="icon-twitter"></span><span class="hide-for-small">Tweet</span></a>
		</div>
		<div class="small-3 columns gp">
			<a href="https://plusone.google.com/_/+1/confirm?hl=en&url=<?php if(is_home()){echo home_url();}else{the_permalink();} ?>" target="_blank" title="Compartir este artículo en Google Plus"><span class="icon-googleplus"></span><span class="hide-for-small">Google +1</span></a>
		</div>
		<div class="small-3 columns shared">
			<span><span class="triangulocompartir"></span>  <?php echo ch3_total_shares(get_the_permalink()) ?> </span>
		</div>
	</div>
<?php }

function ch3_breadcrumb_links() {
    if (!is_home()) {
        echo '<nav class="breadcrumbs" title="'.get_bloginfo('description').'">';
        echo '<a href="'.get_bloginfo('wpurl').'">';bloginfo('name');
        echo "</a>  ";
        if (is_category() || is_single()) {
            the_category();
            if (is_single()) {
                echo '<a href="'.get_permalink().'" class="current">';
                the_title();
                echo "</a>";
            }
        } elseif (is_page()) {
            echo '<a href="'.get_permalink().'" class="current">';
            echo the_title().'</nav>';
            echo "</a>";
        }
        echo "</nav>";
    }
}

// Links de navegacion de post personalizados
function ch3_custom_wp_link_pages( $args = '' ) {
    $defaults = array(
        'before' => '<div id="post-pagination">' . __( 'Pages:' ), 
        'after' => '</div>',
        'text_before' => '',
        'text_after' => '',
        'next_or_number' => 'number', 
        'nextpagelink' => __( 'Next page' ),
        'previouspagelink' => __( 'Previous page' ),
        'pagelink' => '%',
        'echo' => 1
    );

    $r = wp_parse_args( $args, $defaults );
    $r = apply_filters( 'wp_link_pages_args', $r );
    extract( $r, EXTR_SKIP );

    global $page, $numpages, $multipage, $more, $pagenow;

    $output = '';
    if ( $multipage ) {
        if ( 'number' == $next_or_number ) {
            $output .= $before;
            for ( $i = 1; $i < ( $numpages + 1 ); $i = $i + 1 ) {
                $j = str_replace( '%', $i, $pagelink );
                $output .= ' ';
                if ( $i != $page || ( ( ! $more ) && ( $page == 1 ) ) )
                    $output .= _wp_link_page( $i );
                else
                    $output .= '<span class="current-post-page">';

                $output .= $text_before . $j . $text_after;
                if ( $i != $page || ( ( ! $more ) && ( $page == 1 ) ) )
                    $output .= '</a>';
                else
                    $output .= '</span>';
            }
            $output .= $after;
        } else {
            if ( $more ) {
                $output .= $before;
                $i = $page - 1;
                if ( $i && $more ) {
                    $output .= _wp_link_page( $i );
                    $output .= $text_before . $previouspagelink . $text_after . '</a>';
                }
                $i = $page + 1;
                if ( $i <= $numpages && $more ) {
                    $output .= _wp_link_page( $i );
                    $output .= $text_before . $nextpagelink . $text_after . '</a>';
                }
                $output .= $after;
            }
        }
    }

    if ( $echo )
        echo $output;

    return $output;
}


// Mostrar gravatars
function ch3_mostrar_avatar($size){
    $gravatar_link = 'http://www.gravatar.com/avatar/' . md5(get_the_author_email()) . '?s='.$size;
    echo '<img src="' . $gravatar_link . '" />';
}

function articulosrelacionados(){
    $categoria = get_the_category($id);
    $argumento = $categoria[0];
    $the_cat_query = new WP_Query('cat = $argumento&posts_per_page=6&orderby=rand');
    echo '<aside class="relacionadasfondoindex row">';
    while ($the_cat_query -> have_posts()){
       $the_cat_query->the_post(); ?>
        <div class="medium-3 small-6 columns">
            <?php  the_post_thumbnail('notiindex');
            echo get_the_title(); ?>
        </div>
    <?php } ;
    echo "</aside>";
    wp_reset_postdata();
}
f
?>