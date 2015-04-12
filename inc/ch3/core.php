<?php 


/** http://wordpress.stackexchange.com/questions/107358/make-wordpress-image-captions-responsive
 * Filter to replace the [caption] shortcode text with HTML5 compliant code
 *
 * @return text HTML content describing embedded figure
 **/


// REGISTROS


add_action( 'wp_enqueue_scripts', 'ch3_load_javascript' );

function ch3_load_javascript(){

wp_register_script( 'responsive-nav',get_template_directory_uri().'/js/responsive-nav.min.js' , false, '1.0.32', false );
wp_register_script( 'unslider',get_template_directory_uri().'/js/unslider.js' , false, '1.0.', false );
wp_register_script( 'nav',get_template_directory_uri().'/js/nav.js' , false, '1.0.', false );

// ENQUEUE
wp_enqueue_script('responsive-nav');
wp_enqueue_script('unslider');
wp_enqueue_script('nav');

}


add_theme_support( 'post-thumbnails' );
add_image_size('blogdestacada',560,360,true);
add_image_size('miniatura',360,180,true);
add_image_size('cuadro',180,150,true);



add_filter('user_contactmethods', 'ch3_contacts');
              
function ch3_contacts($user_contactmethods){
 
  $user_contactmethods['twitter'] = 'Twitter Username';
 
  return $user_contactmethods;
}


//FILTROS MAIN LOOP
function ch3_texto_resumen($length) {

    return 30;

}
add_filter('excerpt_length', 'ch3_texto_resumen');
// FILTROS IMAGENES RESPONSIVE

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

    return '<figure ' . $id . 'class="wp-caption ' . esc_attr($align) . '" style="width:'.$width.'px">'
    . do_shortcode( $content ) . '<figcaption ' . $capid 
    . 'class="wp-caption-text">' . $caption . '</figcaption></figure>';
}


// FUNCIONES SOCIALES

function ch3_get_shares($url) {    
  $json_string = file_get_contents("http://www.linkedin.com/countserv/count/share?url=$url&format=json");
  $json = json_decode($json_string, true);
  return intval( $json['count'] );
}
function ch3_get_tweets($url) {

    $json_string = file_get_contents('http://urls.api.twitter.com/1/urls/count.json?url=' . $url);
    $json = json_decode($json_string, true);

    return intval( $json['count'] );
}

function ch3_get_likes($url) {

    $json_string = file_get_contents('http://graph.facebook.com/?ids=' . $url);
    $json = json_decode($json_string, true);

    return intval( $json[$url]['shares'] );
}

function ch3_get_plusones($url) {

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://clients6.google.com/rpc");
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, '[{"method":"pos.plusones.get","id":"p","params":{"nolog":true,"id":"' . $url . '","source":"widget","userId":"@viewer","groupId":"@self"},"jsonrpc":"2.0","key":"p","apiVersion":"v1"}]');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    $curl_results = curl_exec ($curl);
    curl_close ($curl);

    $json = json_decode($curl_results, true);

    return intval( $json[0]['result']['metadata']['globalCounts']['count'] );
}
function ch3_total_shares($url){
    return ch3_get_tweets($url) + ch3_get_shares($url) + ch3_get_likes($url) + ch3_get_plusones($url); 
}

//remove_action('wp_head', 'rel_canonical');


register_nav_menus( array(
    'header_menu' => 'Menu del header',
    'footer_menu' => 'Menu del footer',
) );


function ch3_fb_comments_count(){ ?>
    <span class="fb-comments-count" data-href="<?php  wp_get_shortlink();?>"></span>
<?php
}
 ?>