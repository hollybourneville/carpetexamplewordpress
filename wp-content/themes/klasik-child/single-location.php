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
            
            <?php  get_template_part('content','single-location'); ?>
            
	
    

        <?php endwhile; ?>
        
        <div class="clear"></div><!-- clear float --> 
                  	
<?php get_footer(); ?>



