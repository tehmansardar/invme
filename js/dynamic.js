jQuery(document).ready(function ($) {
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
				console.log(data);
			},
		});
	});
});
