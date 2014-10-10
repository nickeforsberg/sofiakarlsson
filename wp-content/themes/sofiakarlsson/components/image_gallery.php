<?php 
	
	$title = get_sub_field( 'title' );
	$images = get_sub_field( 'images' );
?>


<section class="page-component <?php echo get_row_layout(); ?>">
	
	<?php if($title): ?>
	<div class="blurbs">
		<div class="blurb">
			<h2><?php echo $title; ?></h2>
		</div>
	</div>
	<?php endif;?>
	
	<?php if($title): ?>
	<div class="row">
		<?php foreach( $images as $image ): ?>
		<div class="image-box col-sm-3">
			<a href="<?php echo $image['url']; ?>" rel="group" class="fancybox-media">
				<img class="img-responsive" src="<?php echo $image['sizes']['image_gallery']; ?>" alt="<?php echo $image['alt']; ?>" />
			</a>
			<p class="caption"><?php echo $image['caption']; ?></p>
		</div>
		<?php endforeach; ?>
	</div>
	<?php endif;?>
	
</section>