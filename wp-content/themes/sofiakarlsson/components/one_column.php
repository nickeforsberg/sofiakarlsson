<?php 
	
	$title = get_sub_field( 'title' );
	$content = get_sub_field( 'content' );
?>

<?php if ( $title || $content ) : ?>
	<section class="page-component <?php echo get_row_layout(); ?>">
		<div class="blurbs">
			<div class="blurb">
				<?php if($title): ?>
				<h2><?php echo $title; ?></h2>
				<?php endif;?>
				
				<?php echo $content; ?>
			</div>
		</div>
	</section>
<?php endif; ?>