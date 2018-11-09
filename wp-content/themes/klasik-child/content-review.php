<div class="review">

	<div class="review-content"><?php the_content(); ?></div>
	<p><?php the_field('review_'); ?></p>
	<div class="flex-box">

		<div class="stars flex-item" data-rating="<?php the_field('rating'); ?>"></div>
		<p class="flex-item"><?php the_field('date'); ?></p>
	
		
	</div>	
	

</div>