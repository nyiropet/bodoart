<?php
/*
	Template Name: Jeno Bodo Page
*/
?>

<?php get_header(); ?>

<div>
	<nav>
	<ul>
		<li><a href="#about-me"><?php _e( 'Magamról', 'bodoart_text_domain' ); ?></a></li>
		<li><a href="#glass"><?php _e( 'Üveg', 'bodoart_text_domain' ); ?></a></li>
		<li><a href="#ceramic"><?php _e( 'Keramia', 'bodoart_text_domain' ); ?></a></li>
	</ul>
	</nav>
</div>
<div>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h1><?php the_title(); ?></h1>
		<p><?php the_content(); ?></p>

	<?php endwhile; else: ?>

		<p><?php _e( 'Sajnáljuk, nem található a keresett oldal', 'bodoart_text_domain' ); ?></p>

	<?php endif; ?>
</div>
<div id="about-me" class="scroll-to">
	<h1>Magamrol</h1>
</div>
<div id="glass" class="scroll-to">
	<h1>Uveg</h1>
</div>
<div id="ceramic" class="scroll-to">
	<h1>Keramia</h1>
</div>

<?php get_footer(); ?>