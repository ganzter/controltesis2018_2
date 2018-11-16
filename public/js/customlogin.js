
jQuery(function () {

/*******Login*******/
	jQuery('.js-form-login').validate({
		errorClass: 'help-block text-right animated fadeInDown',
		errorElement: 'div',
		errorPlacement: function(error, e) {
			jQuery(e).parents('.form-group > div').append(error);
		},
		highlight: function(e) {
			jQuery(e).closest('.form-group').removeClass('has-error').addClass('has-error');
			jQuery(e).closest('.help-block').remove();
		},
		success: function(e) {
			jQuery(e).closest('.form-group').removeClass('has-error');
			jQuery(e).closest('.help-block').remove();
		},
		rules: {
			'username': {
				required: true,
				minlength: 3,
			},
			'password': {
				required: true,
				minlength: 3
			}
		},
		messages: {
			'username': {
				required: 'Ingrese usuario',
				minlength: 'El usuario debe tener mínimo 3 caracteres',
			},
			'password': {
				required: 'Ingrese su contraseña',
				minlength: 'La contraseña debe tener mínimo 3 caracteres',
			}
		}
	});
/*******Login*******/

});



