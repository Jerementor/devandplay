<?php 
/**
 * The template for displaying all pages
 * Template Name: Main Template
 *
 * @since 1.0
 */
get_header(); 
?>
<!-- Main Section -->
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

<?php get_footer();