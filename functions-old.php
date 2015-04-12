<?php


require_once( trailingslashit( get_template_directory() ) . 'inc/paginacion.php');


//http://wpcandy.com/teaches/how-to-load-scripts-in-wordpress-themes/#.VMp_qP6G_uA
wp_enqueue_script( 'responsive-nav',get_template_directory_uri().'/js/responsive-nav.min.js' , false, '1.0.32', false );


function texto_resumen($length) {

	return 30;

}
add_theme_support( 'post-thumbnails' );
add_image_size('blogdestacada',700,420,true);
add_image_size('miniatura',300,180,true);
add_filter('excerpt_length', 'texto_resumen');

register_nav_menus( array(
    'header_menu' => 'Menu principal',
    'footer_menu' => 'Menu del footer'
) );


function breadcrumb_links() {
    if (!is_home()) {
        echo '<nav class="breadcrumbs" title="'.get_bloginfo('description').'">';
        echo '<a href="'.get_bloginfo('wpurl').'">';bloginfo('name');
        echo "</a>  ";
        if (is_category() || is_single()) {
            the_category('');
            if (is_single()) {
                echo '<a href="'.get_permalink().'" class="current">';
                the_title();
                echo "</a></nav>";
            }
        } elseif (is_page()) {
            echo the_title().'</nav>';
        }
    }
}   


add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );  
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 ); 
function remove_thumbnail_dimensions( $html ) {     
$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );     
return $html; }


add_filter( 'img_caption_shortcode', 'bs_responsive_img_caption_filter', 10, 3 );
function bs_responsive_img_caption_filter( $val, $attr, $content = null ) {
  extract( shortcode_atts( array(
    'id' => '',
    'align' => '',
    'width' => '',
    'caption' => ''
    ), $attr
  ) );

  if ( 1 > (int) $width || empty( $caption ) )
    return $val;

  $new_caption = sprintf( '<div id="%1$s" class="wp-caption %2$s" style="max-width:100%% !important;height:auto;width:auto;">%4$s<p class="wp-caption-text">%5$s</p></div>',
    esc_attr( $id ),
    esc_attr( $align ),
    '', //( 10 + (int) $width ),
    do_shortcode( $content ),
    $caption
  );
  return $new_caption;
}



//registramos la funcion que crea la pagina
add_action('admin_menu', 'ch3_pagina_admin');
//funcion que crea la pagina   
function ch3_pagina_admin(){
    add_menu_page('Información de sitio ', 'CH3', 'administrator', 'ch3', 'pagina_ch3', 'http://ch3.es/favicon.ico', '3.11');
//Explicacion: http://codex.wordpress.org/Function_Reference/add_menu_page
}


function pagina_ch3(){?>

<h2>Titulo</h2>
<p>Contenido</p>
<?php }

add_filter('img_caption_shortcode', 'ch3_img_caption_filter',10,3);
function ch3_img_caption_filter($val, $attr, $content = null)
{
    extract(shortcode_atts(array(
        'id'    => '',
        'align' => '',
        'width' => '',
        'caption' => ''
    ), $attr));
    if ( 1 > (int) $width || empty($caption) )
        return $val;
    $capid = '';
    if ( $id ) {
        $id = esc_attr($id);
        $capid = 'id="figcaption_'. $id . '" ';
        $id = 'id="' . $id . '" aria-labelledby="figcaption_' . $id . '" ';
    }
    return '<figure ' . $id . 'class="wp-caption ' . esc_attr($align) . '" style="max-width:'.$width.'px">'
    . do_shortcode( $content ) . '<figcaption ' . $capid 
    . 'class="wp-caption-text">' . $caption . '</figcaption></figure>';
}

?>