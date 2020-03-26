<?php
/*
* Template Name: Contact
*/

get_header(); ?>




<?php

	$contact_header_section = get_field('contact_header_section');

?>


<div class="page-header" style="background-image: url('<?php echo $contact_header_section['contact_header_background_image']; ?>')">
	
	<div class="container">
		<h1 class="page-header__title">
			<?php echo $contact_header_section['contact_header_title']; ?>
		</h1>
	</div>
	
	<div class="page-header__overlay"></div>
	
</div>






<div class="page-content">
	
	
	
	<div class="page-content__section">
	
		<div class="container">
			
			<div class="page-content__section-block">
		
				<h3 class="page-content__section-title">
					<?php the_field('our_locations_title'); ?>
				</h3>

				<div class="page-content__section-title__underline"></div>



				<div class="locations">



					<?php

					// check if the repeater field has rows of data
					if( have_rows('locations') ):

						// loop through the rows of data
						while ( have_rows('locations') ) : the_row(); ?>


						<div class="location">

							<h4 class="location-title"><?php the_sub_field('location_name'); ?></h4>
							<p class="location-content"><?php the_sub_field('address_line_1'); ?></p>
							<p class="location-content"><?php the_sub_field('address_line_2'); ?></p>
							<p class="location-content"><span class="helper__semi-bold">Phone:</span> <?php the_sub_field('phone_number'); ?></p>


							<?php $fax_number = get_sub_field('fax_number'); ?>

							<?php if ($fax_number): ?>
								<p class="location-content"><span class="helper__semi-bold">Fax: </span><?php echo $fax_number ?></p>
							<?php endif ?>

						</div>	


					<?php
						endwhile;

					else :

						// no rows found

					endif;

					?>



				</div>
				
			</div>
			
			
			
			
			
			<div class="page-content__section-block">
			
				<h3 class="page-content__section-title">
					Design Services
				</h3>

				<div class="page-content__section-title__underline"></div>

				<p class="page-content__paragraph-top-margin">
					Design services coming soon!
				</p>
				
			</div>
			
			
			
			
			
		</div>
		
	</div>
	
	
	
	
</div>





<?php 
get_footer();
?>
