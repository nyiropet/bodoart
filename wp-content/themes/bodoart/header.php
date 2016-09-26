<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name');?></title>

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>> 
	<header class="active animate">
		<button class="hamburger hamburger--spin-r" type="button">
			<span class="hamburger-box animate">
				<span class="hamburger-inner"></span>
			</span>
		</button>
		<div class="logo-container animate">
			<a href="<?php bloginfo('url'); ?>">
				<span class="logo animate">					
				</span>
				<h1><?php bloginfo('name'); ?></h1>
			</a>
		</div>
		<nav class="wide-active animate">
			<?php

			$defaults = array(
				'container' => false,
				'theme_location' => 'primary-menu'
			);
			wp_nav_menu($defaults);

			?>
		</nav>
		<a class="header-phone"></a>
		<ul class="phone-numbers">
			<li><a href="tel:06308793966">Hívás: Bodó Anna</a></li>
			<li><a href="tel:06303841500">Hívás: Bodó Jenő</a></li>
		</ul>
	</header> 
	<content class="animate">