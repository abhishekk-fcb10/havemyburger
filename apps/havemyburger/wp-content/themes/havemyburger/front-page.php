<?php
/**
 * Front page template — HaveMyBurger hotel landing.
 */

get_header();
?>

<section class="hero">
	<div class="hero__bg"></div>
	<div class="container hero__content">
		<span class="hero__badge">Boutique Hotel &amp; Grill</span>
		<h1 class="hero__title">Stay somewhere <em>extraordinary</em></h1>
		<p class="hero__text">
			Welcome to HaveMyBurger — where boutique luxury meets bold flavor.
			Unwind in thoughtfully designed rooms and savor our signature rooftop dining experience.
		</p>
		<div class="hero__actions">
			<a href="#contact" class="btn btn--primary">Reserve Your Stay</a>
			<a href="#rooms" class="btn btn--ghost">Explore Rooms</a>
		</div>
	</div>
	<div class="hero__stats">
		<div class="hero__stat">
			<div class="hero__stat-value">48</div>
			<div class="hero__stat-label">Designer Rooms</div>
		</div>
		<div class="hero__stat">
			<div class="hero__stat-value">4.9</div>
			<div class="hero__stat-label">Guest Rating</div>
		</div>
		<div class="hero__stat">
			<div class="hero__stat-value">24/7</div>
			<div class="hero__stat-label">Concierge</div>
		</div>
	</div>
</section>

<section class="section" id="about">
	<div class="container about">
		<div class="about__image">
			<img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=800&q=80" alt="HaveMyBurger hotel lobby">
			<div class="about__image-badge">
				<strong>Est. 2019</strong>
				<span>City center location</span>
			</div>
		</div>
		<div class="about__content">
			<span class="section__label">Our Story</span>
			<h2>A hotel with personality, warmth, and a table worth staying for</h2>
			<p>
				HaveMyBurger started with a simple idea: hospitality should feel personal.
				Every corner of our hotel is designed to make you feel at home — from the hand-picked
				artwork in your room to the aroma of our signature grill drifting up from the terrace.
			</p>
			<p>
				Whether you're here for a weekend escape or a week of work, our team is dedicated
				to making every moment effortless, memorable, and delicious.
			</p>
			<div class="about__features">
				<div class="about__feature">
					<div class="about__feature-icon">&#9733;</div>
					<div>
						<h4>Award-Winning Service</h4>
						<p>Recognized for excellence in guest experience</p>
					</div>
				</div>
				<div class="about__feature">
					<div class="about__feature-icon">&#127968;</div>
					<div>
						<h4>Prime Location</h4>
						<p>Steps from the city's best attractions</p>
					</div>
				</div>
				<div class="about__feature">
					<div class="about__feature-icon">&#127860;</div>
					<div>
						<h4>Signature Dining</h4>
						<p>Our famous grill &amp; craft cocktail bar</p>
					</div>
				</div>
				<div class="about__feature">
					<div class="about__feature-icon">&#128170;</div>
					<div>
						<h4>Wellness Center</h4>
						<p>Spa, sauna, and rooftop pool access</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section rooms" id="rooms">
	<div class="container">
		<div class="section__header">
			<span class="section__label">Accommodations</span>
			<h2 class="section__title">Rooms &amp; Suites</h2>
			<p class="section__desc">
				Each room is a sanctuary — curated linens, rainfall showers, and views that make mornings worth waking up for.
			</p>
		</div>
		<div class="rooms__grid">
			<article class="room-card">
				<div class="room-card__image">
					<img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=600&q=80" alt="Classic Room">
				</div>
				<div class="room-card__body">
					<div class="room-card__tag">Most Popular</div>
					<h3 class="room-card__title">Classic Room</h3>
					<p class="room-card__desc">Cozy elegance with queen bed, city views, and premium amenities.</p>
					<div class="room-card__footer">
						<div class="room-card__price">$189 <span>/ night</span></div>
						<a href="#contact" class="btn btn--ghost" style="padding: 0.6rem 1.25rem; font-size: 0.8rem;">Book</a>
					</div>
				</div>
			</article>
			<article class="room-card">
				<div class="room-card__image">
					<img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?w=600&q=80" alt="Deluxe Suite">
				</div>
				<div class="room-card__body">
					<div class="room-card__tag">Recommended</div>
					<h3 class="room-card__title">Deluxe Suite</h3>
					<p class="room-card__desc">Spacious king suite with lounge area, soaking tub, and skyline panorama.</p>
					<div class="room-card__footer">
						<div class="room-card__price">$329 <span>/ night</span></div>
						<a href="#contact" class="btn btn--ghost" style="padding: 0.6rem 1.25rem; font-size: 0.8rem;">Book</a>
					</div>
				</div>
			</article>
			<article class="room-card">
				<div class="room-card__image">
					<img src="https://images.unsplash.com/photo-1578683010236-d716f9a3f461?w=600&q=80" alt="Penthouse">
				</div>
				<div class="room-card__body">
					<div class="room-card__tag">Premium</div>
					<h3 class="room-card__title">Penthouse</h3>
					<p class="room-card__desc">Two-bedroom penthouse with private terrace, butler service, and dining room.</p>
					<div class="room-card__footer">
						<div class="room-card__price">$649 <span>/ night</span></div>
						<a href="#contact" class="btn btn--ghost" style="padding: 0.6rem 1.25rem; font-size: 0.8rem;">Book</a>
					</div>
				</div>
			</article>
		</div>
	</div>
</section>

<section class="section" id="amenities">
	<div class="container">
		<div class="section__header">
			<span class="section__label">What We Offer</span>
			<h2 class="section__title">Hotel Amenities</h2>
			<p class="section__desc">Everything you need for a perfect stay, thoughtfully included.</p>
		</div>
		<div class="amenities__grid">
			<div class="amenity-card"><div class="amenity-card__icon">&#127946;</div><h3>Rooftop Pool</h3><p>Heated infinity pool with panoramic city views</p></div>
			<div class="amenity-card"><div class="amenity-card__icon">&#128170;</div><h3>Fitness Center</h3><p>24-hour gym with personal training available</p></div>
			<div class="amenity-card"><div class="amenity-card__icon">&#128133;</div><h3>Spa &amp; Sauna</h3><p>Full-service spa with massage and wellness treatments</p></div>
			<div class="amenity-card"><div class="amenity-card__icon">&#128663;</div><h3>Valet Parking</h3><p>Complimentary valet and EV charging stations</p></div>
			<div class="amenity-card"><div class="amenity-card__icon">&#128246;</div><h3>Free Wi-Fi</h3><p>High-speed fiber throughout the property</p></div>
			<div class="amenity-card"><div class="amenity-card__icon">&#9749;</div><h3>Room Service</h3><p>Available 24/7 from our in-house kitchen</p></div>
			<div class="amenity-card"><div class="amenity-card__icon">&#128188;</div><h3>Business Lounge</h3><p>Private meeting rooms and co-working space</p></div>
			<div class="amenity-card"><div class="amenity-card__icon">&#128021;</div><h3>Pet Friendly</h3><p>We welcome your furry travel companions</p></div>
		</div>
	</div>
</section>

<section class="section" id="restaurant">
	<div class="container restaurant">
		<div class="restaurant__content">
			<span class="section__label">Dining</span>
			<h2>The Grill at HaveMyBurger</h2>
			<p>
				Our rooftop restaurant is the heart of the hotel — where locally sourced ingredients
				meet bold, creative flavors. From our namesake gourmet burgers to seasonal tasting menus,
				every dish tells a story.
			</p>
			<p>
				Join us for breakfast, lunch, or dinner. Our craft cocktail bar stays open late,
				perfect for nightcaps under the stars.
			</p>
			<div class="restaurant__highlights">
				<span class="restaurant__highlight">Farm-to-Table</span>
				<span class="restaurant__highlight">Rooftop Terrace</span>
				<span class="restaurant__highlight">Craft Cocktails</span>
				<span class="restaurant__highlight">Live Music Fri–Sat</span>
			</div>
			<a href="#contact" class="btn btn--primary">Reserve a Table</a>
		</div>
		<div class="restaurant__image">
			<img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=800&q=80" alt="The Grill restaurant">
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section__header">
			<span class="section__label">Gallery</span>
			<h2 class="section__title">Life at HaveMyBurger</h2>
			<p class="section__desc">A glimpse into the experiences that await you.</p>
		</div>
		<div class="gallery__grid">
			<div class="gallery__item gallery__item--wide">
				<img src="https://images.unsplash.com/photo-1542314831-068cd1dbcd55?w=800&q=80" alt="Hotel exterior">
			</div>
			<div class="gallery__item gallery__item--tall">
				<img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?w=600&q=80" alt="Pool area">
			</div>
			<div class="gallery__item">
				<img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?w=600&q=80" alt="Bar">
			</div>
			<div class="gallery__item">
				<img src="https://images.unsplash.com/photo-1564501049412-61c2a3083791?w=600&q=80" alt="Spa">
			</div>
			<div class="gallery__item gallery__item--wide">
				<img src="https://images.unsplash.com/photo-1551218808-94e220e084d2?w=800&q=80" alt="Signature burger">
			</div>
		</div>
	</div>
</section>

<section class="section contact" id="contact">
	<div class="container contact__inner">
		<div class="contact__info">
			<span class="section__label">Get in Touch</span>
			<h2>Book your stay today</h2>
			<p>
				Ready to experience HaveMyBurger? Send us a message and our concierge team
				will get back to you within the hour.
			</p>
			<ul class="contact__details">
				<li>
					<div class="contact__details-icon">&#128205;</div>
					<div>
						<strong>Address</strong>
						<span>142 Burger Lane, Downtown District<br>New York, NY 10001</span>
					</div>
				</li>
				<li>
					<div class="contact__details-icon">&#128222;</div>
					<div>
						<strong>Phone</strong>
						<span>+1 (555) 867-5309</span>
					</div>
				</li>
				<li>
					<div class="contact__details-icon">&#9993;</div>
					<div>
						<strong>Email</strong>
						<span>hello@havemyburger.com</span>
					</div>
				</li>
				<li>
					<div class="contact__details-icon">&#128336;</div>
					<div>
						<strong>Check-in / Check-out</strong>
						<span>3:00 PM / 11:00 AM</span>
					</div>
				</li>
			</ul>
		</div>
		<form class="contact__form">
			<div class="form-row">
				<div class="form-group">
					<label for="name">Full Name</label>
					<input type="text" id="name" name="name" placeholder="John Doe" required>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" id="email" name="email" placeholder="john@example.com" required>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group">
					<label for="checkin">Check-in</label>
					<input type="date" id="checkin" name="checkin" required>
				</div>
				<div class="form-group">
					<label for="checkout">Check-out</label>
					<input type="date" id="checkout" name="checkout" required>
				</div>
			</div>
			<div class="form-group">
				<label for="room">Room Type</label>
				<select id="room" name="room" required>
					<option value="">Select a room</option>
					<option value="classic">Classic Room — $189/night</option>
					<option value="deluxe">Deluxe Suite — $329/night</option>
					<option value="penthouse">Penthouse — $649/night</option>
				</select>
			</div>
			<div class="form-group">
				<label for="message">Special Requests</label>
				<textarea id="message" name="message" placeholder="Any special requests or questions..."></textarea>
			</div>
			<button type="submit" class="btn btn--primary" style="width: 100%;">Send Booking Request</button>
		</form>
	</div>
</section>

<?php
get_footer();
