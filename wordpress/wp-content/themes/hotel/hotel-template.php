<?php
/*
Template Name:hotel
*/
get_header();
$arr = array(
	"cat" => 0,
	"orderby" => "title",
	"order" => "ACS"
	);
$age = new WP_Query($arr);
if($age->have_posts())
{
	while($age->have_posts())
	{
		$age->the_post();
		$obj = get_the_category()[0];
		if($obj->name == 'hotel' OR $obj->name == 'отель' OR $obj->name == 'հյուրանոց' OR $obj->name == 'astx1' OR $obj->name == 'звезда1' OR $obj->name == 'աստղ1' OR $obj->name == 'astx2' OR $obj->name == 'звезда2' OR $obj->name == 'աստղ2' OR $obj->name == 'astx3' OR $obj->name == 'звезда3' OR $obj->name == 'աստղ3')
		{
			?>
			<a href=" http://localhost:8080/wordpress/room/ ">
				<article class='p'>
					<div class="img">
						<?php the_post_thumbnail('room'); ?>
					</div>
					<div class='cont'>
						<?php
						echo '<h1>'.get_the_title().'</h1>'."<br>";
						echo get_the_excerpt();
						?>
					</div>
				</article>
			</a>
			<?php
		}
	}
}
get_footer(); 
?>