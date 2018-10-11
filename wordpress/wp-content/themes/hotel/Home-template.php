<?php
/*
Template Name:home
*/
get_header();
if(have_posts())
{
	while(have_posts())
	{
		the_post()
		?>
		<article>
			<?php 
			do_action('slideshow_deploy', '32');
			the_content();
			?>
		</article>
		<?php
	}
}
get_footer(); 
?>