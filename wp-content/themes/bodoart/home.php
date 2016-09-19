<?php get_header(); ?>

<div class="slider-container">
	<?php wd_slider(2); ?>
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

<?php get_footer(); ?>