<?php
/*
Template Name: Startpage
*/
 
get_header();

?>

<section id="cover-area">
	<div class="placeholder">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
	 		<img class="no-ie img-responsive" src="<?php echo get_template_directory_uri();?>/ui/images/SK_logo_white.svg" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
	    </a>
	    <a href="#content" class="scroll-to fa fa-chevron-circle-down"></a>
	</div>
</section>

<section id="content" role="main">
	<div class="container main">
		<?php
	        if( have_rows('components') && !post_password_required() ) :
	            while( have_rows( "components" ) ) : the_row(); 
		            echo get_template_part( 'components/' . get_row_layout() );
				endwhile;
	        endif;
		?>
	</div>
</section>
<?php get_footer(); ?>