<?php 
/**
 * The template for displaying all blog posts
 *
 *
 * @since 1.0
 */
get_header(); 
?>

<!--SINGLE.PHP-->
<div class="section-minvh">
<div class="section-80">
<div class="w-container">
<div class="dap_640">
    <h1 class="dap_header"><?php wp_title(''); ?></h1>
    <!--<!?php the_excerpt(); ?>-->
  <!--  <div class="jer_blog_meta">-->
		<!--<!?php get_template_part('template-parts/get_category'); ?>-->
		<!--<?php the_category(' ', 'multiple')?>		-->
  <!--  </div>-->
  
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
</div>
</div>
</div>
<?php get_footer(); ?>