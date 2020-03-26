<?php
/*
* Template Name: Front Page
*/

get_header(); ?>






<div class="hero-container">
	
	
	
	
	
	<?php

	// check if the repeater field has rows of data
	if( have_rows('front_page_slides') ):

		// loop through the rows of data
		while ( have_rows('front_page_slides') ) : the_row(); ?>
	
			
			<div class="hero" style="background-image: url('<?php the_sub_field('background_image'); ?>');">

				<div class="hero__text-container">
					<h2 class="hero__cursive-title"><?php the_sub_field('cursive_top_title'); ?></h2>
					<h1 class="hero__bold-title"><?php the_sub_field('bold_bottom_title'); ?></h1>
				</div>

				<div class="button-center">
					<a href="<?php the_sub_field('button_location_url'); ?>" class="lkl-button lkl-button__orange hero__button"><?php the_sub_field('button_text'); ?><i class="fas fa-chevron-right"></i></a>
				</div>

			</div>

	
	<?php
		endwhile;

	else :

		// no rows found

	endif;

	?>

	
</div>





<?php $designer_callout_section = get_field('designer_callout_section'); ?>

<div class="designer-callout helper__section-top-margin" style="background-image:url('<?php echo $designer_callout_section['background_image']; ?>')">
	
	<div class="container">
	
		<div class="designer-callout__content">
			<h3 class="designer-callout__title">
				<?php echo $designer_callout_section['cursive_top_title']; ?>
			</h3>
			<div class="designer-callout__content-container">
				<h5 class="designer-callout__sub-title">
					<?php echo $designer_callout_section['bold_bottom_title']; ?>
				</h5>
				<div class="lkl-button__container">
					<a href="<?php echo $designer_callout_section['button_location_url']; ?>" class="lkl-button lkl-button__orange designer-callout__button">
						<?php echo $designer_callout_section['button_text']; ?>
						<i class="fas fa-chevron-right"></i></a>
				</div>
			</div>
		</div>
		
	</div>
	
	<div class="designer-callout__overlay"></div>
</div>






<?php $front_page_video_section = get_field('front_page_video_section'); ?>

<div class="video-section helper__section-top-margin">
	
	<h3 class="video-title">
		<?php echo $front_page_video_section['preview_text']; ?>
	</h3>
	
	<video class="video" poster="<?php echo $front_page_video_section['preview_image']; ?>">
		<source src="<?php echo $front_page_video_section['video']; ?>" type="video/mp4">
	</video>
</div>







<?php

	// check if the repeater field has rows of data
	if( have_rows('product_callouts') ):

		// loop through the rows of data
		while ( have_rows('product_callouts') ) : the_row(); ?>
	
			
			<div class="product-callout helper__section-top-margin">

				<a href="<?php the_sub_field('link_location_url'); ?>">

					<div class="product-callout__content-container" style="background-image: url('<?php the_sub_field('background_image'); ?>')">

						<div class="container product-callout__content">
							<h2 class="product-callout__title"><?php the_sub_field('product_title'); ?></h2>
							<div class="product-callout__arrow-container">
								<img src="/wp-content/uploads/2019/10/arrow.png" class="product-callout__arrow">
							</div>
						</div>

						<div class="product-callout__overlay"></div>

					</div>

				</a>

			</div>

	
	<?php
		endwhile;

	else :

		// no rows found

	endif;

?>



<div class="instagram-feed helper__section-top-margin">
	
	<div class="instagram-feed__title-area">
		<i class="fab fa-instagram instagram-feed__icon"></i>
		<h2 class="instagram-feed__title">Check out our latest posts!</h2>
	</div>
	
	<div class="instagram-feed__container">
		<?php echo do_shortcode("[instagram-feed]"); ?>
	</div>
	
</div>




<?php get_template_part( 'template-parts/two-box-layout' ); ?>




<?php 
get_footer();
?>