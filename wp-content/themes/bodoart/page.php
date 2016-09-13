<?php get_header(); ?>
<div>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<p><?php the_content(); ?></p>
		
	<?php endwhile; else : ?>
		
		<p><?php _e( 'Sorry, no results found.', 'fourcreation' ); ?></p>
		
	<?php endif; ?>
</div>

<?php get_footer(); ?>