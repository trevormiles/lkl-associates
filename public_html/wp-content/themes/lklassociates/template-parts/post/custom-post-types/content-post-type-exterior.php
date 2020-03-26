<?php
/**
 * Post Type Product
 *
 * @package LKL Associates
 */

if ( have_posts() ) : ?>

<div class="products">

	<div class="container">
		
		<h2 class="products-page-title">Select the category of exteriors you're looking for:</h2>
		
		<div class="product-tile-container exterior-tile-container">

		<?php while ( have_posts() ) :
				the_post(); ?>

			<article class="product-tile exterior-tile" id="post-<?php the_ID(); ?>">

				<a href="<?php the_permalink() ?>" class="product-tile-link">

					<div class="product-tile-image" style="background-image: url('<?php the_field('tile_image'); ?>')"></div>

					<div class="product-tile-text">
						<h5 class="product-tile-title">
							<?php the_title(); ?>
						</h5>
					</div>
				</a>

			</article>

		<?php endwhile; ?>
	
		</div>	
		
	</div>
</div>
<?php endif; ?>

