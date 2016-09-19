<?php
/*
	Template Name: Anna Bodo Page
*/
?>

<?php get_header(); ?>

<nav class="anna-scroll-nav">
	<ul>
		<li><a href="#about-me"><?php _e( 'Magamról', 'bodoart_text_domain' ); ?></a></li>
		<li><a href="#glass"><?php _e( 'Üveg', 'bodoart_text_domain' ); ?></a></li>
		<li><a href="#textil"><?php _e( 'Textil', 'bodoart_text_domain' ); ?></a></li>
		<li><a href="#graphic"><?php _e( 'Grafika', 'bodoart_text_domain' ); ?></a></li>
	</ul>
</nav>
<!-- <h1 class="page-heading"><?php //the_title(); ?></h1> -->
<div id="about-me" class="arts-container">
	<h2 class="art-heading"><?php _e( 'Magamról', 'bodoart_text_domain' ); ?></h2>
	<?php get_template_part('content', 'annaaboutme'); ?>
</div>
<div id="glass" class="arts-container">
	<h2 class="art-heading"><?php _e( 'Üveg', 'bodoart_text_domain' ); ?></h2>
	<?php get_template_part('content', 'annaglass'); ?>
</div>
<div id="textil" class="arts-container">
	<h2 class="art-heading"><?php _e( 'Textil', 'bodoart_text_domain' ); ?></h2>
	<?php get_template_part('content', 'annatextil'); ?>
</div>
<div id="graphic" class="arts-container">
	<h2 class="art-heading"><?php _e( 'Grafika', 'bodoart_text_domain' ); ?></h2>
	<?php get_template_part('content', 'annagraphic'); ?>
</div>
<?php get_footer(); ?>