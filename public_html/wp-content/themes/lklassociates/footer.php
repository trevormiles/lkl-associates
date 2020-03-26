<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LKLAssociates
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		
		<div class="footer__top">
			
			<div class="footer__left">
				<div class="footer__logo-container">
					<img class="footer__logo" src="/wp-content/uploads/2019/10/lkl-logo.png">
				</div>
			</div>
		
			<div class="footer__right">
				
				<h5 class="footer__title">Navigate</h5>
				<div class="footer__links-container">
					<a class="footer__link" href="/">Home</a>
					<a class="footer__link" href="/about/">About LKL</a>
					<a class="footer__link" href="/products">Products</a>
					<a class="footer__link" href="/exteriors">Exteriors</a>
					<a class="footer__link" href="/contact">Contact</a>
					<a class="footer__link" href="/employee-portal">Employee Portal</a>
				</div>
				
				<!--
				<p class="footer__phone">Call 1-801-225-3830</p>
				-->				


			</div>
			
		</div>
		
		
		<div class="footer__bottom">
			<p class="footer__bottom__text">Copyright 2019 - LKL Associates - All Rights Reserved</p>
		</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->


<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>

<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bigtext.js"></script>

<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/clamp.min.js"></script>

<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/custom.js"></script>


<?php wp_footer(); ?>


</body>
</html>
