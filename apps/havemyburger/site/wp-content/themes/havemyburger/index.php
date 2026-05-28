<?php
/**
 * Fallback template — front page uses front-page.php.
 */

get_header();
?>
<main class="section">
	<div class="container">
		<h1><?php bloginfo( 'name' ); ?></h1>
		<p><?php bloginfo( 'description' ); ?></p>
	</div>
</main>
<?php
get_footer();
