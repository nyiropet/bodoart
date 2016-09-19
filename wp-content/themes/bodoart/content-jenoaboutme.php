<?php

	$num_posts = ( is_front_page() ) ? 3 : -1;

	$args = array(
		'post_type' => 'jeno_magamrol',
		'posts_per_page' => $num_posts
	);

	$query = new WP_Query($args);

	?>

<section class="jeno-aboutme-post-type-container aboutme-container">
	<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
	
	<div class="jeno-aboutme-post-type-content">	
		<p><?php the_field('magamrol'); ?></p>
	</div>

	<?php endwhile; endif; wp_reset_postdata(); ?>

</section>