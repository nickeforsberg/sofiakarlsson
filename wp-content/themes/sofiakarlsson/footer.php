	<footer id="footer">
		<div class="container">
			<div class="row blurbs">
				
				<div class="col-sm-12 blurb social">
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