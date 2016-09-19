<?php get_header(); ?>

<div class="slider-container">
	<?php wd_slider(2); ?>
</div>
<div id="glass" class="arts-container">
	<h2 class="art-heading"><?php _e( 'Üveg', 'bodoart_text_domain' ); ?></h2>
	<?php get_template_part('content', 'annaglass'); ?>
	<?php get_template_part('content', 'jenoglass'); ?>
</div>
<div id="ceramics" class="arts-container">
	<h2 class="art-heading"><?php _e( 'Kerámia', 'bodoart_text_domain' ); ?></h2>
	<?php get_template_part('content', 'jenoceramics'); ?>
</div>
<div id="graphic" class="arts-container">
	<h2 class="art-heading"><?php _e( 'Grafika', 'bodoart_text_domain' ); ?></h2>
	<?php get_template_part('content', 'annagraphic'); ?>
</div>
<div id="textil" class="arts-container">
	<h2 class="art-heading"><?php _e( 'Textil', 'bodoart_text_domain' ); ?></h2>
	<?php get_template_part('content', 'annatextil'); ?>
</div>

<?php get_footer(); ?>