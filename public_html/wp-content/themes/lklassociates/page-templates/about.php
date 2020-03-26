<?php
/*
* Template Name: About Us
*/

get_header(); ?>



<?php $header_section = get_field('header_section'); ?>

<div class="page-header" style="background-image: url('<?php echo $header_section['page_header_background_image']; ?>')">
	
	<div class="container">
		<h1 class="page-header__title">
			<?php echo $header_section['page_header_title']; ?>
		</h1>
	</div>
	
	<div class="page-header__overlay"></div>
	
</div>





<?php $top_content = get_field('top_content'); ?>

<div class="page-content">
	
	
	<div class="container">
		
		<div class="page-content__header">
			
			<h3 class="page-content__cursive-top-title">
				<?php echo $top_content['cursive_top_title']; ?>
			</h3>
			
			<div class="bigtext page-content__bold-bottom-title__container">
				
				<h2 class="page-content__bold-bottom-title">
					<?php echo $top_content['bold_bottom_title']; ?>
				</h2>
				
				<div class="page-content__underline"></div>
				
			</div>
			
		</div>
		
	</div>
	
	
	

	

			
	<?php if( have_rows('content_before_video') ): ?>
		<?php while( have_rows('content_before_video') ): the_row(); ?>

			<div class="page-content__section">

				<div class="container">

					<h3 class="page-content__section-title">
						<?php the_sub_field('title'); ?>
					</h3>

					<div class="page-content__section-paragraph">
						<?php the_sub_field('paragraph'); ?>
					</div>

				</div>

			</div>

		<?php endwhile; ?>
	<?php endif; ?>
			

	
	
	
	
	<?php $video_section = get_field('video_section'); ?>
	
	<div class="video-section about-page-video">
	
		<h3 class="video-title">
			<?php echo $video_section['video_preview_title']; ?>
		</h3>

		<video class="video" poster="<?php echo $video_section['video_preview_image']; ?>">
			<source src="<?php echo $video_section['video']; ?>" type="video/mp4">
		</video>
		
	</div>
	
	
	
	
	
	<?php if( have_rows('content_after_video') ): ?>
		<?php while( have_rows('content_after_video') ): the_row(); ?>

			<div class="page-content__section">

				<div class="container">

					<h3 class="page-content__section-title">
						<?php the_sub_field('title'); ?>
					</h3>

					<div class="page-content__section-paragraph">
						<?php the_sub_field('paragraph'); ?>
					</div>

				</div>

			</div>

		<?php endwhile; ?>
	<?php endif; ?>
	
	
	
	
	
	
</div>





<?php 
	get_footer();
?>