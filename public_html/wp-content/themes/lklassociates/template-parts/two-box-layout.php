<div class="two-box-layout helper__section-top-margin">
	
	<div class="two-box__container">
		
		<div class="two-box__box-container">
			<h3 class="two-box__title"><?php the_field('left_box_title', 'option'); ?></h3>
			<p class="two-box__content"><?php the_field('left_box_text', 'option'); ?></p>
			<a href="<?php the_field('left_box_button_url_location', 'option'); ?>" class="two-box__button lkl-button lkl-button__orange lkl-button-skinny"><?php the_field('left_box_button_text', 'option'); ?><i class="fas fa-chevron-right"></i></a>
		</div>
	
		<div class="two-box__box-container">
			<h3 class="two-box__title"><?php the_field('right_box_title', 'option'); ?></h3>
			<p class="two-box__content"><?php the_field('right_box_text', 'option'); ?></p>
			<a href="<?php the_field('right_box_button_url_location', 'option'); ?>" class="two-box__button lkl-button lkl-button__orange lkl-button-skinny"><?php the_field('right_box_button_text', 'option'); ?><i class="fas fa-chevron-right"></i></a>
		</div>
		
	</div>
	
</div>
