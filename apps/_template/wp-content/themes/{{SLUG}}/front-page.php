<?php
get_header();
?>
<main class="site-main">
	<div class="container">
		<h1>Welcome to <?php bloginfo( 'name' ); ?></h1>
		<p><?php bloginfo( 'description' ); ?></p>
		<p>Edit <code>apps/{{SLUG}}/wp-content/themes/{{SLUG}}/front-page.php</code> to customize this page.</p>
	</div>
</main>
<?php
get_footer();
