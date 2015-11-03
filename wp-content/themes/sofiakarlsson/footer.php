	<?php if( is_home() || is_front_page() || is_page_template('template-startpage.php') ) : ?>
		<?php
		$jumbotron_image = get_field('jumbotron_image', 'options');
		?>
		<?php if( $jumbotron_image ) : ?>
		<div class="jumbotron">
			<figure class="background-image" style="background-image:url(<?php echo $jumbotron_image['url']; ?>);"></figure>
		</div>
		<?php endif; ?>
	<?php endif; ?>
	<footer id="footer">
		<div class="container">
			<div class="row blurbs">
				<div class="col-sm-12 blurb">
					<p><?php _e('Copyright &copy;', THEME_TEXTDOMAIN);?> <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. <?php _e('All Rights Reserved.', THEME_TEXTDOMAIN); ?></p>
				</div>
			</div>
		</div>
	</footer>
</section>
<?php wp_footer(); ?>
</body>
</html>