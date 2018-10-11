<html>
<head>
	<title>HOTEL</title>
	<?php wp_head(); ?>
</head>
<body>
<header>
		<div class='naxaban'>
			<?php get_search_form(); ?>
		</div>
		<div class='menu'>
			<nav class='glxavor'>
				<?php 
				$arr_menu = array(
					'theme-location' => 'primary'
					);
				wp_nav_menu($arr_menu);
				?>
			</nav>
			<nav class='entamenu'>
                 <ul>
	                 <?php 
	                    $shlor = $post->ID;
	   					//echo '<pre>';
						// print_r($post);
						// echo '</pre>';
	                    if($post->post_parent > 0)
	                    {
	                        $shlor = $post->post_parent;
	                    }
	                    $args = array(
	                        'child_of'=> $shlor,
	                        'title_li'=>''
	                        );
	                    wp_list_pages($args);
	                 ?>
                 </ul>
			</nav>
		</div>
	</header>
<div class="content">