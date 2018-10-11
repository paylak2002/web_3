<?php
get_header();
if(have_posts())
{
	while(have_posts())
	{
		the_post()
		?>
			<article class='single'>
				<div class='div1'>
					<?php the_post_thumbnail('room'); ?>
				</div>
				<div class='div2'>
					<?php the_title(); ?>
					<?php the_content(); ?>
				</div>
			</article>
		<?php
	}
}
get_footer(); 
?> 