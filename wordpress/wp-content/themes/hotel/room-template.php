<?php
/*
Template Name:room
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
		if($obj->name == 'room' OR $obj->name == 'սենյակ' OR $obj->name == 'комната')
		{
			?>
			<a href="<?php the_permalink(); ?>">
				<article class='p'>
					<div class="img">
						<?php the_post_thumbnail('room'); ?>
					</div>
					<div class='cont'>
						<?php
						echo '<h1>'.get_the_title().'</h1>'."<br>";
						echo get_the_content();
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
