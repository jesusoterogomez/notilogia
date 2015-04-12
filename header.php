<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
  <link href='http://fonts.googleapis.com/css?family=Montserrat:700,400|Open+Sans:300,700,400|Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
  <link href='<?php bloginfo('stylesheet_directory'); ?>/img/favicon-32x32.png' rel='icon' type='image/x-icon'/>
  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/vendor/custom.modernizr.js"></script>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/estilo.css">
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <?php wp_head(); ?>
  
  <style type="text/css">
    <?php $categoryslug = get_the_category();// echo $categoryslug[0]->slug; ?>
    .imagencategoria {
      background: linear-gradient(rgba(23, 27, 35, 0.5), rgba(132, 32, 34, .81)), url(http://notilogia.com/wp-content/themes/QUINCE/img/destacada-<?php echo $categoryslug[0]->slug;?>.jpg) no-repeat center center;
      background-size: cover;

    }
  </style>
</head>
<body <?php body_class(); ?>>
  <header id="cabecera">
    <?php if (is_home()) { ?>
    <div class="principal">
      <div class="row">
        <div class="small-3 columns">
          <a href="<?php echo site_url(); ?>">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/notilogia-verde.png" style="max-width: 240px;padding: 1em 0;">
          </a>
        </div>
        <div class="small-9 columns show-for-medium-up adheader">
         <img src="<?php bloginfo('stylesheet_directory'); ?>/img/ad-header-ejemplo.png">
       </div>
     </div>
   </div>  
   <?php } ?>

   <?php
   if (is_home()) { ?>

   <nav class="headernav  homenav">
    <div class="row">
              <!--<div class="large-2 medium-2 columns logo">
                <a href="http://www.notilogia.com">
                    <img src="http://www.notilogia.com/wp-content/themes/QUINCE/img/notilogia.png" width="150">
                </a>
              </div>-->
              <div class="small-12 columns">
                <nav class="menu-principal-container main"><!--<a href="#" class="nav-toggle" aria-hidden="true">Menu</a>-->
                  <ul id="menuheader" class="nav-collapse sticky-nav" >
                  <li class="sticky-logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/notilogia-verde.png" style="height: 36px; padding-top:9px; vertical-align:middle;"></li>
                    <li id="menu-item-15321" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15321"><a href="http://www.notilogia.com/politica" class="navpolitica">Política</a></li>
                    <li id="menu-item-15319" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15319"><a href="http://www.notilogia.com/notigestion" class="navnotigestion">Notigestión</a></li>
                    <li id="menu-item-15324" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15324"><a href="http://www.notilogia.com/tendencia" class="navtendencias">Tendencia</a></li>
                    <li id="menu-item-16322" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16322"><a href="http://www.notilogia.com/deportes" class="navdeportes">Deportes</a></li>
                    <li id="menu-item-15317" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15317"><a href="http://www.notilogia.com/amazon" class="navamazon">Amazon</a></li>
                    <li id="menu-item-15322" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15322"><a href="http://www.notilogia.com/salud" class="navsalud">Salud</a></li>
                    <li id="menu-item-15323" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15323"><a href="http://www.notilogia.com/sexy" class="navsexy">Sexy</a></li>
                    <li id="menu-item-16323" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16323"><a href="http://www.notilogia.com/gastronomia" class="navgastronomia"> Gastronomía</a></li>
                    <li><a href="#"><span class="icon-facebook-f"></span></a></li>
                    <li><a href="#"><span class="icon-twitter"></span></a></li>
                    <li><a href="#"><span class="icon-instagram"></span></a></li>
                    <li><a href="#"><span class="icon-google-plus"></span></a></li>
                  </ul>
                </nav>      
              </div>
            </div>

          </nav>


          <?php }
          else{ ?>

          <nav class="headernav">
            <div class="row">
              <div class="large-2 medium-2 columns logo">
                <a href="http://www.notilogia.com">
                  <img src="http://www.notilogia.com/wp-content/themes/QUINCE/img/notilogia.png" width="130">
                </a>
              </div>
              <div class="small-10 columns">
                <nav class="menu-principal-container main"><!--<a href="#" class="nav-toggle" aria-hidden="true">Menu</a>-->
                  <ul id="menuheader" class="nav-collapse" >
                    <li id="menu-item-15321" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15321"><a href="http://www.notilogia.com/politica">Política</a></li>
                    <li id="menu-item-15319" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15319"><a href="http://www.notilogia.com/notigestion">Notigestión</a></li>
                    <li id="menu-item-15324" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15324"><a href="http://www.notilogia.com/tendencia">Tendencia</a></li>
                    <li id="menu-item-16322" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16322"><a href="http://www.notilogia.com/deportes">Deportes</a></li>
                    <li id="menu-item-15317" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15317"><a href="http://www.notilogia.com/amazon">Amazon</a></li>
                    <li id="menu-item-15322" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15322"><a href="http://www.notilogia.com/salud">Salud</a></li>
                    <li id="menu-item-15323" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15323"><a href="http://www.notilogia.com/sexy">Sexy</a></li>
                    <li id="menu-item-16323" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16323"><a href="http://www.notilogia.com/gastronomia">Gastronomía</a></li>
                  <!--<li><a href="#"><span class="icon-facebook-f"></span></a></li>
                  <li><a href="#"><span class="icon-twitter"></span></a></li>
                  <li><a href="#"><span class="icon-instagram"></span></a></li>
                  <li><a href="#"><span class="icon-google-plus"></span></a></li>-->
                </ul>
              </nav>      
            </div>
          </div>

        </nav>


        <?php   }


        ?>




      </header>
