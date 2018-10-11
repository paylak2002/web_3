<?php
get_header();
if(have_posts())
{
	while(have_posts())
	{
		the_post()
		?>
		<article>
			<div>
				<?php the_post_thumbnail('room'); ?>
			</div>
			<div>
				<?php the_content(); ?>
			</div>
		</article>
		<?php
	}
}
get_footer(); 
?>