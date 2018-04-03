<?php 
/**
 * The template for the index page
 *
 * 
 * @since 1.0
 */
get_header(); 
?>

<!-- Index.php -->
<div class="section-minvh">
<div class="section-80">
	<div class="w-container">
    <h1 class="dap_header">All Articles</h1>
    
    <div class="w-row">
        <div class="w-col w-col-7">
          	<ul class="dap_articles_ul">
		     <?php if ( have_posts() ) : ?>
        		<?php while ( have_posts() ) : the_post(); ?>
        			<li class="dap_articles_li">
           				<?php the_title(sprintf('<a class="dap_link" href="%s" rel="bookmark">', esc_url(get_permalink() )), '</a>'); ?>
					</li>
		        <?php endwhile; ?>
		    <?php endif; ?> 
		    
          	</ul>
        </div>
        
        <div class="w-col w-col-5">
	        <?php get_sidebar(); ?>	
        </div>
    </div>


	</div>
</div>
</div>
<?php get_footer(); ?>