	<footer>
		<?php  
			global $post;
			if($post->ID != 14 && $post->ID != 16)
			{
				dynamic_sidebar('footer1');
			}
		?>
	</footer>
	<?php wp_footer(); ?>
</div>
</body>
</html>