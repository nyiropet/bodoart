<?php
/*
	Template Name: Anna Bodo Page
*/
?>

<?php get_header(); ?>

<h1 class="page-heading"><?php the_title(); ?></h1>
<div>
	<nav>
	<ul>
		<li><a href="#about-me"><?php _e( 'Magamról', 'bodoart_text_domain' ); ?></a></li>
		<li><a href="#glass"><?php _e( 'Üveg', 'bodoart_text_domain' ); ?></a></li>
		<li><a href="#textil"><?php _e( 'Textil', 'bodoart_text_domain' ); ?></a></li>
		<li><a href="#graphic"><?php _e( 'Grafika', 'bodoart_text_domain' ); ?></a></li>
	</ul>
	</nav>
</div>
<div id="about-me" class="scroll-to">
	<?php get_template_part('content', 'annaaboutme'); ?>
</div>
<div id="glass" class="scroll-to">
	<?php get_template_part('content', 'annaglass'); ?>
</div>
<div id="textil" class="scroll-to">
	<?php get_template_part('content', 'annatextil'); ?>
</div>
<div id="graphic" class="scroll-to">
	<?php get_template_part('content', 'annagraphic'); ?>
</div>
<div class="single-post-by-id">
	<?php get_template_part('post', 'byid'); ?>
</div>
<?php get_footer(); ?>