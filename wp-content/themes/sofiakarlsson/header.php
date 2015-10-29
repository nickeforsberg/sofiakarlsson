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

<?php wp_head(); ?>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="<?php bloginfo('template_directory'); ?>/ui/scripts/html5shiv.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/ui/scripts/respond.min.js"></script>
<![endif]-->


<?php if( is_home() || is_front_page() || is_page_template('template-startpage.php') ): ?>

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

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/sv_SE/sdk.js#xfbml=1&appId=1516541798588138&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php
$header_scripts = get_field('header_scripts', 'options');

if($header_scripts):
	echo $header_scripts;
endif;

?>

<?php if( is_home() || is_front_page() || is_page_template('template-startpage.php') ): ?>

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

<nav class="off-canvas-navigation" role="navigation">
	<div class="container-fluid scroll">
		<h3><?php _e('Menu', THEME_TEXTDOMAIN); ?></h3>
		<ul>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'depth' => 1,
						'container' => false,
						'items_wrap' => '%3$s'
					)
				);
			?>
		</ul>
		<?php language_selector_names(); ?>
		<div class="social">
			<?php
			$facebook = get_field('facebook', 'options');
			$instagram = get_field('instagram', 'options');
			$youtube = get_field('youtube', 'options');
			$twitter = get_field('twitter', 'options');
			?>
			<?php if($facebook): ?>
				<a href="<?php echo $facebook; ?>" target="_blank">
					<i class="fa fa-facebook-square"></i>
				</a>
			<?php endif; ?>

			<?php if($instagram): ?>
				<a href="<?php echo $instagram; ?>" target="_blank">
					<i class="fa fa-instagram"></i>
				</a>
			<?php endif; ?>

			<?php if($youtube): ?>
				<a href="<?php echo $youtube; ?>" target="_blank">
					<i class="fa fa-youtube"></i>
				</a>
			<?php endif; ?>

			<?php if($twitter): ?>
				<a href="<?php echo $twitter; ?>" target="_blank">
					<i class="fa fa-twitter-square"></i>
				</a>
			<?php endif; ?>
		</div>

	</div>
</nav>

<section id="site">
	<header id="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-2 col-xs-4 logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				 		<img class="no-ie img-responsive" src="<?php echo get_template_directory_uri();?>/ui/images/SK_logo_white.svg" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
				    </a>
				</div>
				<div class="col-sm-10 col-xs-8 menu">
					<a href="#" class="menu-toggle">
						<i class="burger"><span></span></i>
					</a>
				</div>
			</div>
		</div>
	</header>


