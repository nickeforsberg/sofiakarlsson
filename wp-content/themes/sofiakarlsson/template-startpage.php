<?php
/*
Template Name: Startpage
*/

get_header();

?>

<section id="cover-area">
	<div class="table">
		<div class="table-cell">
			<img class="no-ie" src="<?php echo get_template_directory_uri();?>/ui/images/SK_logo_new.svg" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
			 <a href="#content" class="scroll-to fa fa-chevron-down"></a>
		</div>
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