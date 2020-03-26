$(document).ready(function() {
  $('a.active').removeClass('active');
  $('a[href="' + location.pathname + '"]').addClass('active'); 
});

$('.hero-container').slick({
	autoplay: true,
	autoplaySpeed: 3000,
	arrows: false,
	dots: true
});


$('.bigtext').bigtext();


$('.video').click(function () {
	$('.video').attr('controls',true);
	$('.video-title').hide();
});


$('.single-product__gallery-tile-description').each(function(index, element) {
    $clamp(element, { clamp: 3, useNativeClamp: false });
});

$('.sbi_photo').find('img').addClass('remove-lazyload')
