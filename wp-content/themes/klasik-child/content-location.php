<div class="service">
	<img src="<?php the_field('icon'); ?>" alt="">
	<a href="<?php the_permalink(); ?>"><?php the_field('location'); ?></a>
	<!-- can write above shorthand remove echo get_ and it will wokr the same see below -->
	<p>Phone: <?php the_field('phone'); ?></p>
	<p>Email: <?php the_field('email'); ?></p>

	
</div>