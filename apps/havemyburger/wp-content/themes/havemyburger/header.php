<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="HaveMyBurger Hotel — A boutique stay where comfort meets character. Luxury rooms, rooftop dining, and unforgettable hospitality.">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header">
	<div class="container header__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">HaveMy<span>Burger</span></a>
		<nav class="nav">
			<ul class="nav__links">
				<li><a href="#about">About</a></li>
				<li><a href="#rooms">Rooms</a></li>
				<li><a href="#amenities">Amenities</a></li>
				<li><a href="#restaurant">Dining</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
			<a href="#contact" class="btn btn--primary">Book Now</a>
			<button class="nav__toggle" aria-label="Open menu">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</nav>
	</div>
</header>

<nav class="nav__mobile" aria-label="Mobile navigation">
	<a href="#about">About</a>
	<a href="#rooms">Rooms</a>
	<a href="#amenities">Amenities</a>
	<a href="#restaurant">Dining</a>
	<a href="#contact">Contact</a>
	<a href="#contact" class="btn btn--primary">Book Now</a>
</nav>
