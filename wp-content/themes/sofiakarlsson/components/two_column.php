<?php 
	
	$title_left = get_sub_field( 'title_left' );
	$title_right = get_sub_field( 'title_right' );
	
	$content_left = get_sub_field( 'content_left' );
	$content_right = get_sub_field( 'content_right' );
?>

<section class="page-component <?php echo get_row_layout(); ?>">
	<div class="row blurbs">
	
		<?php if ( $title_left || $content_left ) : ?>
			<div class="col-sm-6 blurb">
				<?php if($title_left): ?>
				<h2><?php echo $title_left; ?></h2>
				<?php endif; ?>
				
				<?php echo $content_left; ?>
			</div>
		<?php endif; ?>
		
		<?php if ( $title_right || $content_right ) : ?>
			<div class="col-sm-6 blurb">
				<?php if($title_right): ?>
				<h2><?php echo $title_right; ?></h2>
				<?php endif; ?>
				
				<?php echo $content_right; ?>
			</div>
		<?php endif; ?>
				
	</div>
</section>