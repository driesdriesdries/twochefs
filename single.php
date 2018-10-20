<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package DopeIndustries
 */

get_header(); ?>

<div id="content" role="main">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		        <small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

		        <div class="entry">
		            <?php the_content(); ?>
		        </div>

		        <p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></p>
		    </div>
		    <?php endwhile; endif; ?>		
		</div>
	</div>

    

</div><!-- #content -->

<?php
get_sidebar();
get_footer();