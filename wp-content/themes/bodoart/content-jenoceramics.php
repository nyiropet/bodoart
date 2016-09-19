<?php

	$num_posts = ( is_front_page() ) ? 3 : -1;

	$args = array(
		'post_type' => 'jeno_ceramics',
		'posts_per_page' => $num_posts
	);

	$query = new WP_Query($args);

	?>

<section class="jeno-ceramics-post-type-container post-type-container">
	<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
	
	<div class="jeno-ceramics-post-type-content">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('large'); ?>
		</a>
		<p><?php the_field('description'); ?></p>
	</div>

	<?php endwhile; endif; wp_reset_postdata(); ?>

</section>