<?php
/*
	Template Name: Anna Bodo Page
*/
?>

<?php get_header(); ?>
<div class="sidebar-nav">
	<div class="sidebar-contact-info">
		<span class="anna-profile-image-small"></span>
		<h1 class="page-heading-small"><?php the_title(); ?></h1>
		<ul class="contact-info-small">	
			<li class="phone"><a href="tel:06308793966">06308793966</a></li>
			<li class="email"><a href="mailto:info@bodoart.hu">info@bodoart.hu</a></li>
		</ul>
	</div>
	<nav class="anna-scroll-nav scroll-nav">
		<ul class="nav nav-pills">
			<li class="nav-item active"><a href="#about-me"><?php _e( 'Magamról', 'bodoart_text_domain' ); ?></a></li>
			<li class="nav-item"><a href="#glass"><?php _e( 'Üveg', 'bodoart_text_domain' ); ?></a></li>
			<li class="nav-item"><a href="#textil"><?php _e( 'Textil', 'bodoart_text_domain' ); ?></a></li>
			<li class="nav-item"><a href="#graphic"><?php _e( 'Grafika', 'bodoart_text_domain' ); ?></a></li>
		</ul>
	</nav>
</div>
<div class="page-content-container">
	<div id="about-me" class="arts-container">
		<div class="profile-image-container">
			<span class="anna-profile-image"></span>
		</div>
		<div class="contact-info-container">
			<h1 class="page-heading"><?php the_title(); ?></h1>
			<ul class="contact-info">	
				<li class="phone"><a href="tel:06308793966">06308793966</a></li>
				<li class="email"><a href="mailto:info@bodoart.hu">info@bodoart.hu</a></li>
			</ul>
		</div>		
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
</div>
<?php get_footer(); ?>