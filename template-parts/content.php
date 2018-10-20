<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DopeIndustries
 */

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php
			if ( is_single() ) :
				the_title( '<h3 class="entry-title">', '</h3>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php dopeindustries_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			
			<div class="row">
				<div class="col-sm-8 single-blog-image">
					<?php
					the_post_thumbnail();
					?>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-8">
					<?
				echo "<p>"." "."</p>";
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'dopeindustries' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );


				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dopeindustries' ),
					'after'  => '</div>',
				) );
			?>
				</div>
			</div>

			
		</div><!-- .entry-content -->
	</article><!-- #post-## -->


