<?php get_header(); ?>

<section id="content">
	<div class="container main">
		<div class="row blurbs">
			<div class="col-sm-12 blurb">
				<center>
					<h1><?php _e( '404 - Sidan kunde inte hittas.', THEME_TEXTDOMAIN ); ?></h1>
					<h3><?php _e( 'Det verkar som vi inte kan hitta det du letar efter.', THEME_TEXTDOMAIN ); ?></h3>
					<p>
						<a href="<?php bloginfo('url'); ?>">
							<span class="typcn typcn-chevron-right"><!-- --></span>
							<?php _e( 'Tllbaka till Startsidan', THEME_TEXTDOMAIN ); ?>
						</a>
					</p>
				</center>
			</div>
		</div>
	</div>
</section>
<?php 
get_footer();