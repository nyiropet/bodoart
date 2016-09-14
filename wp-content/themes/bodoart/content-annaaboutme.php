<?php

	$num_posts = ( is_front_page() ) ? 3 : -1;

	$args = array(
		'post_type' => 'anna_magamrol',
		'posts_per_page' => $num_posts
	);

	$query = new WP_Query($args);

	?>

<section class="anna-aboutme-post-type-post">
	
	<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
	
	<div class="anna-aboutme-post-type-container">
		<h2><?php the_title(); ?></a></h2>
		<?php the_post_thumbnail('medium'); ?>
		<div class="anna-aboutme-post-type-post-content">
			<p><?php the_field('anna_magamrol'); ?></p>
		</div>	
	</div>

	<?php endwhile; endif; wp_reset_postdata(); ?>

</section>