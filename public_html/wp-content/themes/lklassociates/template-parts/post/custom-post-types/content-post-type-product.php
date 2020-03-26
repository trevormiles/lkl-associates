<?php
/**
 * Post Type Product
 *
 * @package LKL Associates
 */

if ( have_posts() ) : ?>

<div class="products">

	<div class="container">
		
		<h2 class="products-page-title">Supplying the building industry since 1978</h2>
		
		<div class="product-tile-container">

		<?php while ( have_posts() ) :
				the_post(); ?>

			<article class="product-tile" id="post-<?php the_ID(); ?>">

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
			
			<article class="product-tile" id="exteriors">

				<a href="/exteriors" class="product-tile-link">

					<div class="product-tile-image" style="background-image: url('/wp-content/uploads/2019/10/cedar.jpg')"></div>

					<div class="product-tile-text">
						<h5 class="product-tile-title">
							Exteriors
						</h5>
					</div>
				</a>

			</article>
	
		</div>
		
		
		<div class="product-page-line"></div>
		
		<p class="product-page-paragraph">
			Since 1978 LKL Associates has pledged to provide it's customers with a great buying experience. You will find all of our products at a great price and each product is guaranteed to meet a high standard of quality.
		</p>
		
		
	</div>
</div>
<?php endif; ?>

