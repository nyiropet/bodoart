<?php
/*
	Template Name: Jeno Bodo Page
*/
?>

<?php get_header(); ?>
<nav class="jeno-scroll-nav">
	<ul>
		<li><a href="#about-me"><?php _e( 'Magamról', 'bodoart_text_domain' ); ?></a></li>
		<li><a href="#glass"><?php _e( 'Üveg', 'bodoart_text_domain' ); ?></a></li>
		<li><a href="#ceramics"><?php _e( 'Kerámia', 'bodoart_text_domain' ); ?></a></li>
	</ul>
</nav>
<div id="about-me" class="arts-container">
	<span class="jeno-profile-image"></span>
	<h1 class="page-heading"><?php the_title(); ?></h1>
	<ul class="contact-info">	
		<li class="phone"><a clas href="tel:06303841500">06303841500</a></li>
		<li class="email"><a href="mailto:info@bodoart.hu">info@bodoart.hu</a></li>
	</ul>	
	<h2 class="art-heading"><?php _e( 'Magamról', 'bodoart_text_domain' ); ?></h2>
	<?php get_template_part('content', 'jenoaboutme'); ?>
</div>
<div id="glass" class="arts-container">
	<h2 class="art-heading"><?php _e( 'Üveg', 'bodoart_text_domain' ); ?></h2>
	<?php get_template_part('content', 'jenoglass'); ?>
</div>
<div id="ceramics" class="arts-container">
	<h2 class="art-heading"><?php _e( 'Kerámia', 'bodoart_text_domain' ); ?></h2>
	<?php get_template_part('content', 'jenoceramics'); ?>
</div>
<?php get_footer(); ?>