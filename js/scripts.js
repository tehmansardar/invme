jQuery(document).ready(function ($, e) {
	$('.nav-link').click(function (e) {
		if ($(this).parent().find('.megamenu-container').size() > 0) {
			e.preventDefault();
		}
	});

	if ($('.testimonials').size() > 0) {
		var testimonialsSlider = $('.testimonials').bxSlider({
			pager: false,
			controls: false,
			auto: true,
			adaptiveHeight: true,
			onSlideBefore: function ($slideElement, oldIndex, newIndex) {
				$('.testimonial-persons a').removeClass('active');
				$('.testimonial-persons a:eq(' + newIndex + ')').addClass('active');
			},
		});

		$('.testimonial-persons a').click(function (e) {
			e.preventDefault();
			$('.testimonial-persons a').removeClass('active');
			$(this).addClass('active');
			testimonialsSlider.goToSlide($(this).index());
		});
	}
});
