<?php
/*
	Template Name: Home Page

*/

$slide1 = get_field('slide1');


get_header(); ?>
<?php 
	$bannerurl = get_field('banner');
?>

<div id="banner" class="container-fluid" style="background:url('<?php echo $bannerurl['sizes']['banner'];?>'); background-position: center; background-size: cover;">
	<div class="row text-center">
		<h1>This is the title</h1>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
	</div>	
</div>


<div id="feed" class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>Recent Events</h1>
		</div>

<?php 

	$blogquery = new WP_Query(array(
		'posts_per_page' => '6'
	));

while($blogquery->have_posts()){
	$blogquery->the_post(); ?>

	<?php 
		$post_image = get_field('post_image');
	?>
	<div class="col-md-4">
		<div class="item" onclick="window.location.href='<?php echo the_permalink(); ?>'" style="background:url('<?php echo $post_image['sizes']['tile'];?>'); background-position: center; background-size: cover;">
		</div>
		<div class="item_footer">
			<h2><?php echo the_title(); ?></h2>
		</div>
	</div>
		
<?php }

?>		

		
	</div>
</div>

<?php

get_footer();
