<?php get_header(); ?>
<section id="content" role="main">

	<?php if ( have_posts() ) : ?>
	<div class="container main">
		<?php
		if ( has_post_thumbnail() ){
			$feature_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
			$feature_image_url = $feature_image[0];
			$feature_image_alt_text = get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true );
			$alt = '';
			if( $feature_image_alt_text ){
				$alt = ' alt="'.$feature_image_alt_text.'"';
			}
		}
		?>
		<?php if ( $feature_image ) : ?>
			<figure class="feature-image">
				<img src="<?php echo $feature_image_url; ?>"<?php echo $alt;?> />
			</figure>
		<?php endif; ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article class="article page">
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>

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