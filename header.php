<?php
/**
* The header for out theme
*
* @package rngstrm
* @subpackage JE Theme
* @since 1.0.0
*/
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php bloginfo( 'name' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="row collapse">
      <div class="column small-12">
        <div id="head">
          <img class="icon" src="<?php echo get_template_directory_uri(); ?>/media/icon_small.png">
          <span class="slogan">Joakim Ekström Motion Designer</span>
        </div>
      	<?php
        wp_nav_menu( array(
        		'theme_location' => 'main_menu',
        		'depth' => 2,
        		'container' => false,
        		'menu_class' => 'menu vertical medium-horizontal',
        		fallback_cb => 'wp_page_menu'
        	)
        );
        ?>
      </div>
    </div>
  </header>