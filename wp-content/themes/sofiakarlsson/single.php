<?php get_header(); ?>
<section id="content" role="main">
	<div class="container">
		
		<div class="row">
			  
		    <article class="article col-sm-8 col-sm-offset-2">
		        <?php while ( have_posts() ) : the_post(); ?>
				
					<?php if ( has_post_thumbnail() ) : ?>
					<figure class="feature">
						<?php the_post_thumbnail( 'full', 'class=img-responsive' ); ?>
					</figure>						
					<?php endif; ?>
					
					<h1><?php the_title(); ?></h1>
					
					<p class="post-date"><?php echo get_the_date(); ?></p>
					
					<?php the_content(); ?>
					
		        <?php endwhile; ?>
		    </article>
		    
		    
		</div>
		
	</div>
</section>
<?php get_footer(); ?>