<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Uluwatu Cliff Villa — Luxury 3-bedroom cliffside villa in Uluwatu, Bali. Private chef, chauffeur, infinity pool, and ocean views from $20,000/night.">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header">
	<div class="container header__inner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">Uluwatu<span>Cliff</span></a>
		<nav class="nav">
			<ul class="nav__links">
				<li><a href="#about">The Villa</a></li>
				<li><a href="#bedrooms">Bedrooms</a></li>
				<li><a href="#amenities">Amenities</a></li>
				<li><a href="#dining">Dining</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
			<a href="#contact" class="btn btn--primary">Book Your Stay</a>
			<button class="nav__toggle" aria-label="Open menu">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</nav>
	</div>
</header>

<nav class="nav__mobile" aria-label="Mobile navigation">
	<a href="#about">The Villa</a>
	<a href="#bedrooms">Bedrooms</a>
	<a href="#amenities">Amenities</a>
	<a href="#dining">Dining</a>
	<a href="#contact">Contact</a>
	<a href="#contact" class="btn btn--primary">Book Your Stay</a>
</nav>
