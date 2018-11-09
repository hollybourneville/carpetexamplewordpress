<div class="single-location">

 
    
    <?php the_title(); ?>       
    <?php the_content(); ?>
    <div id="map" data-title="<?php the_title(); ?>" data-lat="<?php the_field('lat');?>" data-lng="<?php the_field('lng');?>"></div>

   

    <div class="clear"></div>
    
</div><!-- #post -->