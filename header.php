<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DopeIndustries
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="icon" type="image/png" href="http://www.twochefs.co.za/favicontc.png" />

<!-- Google Analytic -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-53521950-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-53521950-1');
</script>


<!--Google Fonts-->
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<!--External Plugin-->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/aos.css" />
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/aos.js"></script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/hover.css">

<!--Font Awesome-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!--Custom Styles and scripts -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/script.js"></script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/custom.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/media_queries.css">

<?php wp_head(); ?>
<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dopeindustries' ); ?></a>
	
	<nav class="navbar navbar-default navbar-fixed-top">
  		<div class="container">
	          <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>                        
	            </button>
	            <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="http://www.twochefs.co.za/logo.png" height="30px"></a>

	          </div>

	          <!--Wordpress menu integration-->
	          
	         <?php
	         	wp_nav_menu(array(
	         			'theme_location' 	=> 		'primary',
	         			'container'			=> 		'div',
	         			'container_class' 	=> 		'collapse navbar-collapse navbar-right',
	         			'container_id' 		=> 		'myNavbar',
	         			'menu_class'		=>		'nav navbar-nav'
	         		));
	         ?>
	        
  		</div>

	</nav>





