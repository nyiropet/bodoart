<?php

	$num_posts = ( is_front_page() ) ? 2 : -1;

	$args = array(
		'post_type' => 'anna_graphic',
		'posts_per_page' => $num_posts
	);

	$query = new WP_Query($args);

	?>

<section class="anna-graphic-post-type-container post-type-container">
	<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
	
	<div class="anna-graphic-post-type-content post-type-content">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('large'); ?>
		</a>
		<p><?php the_field('description'); ?></p>
	</div>

	<?php endwhile; endif; wp_reset_postdata(); ?>

</section>