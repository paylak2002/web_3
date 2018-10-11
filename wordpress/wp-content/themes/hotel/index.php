<?php
get_header();
if(have_posts())
{
	while(have_posts())
	{
		the_post();
		?>
		<a href="<?php the_permalink(); ?>">
			<article class='p'>
				<div class="img">
					<?php the_post_thumbnail('room'); ?>
				</div>
				<div class='cont'>
					<?php echo '<h1>'.get_the_title().'</h1>'; ?>
					<?php the_content(); ?>
				</div>
			</article>
		</a>
		<?php
	}
}
get_footer(); 
?>