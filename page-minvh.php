<?php 
/**
 * The template for displaying all pages
 * Template Name: Min-VH Template
 *
 * @since 1.0
 */
get_header(); 
?>
<!-- Min-VH -->
<div class="section-minvh">
		<?php 
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); 
				//
				the_content();
				//
			} // end while
		} // end if
		?>
</div>
<?php get_footer();