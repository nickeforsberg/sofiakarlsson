<!DOCTYPE HTML>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/ui/images/favicon.ico" type="image/x-icon">
<link href='//fonts.googleapis.com/css?family=Istok+Web:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/ui/styles/bootstrap.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/ui/styles/bootstrap-theme.css">

<?php wp_head(); ?>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="<?php bloginfo('template_directory'); ?>/ui/scripts/html5shiv.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/ui/scripts/respond.min.js"></script>
<![endif]-->


<?php if( is_home() || is_front_page() ): ?>

	<?php
	$slideshow = get_field('slideshow', 'options');
	
	if (count($slideshow) > 1) {
		$rand = array_rand($slideshow, 1);
		$image_url = $slideshow[$rand]['url'];
		
	} else {
		$image_url = $slideshow[0]['url'];
	}
	?>

	<?php if( $slideshow ): ?>
	<style type="text/css">
	body{
		background: url("<?php echo $image_url; ?>") no-repeat center top fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		-ms-background-size: cover;
		background-size: cover;
	}
	</style>
	<?php endif; ?>
	
<? endif; ?>

</head>
<body <?php body_class(); ?>>

<?php if( is_home() || is_front_page() ): ?>

	<?php
	$slideshow = get_field('slideshow', 'options');
	
	if (count($slideshow) > 1) {
		$rand = array_rand($slideshow, 1);
		$image_url = $slideshow[$rand]['url'];
		
	} else {
		$image_url = $slideshow[0]['url'];
	}
	?>

	<?php if( $slideshow ): ?>
	<img id="bg" src="<?php echo $image_url; ?>" />
	
	<?php endif; ?>
	
<? endif; ?>

<section id="site">
	<header id="header">
	
		<nav id="responsive-nav">
			<?php language_selector_names(); ?>
		</nav>
	
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-xs-4 logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				 		<img class="no-ie img-responsive" src="<?php echo get_template_directory_uri();?>/ui/images/SK_logo_white.svg" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
				    </a>
				</div>
				<div class="col-sm-4 col-xs-8">
					<a id="nav-toggle" href="#" class="no-click visible-sm visible-xs"><span></span></a>
					<div class="hidden-sm hidden-xs">
						<?php language_selector_names(); ?>
					</div>
				</div>
			</div>
		</div>
	</header>
	

