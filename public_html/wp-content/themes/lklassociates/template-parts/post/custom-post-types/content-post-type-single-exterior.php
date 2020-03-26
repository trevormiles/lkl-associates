<?php
/**
 * Content Post Single
 *
 * @package Base
 */

?>

<?php
if ( have_posts() ) :

	while ( have_posts() ) : the_post();
		?>

		<div class="single-product">
			
			<div class="single-product__hero" style="background-image: url('<?php the_field('hero_image'); ?>')">
			
				<h1 class="single-product__hero-title">
					<?php the_title(); ?>
				</h1>
				
				<div class="single-product__hero__overlay"></div>
				
			</div>
			
			
			
			<div class="single-product__content">
				
				<div class="container">
				
					<div class="single-product__content-container">
				
						<div class="single-product__content-left">
							
							<div class="single-product__content-left__titles">
								
								<h2 class="<?php the_field('cursive_top_title_font'); ?>">
									<?php the_field('cursive_top_title'); ?>
								</h2>
								
								<h2 class="single-product__bold-title">
									<?php the_field('bold_bottom_title'); ?>
								</h2>
								
								<div class="single-product__title-underline"></div>
							</div>

							<p class="single-product__product-description">
								<?php the_field('product_description'); ?>
							</p>

						</div>

						<div class="single-product__content-right">
							<img src="<?php the_field('featured_image'); ?>" class="single-product__content-right__image">
						</div>
					
					</div>
					
				</div>
			
			</div>
			
			
			
			
			
			
			<div class="single-product__gallery">
				
				<div class="container">
					
					<h2 class="single-product__gallery__title">Gallery</h2>
				
					<div class="single-product__gallery-container">

						<?php

						// check if the repeater field has rows of data
						if( have_rows('exterior_gallery') ):

							// loop through the rows of data
							while ( have_rows('exterior_gallery') ) : the_row(); ?>
						
								<?php 
						
									$unStrippedTitle = get_sub_field('product_title');
						
									$strippedTitle = preg_replace('/\s+/', '', $unStrippedTitle);
						
								?>
						

								<a data-toggle="modal" data-target="#<?php echo $strippedTitle ?>" class="single-product__gallery-tile" href="#" style="background-image: url('<?php the_sub_field('product_image'); ?>');">
									
									<div class="single-product__gallery-tile-content-container">
									
										<div class="single-product__gallery-tile-content">

											<h4 class="single-product__gallery-tile-title">
												<?php the_sub_field('product_title'); ?>
											</h4>

											<div class="single-product__gallery-tile-divider"></div>

											<p class="single-product__gallery-tile-description">
												<?php the_sub_field('product_description'); ?>
											</p>
											

										</div>
										
										<div class="single-product__gallery-tile-overlay"></div>
										
										<p class="single-product__gallery-tile-more">
											See more <i class="fas fa-chevron-right"></i>
										</p>
										
									</div>

								</a>
						

								<!-- Modal -->
								<div class="modal fade" id="<?php echo $strippedTitle ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-xl" role="document">
										<div class="modal-content">
											<div class="modal-header">
												
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
												
											</div>
											
											<div class="modal-body">
												
												
												<div class="product-modal__body-container">
												
													<div class="product-modal__image-container">
														<img class="product-modal__image" src="<?php the_sub_field('product_image'); ?>">
													</div>

													<div class="product-modal__content">
														
														<h5 class="product-modal__title">
															<?php the_sub_field('product_title'); ?>
														</h5>

														<p class="product-modal__description">
															<?php the_sub_field('product_description'); ?>
														</p>

													</div>
													
												</div>
												
											</div>
											
										</div>
									</div>
								</div>


						<?php
							endwhile;

						else :

							// no rows found

						endif;

						?>

					</div>
					
				</div>
				
			</div>
			
			
			
			
			
		</div>

<?php
	endwhile;
endif;
