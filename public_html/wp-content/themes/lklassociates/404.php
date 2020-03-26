<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package LKLAssociates
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="not-found">
				
				<div class="not-found__content">
					
					<div class="container">
						
						<h1 class="not-found__404">404</h1>
						<h2 class="not-found__not-found">Page not found</h2>
						<p class="not-found__not-found-paragraph">You have tried to go to a page that no longer exists or that never existed. The best thing to do would be to go back to the home page and try  to navigate through the navigation bar to the page that you are looking for.</p>
				
						<a href="/" class="not-found__button lkl-button lkl-button__orange">Go home</a>
						
					</div>
					
				</div>
				
				<div class="not-found__overlay"></div>
				
			</section><!-- .404-not-found -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
