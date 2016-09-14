<?php
/*
	Template Name: Anna Bodo Page
*/
?>

<?php get_header(); ?>

<h1><?php the_title(); ?></h1>
<div>
	<nav>
	<ul>
		<li><a href="#about-me"><?php _e( 'Magamról', 'bodoart_text_domain' ); ?></a></li>
		<li><a href="#glass"><?php _e( 'Üveg', 'bodoart_text_domain' ); ?></a></li>
		<li><a href="#textil"><?php _e( 'Textil', 'bodoart_text_domain' ); ?></a></li>
	</ul>
	</nav>
</div>
<div id="about-me" class="scroll-to">
	<?php get_template_part('content', 'annaaboutme'); ?>
</div>
<div id="glass" class="scroll-to">
	<h1>Uveg</h1>
</div>
<div id="textil" class="scroll-to">
	<h1>Textil</h1>
</div>

<?php get_footer(); ?>