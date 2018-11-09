<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Klasik
 * @since Klasik 1.0
 */

get_header(); ?>
                        
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <?php the_content( __( 'Read More', 'klasik' ) ); ?>
       

        <div class="clear"></div>
        
    </div><!-- #post -->



    <?php endwhile; ?>
    
    <div class="clear"></div><!-- clear float --> 
<div class="flex-box">
	<?php 

	// The Query
	 	$args = array('post_type'=>'location');
		$the_query = new WP_Query( $args );

		// The Loop
		
			while ( $the_query->have_posts() ) {
				$the_query->the_post();

				get_template_part('content','location'); 
				// content service above is the content service.php file name
			}
	
			/* Restore original Post Data */
			wp_reset_postdata();
		
	 ?>
</div>

                  	
<?php get_footer(); ?>



