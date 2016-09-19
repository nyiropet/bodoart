<?php
/*
	Template Name: Single Anna Graphic
*/
?>
<?php get_header(); ?>

	<section class="single-post-container arts-container">
      	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	         
			<div class="single-anna-graphic-post-type-container post-type-container">
		    	<div class="primary">
		    		<h1><?php the_title();?></h1>
		    		<?php the_field('picture'); ?>
		    	</div>
		    	<div class="secondary">
		    		<p><?php the_field('description'); ?></p>
		    		<?php previous_post_link(); ?>
		    		<a href="<?php bloginfo('url'); ?>/anna-bodo"><p>Vissza Bodó Anna portfoliójához</p></a>
		    		<?php next_post_link(); ?>
	      		</div>
	      	</div>
	      	<?php endwhile; endif; ?>
	</section>

<?php get_footer(); ?>