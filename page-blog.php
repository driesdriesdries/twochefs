<?php
/*
	Template Name: Blog Page

*/

get_header(); ?>

<!-- Start Building the Blog page-->






<section id="blog-content">
  <div class="container">
    <div class="row">
      
      <?php
    global $post;
      query_posts('category_name=blog&posts_per_page=28');
    if (have_posts()) : while (have_posts()) : the_post();?>
          <?php
            $post_thumbnail_id = get_post_thumbnail_id();
              $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
          ?>

          <div class="col-sm-6 col-xs-12 blog_post">
                
                <a href="<?php the_permalink(); ?>">
                  <div class="post-image">
                      <img data-aos="fade" title="image title" alt="thumb image" class="wp-post-image" src="<?php echo $post_thumbnail_url; ?>">
                  </div>
                </a>
                
             
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <p><?php the_date(); echo "<br>"?></p>
            <p><?php the_excerpt(); ?></p>
            <p><?php the_tags(); ?></p>
            
            
          </div>


    <?php endwhile; endif;
    wp_reset_query();
    ?>

 
    </div><!--close row-->
    
  </div><!--Close container-->
</section>


<!-- END Building the blog page-->
<?php

get_footer();
