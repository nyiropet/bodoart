<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name');?></title>

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>> 
	<header>
		<button class="hamburger hamburger--spin-r" type="button">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button>
		<h1 id="logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		<nav>
			<?php

			$defaults = array(
				'container' => false,
				'theme_location' => 'primary-menu'
			);
			wp_nav_menu($defaults);

			?>
		</nav>
	</header> 
	<content>