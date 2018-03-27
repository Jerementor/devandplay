<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 */

get_header(); ?>

<div class="section-80">
<div class="w-container">
	<header class="page-header">
		<?php if ( have_posts() ) : ?>
			<h1 class="dap_header"><?php printf( __( 'Search Results for: %s', 'Dev and Play' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		<?php else : ?>
			<h1 class="dap_header"><?php _e( 'Nothing Found', 'Dev and Play' ); ?></h1>
		<?php endif; ?>
	</header>
	
    <div class="w-row">
        <div class="w-col w-col-7">
		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/post/content', 'excerpt' );

			endwhile; // End of the loop.

			the_posts_pagination( array(
				'prev_text' => twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'twentyseventeen' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'twentyseventeen' ) . '</span>' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyseventeen' ) . ' </span>',
			) );

		else : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen' ); ?></p>
			<?php
				get_search_form();

		endif;
		?>
		 </div>
		<div class="w-col w-col-5">
	        <?php get_sidebar(); ?>
		</div><!-- #primary -->
	</div><!-- #row -->

</div><!-- .container -->
</div><!-- .section-80 -->
<?php get_footer();
