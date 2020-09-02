jQuery(document).ready(function ($) {
	$('#invmContactForm').parsley();

	$('#invmContactForm').on('submit', function (e) {
		e.preventDefault();

		let form = $(this),
			// name = form.find('#name').val(),
			// email = form.find('#email').val(),
			// phone = form.find('#phone').val(),
			// about = form.find('#about').val(),
			// project = form.find('#project').val(),
			// deadlines = form.find('#deadlines').val(),
			// amount = form.find('#amount').val(),
			ajaxUrl = form.data('url');
		let formData = new FormData(this);
		formData.append('action', 'invm_save_quote_form');

		if ($('#invmContactForm').parsley().isValid()) {
			$('#submit').html('Sending....');
			$.ajax({
				url: ajaxUrl,
				method: 'POST',
				data: formData,
				contentType: false,
				cache: false,
				processData: false,
				// data: {
				// 	name: name,
				// 	email: email,
				// 	phone: phone,
				// 	about: about,
				// 	project: project,
				// 	deadlines: deadlines,
				// 	amount: amount,
				// 	action: 'invm_save_quote_form',
				// },
				success: function (data) {
					if (data == 0) {
						$('.notify').removeClass('hide').addClass('notify-success');
						$('#notify-message').text('Quote Sent');
						$('#invmContactForm')[0].reset();
						$('#submit').html('Quote Sended');
					} else {
						$('.notify').removeClass('hide').addClass('notify-error');
						$('#notify-message').text(data);
						$('#submit').html('Try again');
					}
				},
			});
		}
	});
});
