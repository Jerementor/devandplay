<?php 

/**
 * The template for displaying all lectures
 * @package WPShipyard
 * @since 1.0
 */

get_header(); 

?>
<!--Using SINGLE-SALE-->
<div class="section-80">
    <div class="w-container">
        <h1 class="dap_screencast_title"><?php wp_title(''); ?></h1>
         <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

          <div class="w-row">
            <div class="w-col w-col-8">
              <div style="padding-top:56.17021276595745%" class="w-video w-embed">
                  <!--<iframe class="embedly-embed" src="https://cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2FEOQ2hMEKrsM%3Ffeature%3Doembed&url=http%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DEOQ2hMEKrsM&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2FEOQ2hMEKrsM%2Fhqdefault.jpg&key=96f1f04c5f4143bcb0f2e68c87d65feb&type=text%2Fhtml&schema=youtube" scrolling="no" frameborder="0" allowfullscreen=""></iframe>-->
                        <?php if (get_field('sales_video')) :?>
                            <div class="embed-container">
                                <?php the_field('sales_video'); ?> 
                            </div>
                        <?php endif; ?>
              </div>
              <h2>Description</h2>
              <p>
                <?php if (get_field('sales_description')) :?>
                            <div class="embed-container">
                                <?php the_field('sales_description'); ?> 
                            </div>
                <?php endif; ?>                         
              </p>
              <h2>Topic Covered</h2>
              <ul class="dap_screencast_ul">
                <?php if (get_field('topics_covered')) :?>
                            <div class="embed-container">
                                <?php the_field('topics_covered'); ?> 
                            </div>
                <?php endif; ?>                         
              </ul>
            </div>
            <div class="w-col w-col-4">
              <h1 class="dap_screencast_price">
                 <?php if (get_field('sales_price')) :?>
                            <div class="embed-container">
                                <?php the_field('sales_price'); ?> 
                            </div>
                <?php endif; ?>                     
                  <!--<span class="dap_crossed_out_price">$80</span> $60-->
              </h1>
              <!--<div class="dap_sale_text">This is some text inside of a div block.</div>-->
               <?php if (get_field('sales_buy')) :?>
                            <div class="embed-container">
                                <?php the_field('sales_buy'); ?> 
                            </div>
                <?php endif; ?>   
          </div>
        
       <?php endwhile; ?>
    <?php endif; ?>  
        
    </div>
</div>

<?php get_footer(); ?>
