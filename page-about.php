<?php
/*
	Template Name: About Page

*/
//Advanced custom fields
$about_feature_image = get_field('about_feature_image');
$page_heading = get_field('page_heading');
$page_description = get_field('page_description');

get_header(); ?>

<!--Start Building the about page-->
<!--Main Image-->
<section id="main_image">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
      	<!--If user uploaded an image-->
      	<?php
      		if (!empty($about_feature_image) ) : ?>
      			<img  data-aos="fade" src="<?php echo $about_feature_image['url'] ?>" width="100%" alt="<?php echo $about_feature_image['alt'] ?>">
      		<?php endif ?>
      </div>
    </div>
  </div><!--Close Container-->
</section>


<!--Leading Paragraph-->
<section id="lead_text">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h3><?php echo $page_heading; ?></h3>
        <p><?php echo $page_description; ?></p>
      </div>
    </div>
  </div><!--Close Container-->
</section>

<!--testing loops-->

	<div class="container team_posts">
		<div class="row">
			<div class="col-sm-12">
				<h3>TEAM</h3>
			</div>

		<?php
		global $post;
	   	query_posts('category_name=team&posts_per_page=9');
		if (have_posts()) : while (have_posts()) : the_post();?>
					<?php
					 	$post_thumbnail_id = get_post_thumbnail_id();
	    				$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
					?>
					<div class="col-sm-4 col-xs-12 team_post">
						<div class="post-image">
	            			<img data-aos="fade" title="image title" alt="thumb image" class="wp-post-image" src="<?php echo $post_thumbnail_url; ?>" style="width:100%; height:auto;">
	        			</div>
						
						<h4><?php the_title(); ?></h4>
						<p><?php the_content(); ?></p>
					</div>

		<?php endwhile; endif;
	   wp_reset_query();
	   ?>

		</div>
	</div>

	<!--End testing loops-->



	
<?php

get_footer();
