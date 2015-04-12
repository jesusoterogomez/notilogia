<?php
/**
 * Pagina de opciones de notilogia
 */

$themename = "Quince";
$shortname = "notilogia";
$icono = get_template_directory_uri().'/img/favicon.png';

add_action( 'admin_enqueue_scripts', 'mw_enqueue_color_picker' );
function mw_enqueue_color_picker( $hook_suffix ) {
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'my-script-handle', get_template_directory_uri() . "/js/my-script.js", array( 'wp-color-picker' ), false, true );
}
function theme_settings_init() {
	register_setting( 'theme_settings', 'theme_settings' );
	wp_enqueue_style( "admin_style", get_template_directory_uri() . "/css/admin.css", false, "1.0", "all" );
	wp_enqueue_script('custom-script',get_template_directory_uri() . '/js/tabs.js',array('jquery'));
	wp_enqueue_script('jquery-ui-tabs');
}
add_action( 'admin_init', 'theme_settings_init' );
$categories = get_categories('hide_empty=0&orderby=name');
$wp_cats = array();
foreach ($categories as $category_list ) {
       $wp_cats[$category_list->cat_ID] = $category_list->cat_name;
}
array_unshift($wp_cats, "Selecciona la categoria");

function add_settings_page() {
	add_menu_page( __( 'Opciones de notilogia' ), __( 'Notilogia' ), 'manage_options', 'notilogia', 'pagina_configuracion_notilogia',get_template_directory_uri().'/img/favicon.png','60.1');
}
add_action( 'admin_menu', 'add_settings_page' );
$theme_options = array(
 
	array( 
		"name" => "Opciones de ". $themename,
		"type" => "title"
		),
	 
	array( 
		"name" => "Anuncios",
		"type" => "section"
		),
	
	array( "type" => "open" ),

	array(
		"name" => "Slots de anuncios",
		"type" => "separador"
		),
	 
	/*array( 
		"name" => "Slot para la zona destacada del index",
		"desc" => "Introduce el código que se mostrará en el area de noticias destacadas del index del sitio. (Recomendado 300x300 / 300x250 píxeles). ",
		"id" => $shortname."_addi",
		"type" => "textarea",
		"std" => ""
		),
	array( 
		"name" => "Slot para la zona destacada inferior del index",
		"desc" => "Introduce el código que se mostrará en el area inferior de noticias destacadas del index del sitio. (Recomendado 300x300 / 300x250 píxeles). ",
		"id" => $shortname."_addii",
		"type" => "textarea",
		"std" => ""
		),	*/		

	//array de slots en numeros
	array( 
		"name" => "Slot 1",
		"desc" => "Slot header superior. Introduce el código de publicidad de anuncios de texto de 728x15px, será visible en todo el sitio. " ,
		"id" => $shortname."_slot_uno",
		"type" => "textarea",
		"std" => ""
		),
	array( 
		"name" => "Alineacion",
		"desc" => "",
		"id" => $shortname."_slot_uno_align",
		"type" => "select",
		"options" => array('izquierda','derecha','centro','aleatorio'),
		"std" => "Seleccionar"
		),
	// fin  array
	array( 
		"name" => "Slot 2",
		"desc" => "Slot header inferior. Introduce el código de anuncio de tamaño 720x15.",
		"id" => $shortname."_slot_dos",
		"type" => "textarea",
		"std" => ""
		),
	array( 
		"name" => "Alineacion",
		"desc" => "",
		"id" => $shortname."_slot_dos_align",
		"type" => "select",
		"options" => array('izquierda','derecha','centro','aleatorio'),
		"std" => "Seleccionar"
		),
	// fin  array
	array( 
		"name" => "Slot 3",
		"desc" => "Introduce el código que se mostrará al principio de los artículos.",
		"id" => $shortname."_slot_tres",
		"type" => "textarea",
		"std" => ""
		),
	array( 
		"name" => "Alineacion",
		"desc" => "",
		"id" => $shortname."_slot_tres_align",
		"type" => "select",
		"options" => array('izquierda','derecha','centro','aleatorio'),
		"std" => "Seleccionar"
		),
	// fin  array
	array( 
		"name" => "Slot 4",
		"desc" => "Introduce el código que se mostrará en la mitad de los artículos.",
		"id" => $shortname."_slot_cuatro",
		"type" => "textarea",
		"std" => ""
		),
	array( 
		"name" => "Alineacion",
		"desc" => "",
		"id" => $shortname."_slot_cuatro_align",
		"type" => "select",
		"options" => array('izquierda','derecha','centro','aleatorio'),
		"std" => "Seleccionar"
		),
	// fin  array
	array( 
		"name" => "Slot 5",
		"desc" => "Introduce el código que se mostrará al final de los artículos.",
		"id" => $shortname."_slot_cinco",
		"type" => "textarea",
		"std" => ""
		),
	array( 
		"name" => "Alineacion",
		"desc" => "",
		"id" => $shortname."_slot_cinco_align",
		"type" => "select",
		"options" => array('izquierda','derecha','centro','aleatorio'),
		"std" => "Seleccionar"
		),
	// fin  array
	array( 
		"name" => "Slot 6",
		"desc" => "Introduce el código que se mostrará al principio del sidebar.",
		"id" => $shortname."_slot_seis",
		"type" => "textarea",
		"std" => ""
		),
	array( 
		"name" => "Alineacion",
		"desc" => "",
		"id" => $shortname."_slot_seis_align",
		"type" => "select",
		"options" => array('izquierda','derecha','centro','aleatorio'),
		"std" => "Seleccionar"
		),
	// fin  array
	array( 
		"name" => "Slot 7",
		"desc" => "Introduce el código que se mostrará al final del sidebar.",
		"id" => $shortname."_slot_siete",
		"type" => "textarea",
		"std" => ""
		),
	array( 
		"name" => "Alineacion",
		"desc" => "",
		"id" => $shortname."_slot_siete_align",
		"type" => "select",
		"options" => array('izquierda','derecha','centro','aleatorio'),
		"std" => "Seleccionar"
		),
	// fin  array
	array( 
		"name" => "Slot 8",
		"desc" => "Slot sin uso por ahora",
		"id" => $shortname."_slot_ocho",
		"type" => "textarea",
		"std" => ""
		),
	array( 
		"name" => "Alineacion",
		"desc" => "",
		"id" => $shortname."_slot_ocho_align",
		"type" => "select",
		"options" => array('izquierda','derecha','centro','aleatorio'),
		"std" => "Seleccionar"
		),
	// fin  array
	array( 
		"name" => "Slot 9",
		"desc" => "Slot sin uso por ahora.",
		"id" => $shortname."_slot_nueve",
		"type" => "textarea",
		"std" => ""
		),
	array( 
		"name" => "Alineacion",
		"desc" => "",
		"id" => $shortname."_slot_nueve_align",
		"type" => "select",
		"options" => array('izquierda','derecha','centro','aleatorio'),
		"std" => "Seleccionar"
		),
	// fin  array
	array( 
		"name" => "Slot 10",
		"desc" => "Slot sin uso por ahora.",
		"id" => $shortname."_slot_diez",
		"type" => "textarea",
		"std" => ""
		),
	array( 
		"name" => "Alineacion",
		"desc" => "",
		"id" => $shortname."_slot_diez_align",
		"type" => "select",
		"options" => array('izquierda','derecha','centro','aleatorio'),
		"std" => "Seleccionar"
		),
	// fin  array
	 
	array( "type" => "close"),
	array( 
		"name" => "Otros",
		"type" => "section"
		),
	
	array( "type" => "open" ),

	/*array( 
		"name" => "Categoría post destacados",
		"desc" => "Elige la categoría que deseas que aparezca en los ",
		"id" => $shortname."_catdes",
		"type" => "select",
		"options" => $wp_cats,
		"std" => "Seleccionar"
		),*/

	array( 
		"name" => "Slider ancho completo.",
		"desc" => "Activar plantilla <i>desastres</i>.",
		"id" => $shortname."_desastre",
		"type" => "checkbox",
		"std" => ""
		),
	array( 
		"name" => "Alineacion de anuncio cuadrado del single",
		"desc" => "",
		"id" => $shortname."alineacion",
		"type" => "select",
		"options" => array('izquierda','derecha','centro'),
		"std" => "Seleccionar"
		),	
	array( 
		"name" => "ID de Google Analytics",
		"desc" => "Introduce la ID de tu cuenta de Google Analitycs, solo el código, ejemplo: UA-11111111-1. ",
		"id" => $shortname."_gaid",
		"type" => "text",
		"std" => ""
		),
	array( "type" => "close"),
	array( 
		"name" => "Documentacion",
		"type" => "section"
		),
	array( "type" => "docs" ),
	array( "type" => "open" ),
	array( "type" => "close"),
 
);

/**
 * Description : theme panel
 */
function pagina_configuracion_notilogia() {
	global $themename, $theme_options;
    $i=0;
    $message=''; 
    //linea de abajo añadida por mi
    //if ( isset( $_GET['submit'] ) ){
    if ( 'save' == $_REQUEST['action'] ) {
      
        foreach ($theme_options as $value) {
            update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
        }
      
        foreach ($theme_options as $value) {
            if ( isset( $_REQUEST[ $value['id'] ] ) ) { 
            	update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); 
            } else { 
            	delete_option( $value['id'] ); 
            } 
        }

        $message='saved';

    } 
    else if ( 'reset' == $_REQUEST['action'] ) { 

        foreach ($theme_options as $value) {
            delete_option( $value['id'] ); 
        }

        $message='reset'; 

    } //}  //ultimo corchete añadido por mi
    ?>

    <!---->
<script type="text/javascript">
    $(function(){
        $('#tabs').tabs();
    });
</script>

<!---->
<h1>Configuración <?php echo $themename; ?></h1>


    <div class="wrap">
        <?php
	        if ( $message=='saved' ) echo '<div class="updated settings-error" id="setting-error-settings_updated"> 
	        <p>Ajustes guardados en '.$themename.'.</strong></p></div>';
	        if ( $message=='reset' ) echo '<div class="updated settings-error" id="setting-error-settings_updated"> 
	        <p>Ajustes reseteados en '.$themename.'</strong></p></div>';
        ?>
		<div class="content_options">
			<form method="post">
				<div id="tabs">
					<ul>	
						<?php foreach ($theme_options as $value) {
							if ($value['type'] == 'section') {
							echo '<li><a href="#tabs-'.$value['name'].'">'.$value['name'].'</a></li>';
							}
					            
					        } ?>
					    
					</ul>
					
					
				

			<?php foreach ($theme_options as $value) {

				switch ( $value['type'] ) {

					case "open": ?>
					<!--<h2><?php //echo $value['name']; ?>-->
				</h2>
					<?php break;
					case "separador": ?>
						<h3 class="separador"><?php echo $value['name']; ?></h3>
					<?php 	break;

					case "close":
					$i++; ?>
							</div><!-- all_options -->
							
								<div class="guardarcambios"><input name="save<?php echo $i; ?>" type="submit" class="buttonsubmit" value="Guardar cambios" /></div>
								<div class="clearfix"></div>
							
						</div><!-- input_section -->
					
					<?php break;

					case "docs": ?>
							<h2 class="separadores">Información:</h2>
							<p>QUINCE</p>
						<br />
						<h2>Info:</h2>
						<ul>
							<li>Primera versión liberada 15/10/2014</li>
							<li><b>Versión 0.0.1 - 26/10/2014</b></li>
							<li>Tamaño de imágenes</li>
						</ul>
					<?php break;


					case "title": ?>
						
					<?php break;
					case "code": 
					echo $value['desc'];
					break;

					case 'text': ?>
						<div class="option_input option_text">
							<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
							<input id="" type="<?php echo $value['type']; ?>" name="<?php echo $value['id']; ?>" value="<?php if ( get_option( $value['id'] ) != "" ) { echo stripslashes(get_option( $value['id'])  ); } else { echo $value['std']; } ?>" />
							<small><?php echo $value['desc']; ?></small>
							<div class="clearfix"></div>
						</div>
					<?php break;
					case 'color': ?>
						<div class="option_input option_text">
							<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
							<input id="" type="text" name="<?php echo $value['id']; ?>" value="<?php if ( get_option( $value['id'] ) != "" ) { echo stripslashes(get_option( $value['id'])  ); } else { echo $value['std']; } ?>" class="my-color-field" data-default-color="<?php echo $value['std']; ?>" />
							<small><?php echo $value['desc']; ?></small>
							<div class="clearfix"></div>
						</div>
					<?php break;

					case 'textarea': ?>
						<div class="option_input option_textarea">
							<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
							<textarea name="<?php echo $value['id']; ?>" rows="" cols=""><?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id']) ); } else { echo $value['std']; } ?></textarea>
							<small><?php echo $value['desc']; ?></small>
							<div class="clearfix"></div>
						</div>
					<?php break;

					case 'select': ?>
						<div class="option_input option_select">
							<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
							<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
							<?php foreach ($value['options'] as $option) { ?>
							    <option <?php if (get_option( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option>
							<?php } ?>
							</select>
							<small><?php echo $value['desc']; ?></small>
							<div class="clearfix"></div>
						</div>
					<?php break;

					case "checkbox": ?>
						<div class="option_input option_checkbox">
							<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
							<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
							<input id="<?php echo $value['id']; ?>" type="checkbox" name="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> /> 
							<small><?php echo $value['desc']; ?></small>
							<div class="clearfix"></div>
						</div>
					<?php break;
					case 'select_categorias': ?>
						<div class="option_input option_select">
							<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
							<?php wp_dropdown_categories(array('hide_empty' => 0, 'name' => 'category_parent', 'orderby' => 'name', 'selected' => $category->parent, 'hierarchical' => true, 'show_option_none' => __('None'))); ?>
							<small><?php echo $value['desc']; ?></small>
							<div class="clearfix"></div>
						</div>

					<?php break;

					case "section": 
					 ?>
						<div id="<?php  echo 'tabs-'.$value['name'];?>" class="input_section">
							
							<div class="all_options">
					<?php break;

				}
			}
			?>

			<input type="hidden" name="action" value="save" />
			</form>
			<form method="post">
			<span class="submit">
			<input name="reset" type="submit" class="button" value="Reset" />
			<input type="hidden" name="action" value="reset" />
			</span>
			</form>
		</div> <!-- tabs -->
        </div>
		<div class="footer-credit">
			<p class="enlace"><a href="http://notilogia.club">notilogia</a></p>
		</div>

    </div>

    <?php
}


?>