<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LKLAssociates
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	
	
	
	<div class="maintenance-bar">
		<div class="container">
			
			<div class="maintenance-bar-container">
			
				<p class="maintenance-bar-text">
					Please review our updated policies regarding COVID-19
				</p>
				
				<div class="maintenance-bar-button-container">
					<a class="maintenance-bar-button" href="#" data-toggle="modal" data-target=".maintenance-modal">See updates</a>
				</div>
				
			</div>
			
		</div>
	</div>
	
	
	
	
	<!-- Extra large modal -->

	<div class="modal fade maintenance-modal" tabindex="-1" role="dialog" aria-labelledby="maintenance-modal" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				
				<div class="maintenance-modal-container">
					<img src="/wp-content/uploads/2020/03/LKL-COVID-Updates-01.jpg" class="maintenance-modal-image">
					<img src="/wp-content/uploads/2020/03/LKL-COVID-Updates-02.jpg" class="maintenance-modal-image">
				</div>
				
			</div>
		</div>
	</div>
	
	
	
	<div class="sub-navbar">
		
		<div class="sub-navbar-left">
			

			<?php while(has_sub_field('top_left_icons', 'option')): ?>

					<a class="sub-navbar-left__icon-container" href="<?php the_sub_field('icon_link_url'); ?>">
						<img src="<?php the_sub_field('icon_image'); ?>">
					</a>

			<?php endwhile; ?>
			
			
		</div>
		
		
		
		
		<!--
		
		<div class="sub-navbar-right">
			
			<a class="sub-navbar-right__text-container sub-navbar-right__request-quote" href="/contact">
				<p class="sub-navbar-right__text sub-navbar-right__request-quote__text">Request a quote</p>
			</a>
			
			<div class="sub-navbar-right__text-container sub-navbar-right__phone">
				<p class="sub-navbar-right__text"><i class="fas fa-phone-alt"></i>1-801-225-3830</p>
			</div>
			
		</div>
		
		-->
		
		
		
		
		
	</div>

	<nav class="navbar shadow-sm navbar-expand-lg navbar-light bg-light">
		
		<a class="navbar-brand" href="/">
			
			<div class="navbar-brand__logo-container">
				<img class="navbar-brand__logo" src="/wp-content/uploads/2019/10/lkl-logo.png">
			</div>
			
			<div class="navbar-brand__title-container">
				<h5 class="navbar-brand__title">LKL Associates</h5>
			</div>
			
		</a>
 
  		<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  		</button>

  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav ml-auto">
			  <li class="nav-item">
				<a class="nav-link active" href="/"><i class="fas fa-home"></i><span class="nav-link-span">Home</span></a>
			  </li>
				
			  <li class="nav-item">
				<a class="nav-link" href="/products/"><span class="nav-link-span">Products</span></a>
			  </li>
				
			  <li class="nav-item">
				<a class="nav-link" href="/about/"><span class="nav-link-span">About LKL</span></a>
			  </li>
			  
			  <li class="nav-item">
				<a class="nav-link" href="/contact/"><span class="nav-link-span">Contact</span></a>
			  </li>
    		</ul>
 	 	</div>
	</nav>

	<div id="content" class="site-content">
