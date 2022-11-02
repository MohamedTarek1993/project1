<?php
/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 *
 * @package HelloElementor
 */

 get_header();
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

while ( have_posts() ) :
	the_post();
	?>

<div id="content" <?php post_class( 'site-main' ); ?> role="main">
	
	<div class="page-content page-single-post">
	
		<div class="single-post-image">
		<?php  the_post_thumbnail();?>
		</div>
		<header class="page-header-single">
			 <?php  the_title() ;?> 
		</header>
		<?php the_content(); ?>
		<div class="post-tags">
			<?php the_tags( '<span class="tag-links">' . __( 'Tagged ', 'hello-elementor' ), null, '</span>' ); ?>
		</div>
		<?php wp_link_pages(); ?>
	</div>

	<?php comments_template(); ?>
</div>

	<?php
endwhile;
get_footer();

