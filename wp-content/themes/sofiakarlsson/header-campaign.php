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
<link href="<?php bloginfo('template_directory'); ?>/ui/images/favicon.ico" rel="icon" type="image/x-icon" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/ui/styles/bootstrap.css">
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('template_directory'); ?>/ui/styles/bootstrap-theme.css">

<?php wp_head(); ?>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="<?php bloginfo('template_directory'); ?>/ui/scripts/html5shiv.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/ui/scripts/respond.min.js"></script>
<![endif]-->

</head>
<body <?php body_class(); ?>>
