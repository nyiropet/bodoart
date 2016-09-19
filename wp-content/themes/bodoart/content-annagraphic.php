<?php

	$num_posts = ( is_front_page() ) ? 3 : -1;

	$args = array(
		'post_type' => 'anna_graphic',
		'posts_per_page' => $num_posts
	);

	$query = new WP_Query($args);

	?>

<section class="anna-graphic-post-type-post">
	<h2>Grafika</h2>
	<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
	
	<div class="anna-graphic-post-type-container">
		<a id="<?php echo get_the_ID(); ?>"><?php the_post_thumbnail('medium'); ?></a>
		<div class="anna-graphic-post-type-post-content">
			<p><?php the_field('description'); ?></p>
		</div>	
	</div>

	<?php endwhile; endif; wp_reset_postdata(); ?>

</section>