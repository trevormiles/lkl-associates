<?php
/*
* Template Name: Employee Portal page
*/

get_header(); ?>


<?php

	$employee_portal_header_section = get_field('employee_portal_header_section');

?>


<div class="page-header" style="background-image: url('<?php echo $employee_portal_header_section['employee_portal_background_image']; ?>')">
	
	<div class="container">
		<h1 class="page-header__title">
			<?php echo $employee_portal_header_section['employee_portal_header_title']; ?>
		</h1>
	</div>
	
	<div class="page-header__overlay"></div>
	
</div>






<div class="page-content">
	
	
	
	<div class="page-content__section">
	
		<div class="container">	
			
			
			<?php

			// check if the repeater field has rows of data
			if( have_rows('employee_links') ):

			// loop through the rows of data
			while ( have_rows('employee_links') ) : the_row(); ?>
	
			
				<div class="page-content__section-block">
			
					<h3 class="page-content__section-title">
						<?php the_sub_field('title_for_link'); ?>
					</h3>

					<div class="page-content__section-title__underline"></div>

					<a href="<?php the_sub_field('link_url_location'); ?>" class="employee-link">
						<?php the_sub_field('link_text'); ?>
					</a>
				
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





<?php 
get_footer();
?>
