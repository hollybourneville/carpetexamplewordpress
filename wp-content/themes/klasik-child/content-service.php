<div class="service">
	<img src="<?php the_field('icon'); ?>" alt="">
	<h1><?php echo get_the_title(); ?></h1>
	<!-- can write above shorthand remove echo get_ and it will wokr the same see below -->
	<p><?php the_field('summary'); ?></p>
	<a href="<?php the_permalink(); ?>">See More</a>
</div>