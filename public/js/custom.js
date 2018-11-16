jQuery(function () {	
	var width = $(window).width();
	var ajaxflagunblock = true;
/*****Generales********/
	if(width <769){
		if (jQuery('select.select2').data('select2')) {	jQuery('select.select2').select2("destroy");}
	}else{
		jQuery('select.select2').select2();
		jQuery('body').tooltip({
			selector: '[data-toggle=tooltip]',
			trigger: "hover",
			animation: true,
			html: true,
			container: 'body'
		});
	}
	jQuery.fn.modal.Constructor.prototype.enforceFocus = function() {};
	jQuery.fn.select2.amd.require(["select2/dropdown/attachBody", "select2/utils"], function(AttachBody, Utils){
		AttachBody.prototype._attachPositioningHandler = function (decorated, container) {
			var self = this;
			var scrollEvent = "scroll.select2." + container.id;
			var resizeEvent = "resize.select2." + container.id;
			var orientationEvent = "orientationchange.select2." + container.id;
			var $watchers = this.$container.parents().filter(Utils.hasScroll);
			$watchers.each(function () {
				$(this).data("select2-scroll-position", {
					x: $(this).scrollLeft(),
					y: $(this).scrollTop()
				});
			});
			$watchers.on(scrollEvent, function (ev) {
				var position = $(this).data("select2-scroll-position");
				$(self).scrollTop(position.y); // patch: this => self
			});
			$(window).on(scrollEvent + " " + resizeEvent + " " + orientationEvent,
				function (e) {
					self._positionDropdown();
					self._resizeDropdown();
				}
			);
		};
	});
	
	jQuery('[data-toggle="tooltip"]').on('click', function () {
		jQuery(this).tooltip('hide');
	});

	jQuery('form').on('keyup keypress', function(e) {
		var keyCode = e.keyCode || e.which;
		if (keyCode === 13) { 
			e.preventDefault();
			return false;
		}
	});

	jQuery('.js-datepicker-inicio-ind').datepicker({
		weekStart: 1,
		autoclose: true,
		todayHighlight: true,
		language:'es'
	}).on('changeDate', function (selected) {
		if(typeof selected.date !== "undefined") {
			var dpinicioDate1 = new Date(selected.date.valueOf());
			var dpinicioDate2 = new Date(selected.date.valueOf());
			jQuery('.js-datepicker-fin').datepicker('setStartDate', dpinicioDate1);
			jQuery('.js-datepicker-fin').datepicker('setDate', dpinicioDate2);
		}
	});

	jQuery('body').on('click', '.toTop', function(e) {
		$('html, body').animate({
			scrollTop: $("#tabreg").offset().top
		}, 100);
	});

	jQuery.validator.addClassRules('required', {
		required: true
	});
	jQuery.validator.addClassRules('textoinput', {
		minlength: 2,
		maxlength: 255
	});
	jQuery.validator.addClassRules('textoinput2', {
		minlength: 2,
		maxlength: 100
	});
	jQuery.validator.addClassRules('textoinput3', {
		minlength: 2,
		maxlength: 20
	});
	jQuery.validator.addClassRules('textoinput4', {
		maxlength: 200
	});
	jQuery.validator.addClassRules('textoinputcorta', {
		maxlength: 2
	});
	jQuery.validator.addClassRules('textoinputcorta2', {
		maxlength: 3
	});
	jQuery.validator.addClassRules('textoinputcorta3', {
		maxlength: 4
	});
	jQuery.validator.addClassRules('textoinputcorta5', {
		maxlength: 6
	});
	jQuery.validator.addClassRules('textoinputcorta4', {
		maxlength: 7
	});
	jQuery.validator.addClassRules('textoinputcorta6', {
		maxlength: 15
	});
	jQuery.validator.addClassRules('textoinputcorta7', {
		maxlength: 10
	});
	jQuery.validator.addClassRules('textoinputcorta8', {
		maxlength: 8
	});
	jQuery.validator.addClassRules('textoareainput', {
		maxlength: 1000,
	});
	jQuery.validator.addClassRules('digits', {
		digits: true
	});
	jQuery.validator.addClassRules('number', {
		number: true
	});
	jQuery.validator.addClassRules('email', {
		email: true
	});
	jQuery.extend(jQuery.validator.messages, {
		required: jQuery.validator.format("Obligatorio"),
		equalTo: jQuery.validator.format("Campo diferente a {0}"),
		minlength: jQuery.validator.format("Mínimo {0} caracteres"),
		maxlength: jQuery.validator.format("Máximo {0} caracteres"),
		digits: jQuery.validator.format("Solo dígitos"),
		number: jQuery.validator.format("Número inválido"),
		min: jQuery.validator.format("Mínimo: {0}"),
		max: jQuery.validator.format("Máximo: {0} "),
		email: jQuery.validator.format("Correo inválido")
	});

	jQuery( document ).ajaxStart(function() {
		blockpage('<h1><i class="fa fa-cog fa-spin fa-fw"></i> Procesando</h1>');
	});
	jQuery( document ).ajaxError(function(event, xhr, textStatus, errorThrown) {
		ajaxflagunblock = true;
		jQuery.unblockUI();
		notifytemplate('fa fa-times', 'Sin conexión', 'danger');
	});
	jQuery( document ).ajaxSuccess(function() {
		if(ajaxflagunblock){
			jQuery.unblockUI();
		}
	});

	jQuery('body').on('focusout', '.validarfixed', function() {
		if(jQuery(this).val()!=''){
			var numero = parseFloat(jQuery(this).val()) || 0;
			jQuery(this).val(numero.toFixed(3));
		}
	});

	jQuery('.js-masked-placa').mask('***-***');
	jQuery('.js-masked-brevete').mask('a99999999?99');
	jQuery('.js-masked-contenedor').mask('aaaa9999999');
	jQuery('.js-masked-mtc').mask('99999999999');

	jQuery('body').on('click', '.consultarbalanza', function() {
		var element =jQuery(this);
		if(!element.hasClass('disabled')){
			jQuery.ajax({
				type: "POST",
				url: base_url + "recepcion/detalleregistro",
				data: 'table=' + 'pesos' + '&id=' + element.data('flujo'),
				dataType: 'json',
				timeout: 60000,
				success: function(response) {
					if(response.estado=='500'){
						notifytemplate('fa fa-times', response.msg, 'danger');
					}
					if(response.estado=='200'){
						if (response.registro.Estado=='1') {
							if (isNaN(response.registro.Peso)) {
								notifytemplate('fa fa-times','Peso no definido', 'danger');
							}else{
								var target ='input[name='+element.data('target')+']';
								var numero = parseFloat(response.registro.Peso) || 0;
								//element.parents('.input-group').find(target).val(numero.toFixed(3)).trigger('change');
								element.parents('.input-group').find(target).val(numero).trigger('change');
								element.parents('.input-group').find(target).valid();
							}
						}else{
							notifytemplate('fa fa-times','Balanza no activada', 'danger');
						}
					}
				}
			});
		}
	});

	jQuery('select[name="carretasug"]').on('change', function () {
		var element =jQuery(this);
		element.parents('.input-group').find('input[name="carreta"]').val(element.val());
	});

	function blockpage(mensaje) {
		jQuery.blockUI({ 
			css: { 
				border: 'none', 
				padding: '15px', 
				backgroundColor: '#000', 
				'-webkit-border-radius': '10px', 
				'-moz-border-radius': '10px', 
				opacity: 1, 
				color: '#fff',
			},
			baseZ: 2000, 
			message: mensaje
		});
	}	
	
	function reiniciarform(idform, formvalidate, url, botonhtml) {
		jQuery(idform)[0].reset();
		jQuery(idform).find('.form-group').removeClass('has-error');
		if(formvalidate==''){}else{ formvalidate.resetForm(); }
		jQuery(idform).attr("action", base_url + url);
		jQuery(idform+' button[type="submit"]').html(botonhtml);
	}

	function notifytemplate(icon, message, type,delay) {
		var delay = (delay == null ? 2000:delay);
		jQuery.notify({
			icon: icon,
			message: message
			},{
			element: 'body',
			type: type,
			allow_dismiss: true,
			newest_on_top: true,
			showProgressbar: false,
			mouse_over: 'pause',
			offset: 20,
			spacing: 10,
			z_index: 1051,
			delay: delay,
			animate: {
				enter: 'animated fadeIn',
				exit: 'animated fadeOutDown'
			}
		});
	}

	function datatabletemplate(idtable,lengthChange,buttons) {
		var lengthChange = (lengthChange == null ? true:lengthChange);
		var buttons = (buttons == null ? false:buttons);
		var tabletemp =jQuery(idtable).DataTable({
			buttons: buttons,
			columnDefs: [ { orderable: false, targets: [-1]} ],
			order: [],
			lengthChange: lengthChange,
			pageLength: 10,
			lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
			bAutoWidth: false,
			language: {
				"emptyTable":     "No existen elementos",
				"info":           "_TOTAL_ elementos (Página _PAGE_ de _PAGES_)",
				"infoEmpty":      "No hay elementos a mostrar",
				"infoFiltered": "<br>Filtrado de _MAX_ elementos",
				"infoPostFix":    "",
				"thousands":      ",",
				"lengthMenu":     "Elementos : _MENU_",
				"loadingRecords": "Cargando...",
				"processing":     "Procesando...",
				"search":         "Filtrar : ",
				"zeroRecords": "No hay resultados.",
				"paginate": {
					"first":      "Primero",
					"last":       "Último",
					"next":       "Siguiente",
					"previous":   "Anterior"
				},
				"aria": {
					"sortAscending":  ":  Ordernar la columna de forma ascendente",
					"sortDescending": ": Ordernar la columna de forma descendente"
				} 
			}
		});
		return tabletemp;
	}
	function datatabletemplate2(idtable) {
		var tabletemp =jQuery(idtable).DataTable({
			dom: 'Bfrtip',
			buttons: [
				{
					extend: 'copy',
					text: 'Copiar',
					exportOptions: {
						columns: 'th:not(:first-child)'
					}
				},
				{
					extend: 'csv',
					title: reportetext,
					filename: reportetext,
					exportOptions: {
						columns: 'th:not(:first-child)'
					}
				},
				{
					extend: 'excel',
					text: 'Excel',
					title: reportetext,
					filename: reportetext,
					exportOptions: {
						columns: 'th:not(:first-child)'
					}
				},
				{
					extend: 'pdf',
					title: reportetext,
					filename: reportetext,
					exportOptions: {
						columns: 'th:not(:first-child)'
					}
				},
				{
					extend: 'print',
					text: 'Imprimir',
					title: reportetext,
					exportOptions: {
						columns: 'th:not(:first-child)'
					}
				}
			],
			columnDefs: [ { orderable: false, targets: [-1]} ],
			order: [],
			lengthChange: true,
			pageLength: 10,
			lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]],
			bAutoWidth: false,
			language: {
				"emptyTable":     "No existen elementos",
				"info":           "_TOTAL_ elementos (Página _PAGE_ de _PAGES_)",
				"infoEmpty":      "No hay elementos a mostrar",
				"infoFiltered": "<br>Filtrado de _MAX_ elementos",
				"infoPostFix":    "",
				"thousands":      ",",
				"lengthMenu":     "Elementos : _MENU_",
				"loadingRecords": "Cargando...",
				"processing":     "Procesando...",
				"search":         "Filtrar : ",
				"zeroRecords": "No hay resultados.",
				"paginate": {
					"first":      "Primero",
					"last":       "Último",
					"next":       "Siguiente",
					"previous":   "Anterior"
				},
				"aria": {
					"sortAscending":  ":  Ordernar la columna de forma ascendente",
					"sortDescending": ": Ordernar la columna de forma descendente"
				} 
			}
		});
		return tabletemp;
	}
/*****Generales********/

/*******Usuario*******/
	var usuarioclaveform= '#usuarioclave-form';
	var usuarioclavemodal= '#usuarioclave-modal';
	var editarusuarioclave= '.editarusuarioclave';

	jQuery('body').on('click', editarusuarioclave, function() {
		reiniciarform(usuarioclaveform,usuarioclavevalidate,'inicio/editarusuarioclave','<i class="fa fa-plus push-5-r"></i> Guardar');
		jQuery(usuarioclavemodal).modal('toggle');
	});

	var usuarioclavevalidate = jQuery(usuarioclaveform).validate({
		ignore: "",
		errorClass: 'help-block text-right animated fadeInDown',
		errorElement: 'div',
		errorPlacement: function(error, e) {

			jQuery(e).parents('.form-group > div').append(error);
		},
		highlight: function(e) {
			var elem = jQuery(e);
			elem.closest('.form-group').removeClass('has-error').addClass('has-error');
			elem.closest('.help-block').remove();
		},
		success: function(e) {
			var elem = jQuery(e);
			elem.closest('.form-group').removeClass('has-error');
			elem.closest('.help-block').remove();
		},
		rules: {
			'clavenueva': {
				minlength: 4
			},
			'clavenueva2': {
				equalTo: '#clavenueva'
			},
		},
		messages: {
			'clavenueva2': {
				equalTo: 'Repita la contraseña anterior'
			},
		},
		submitHandler: function(form) {				
			jQuery.ajax({
				url: form.action,
				type: form.method,
				data: $(form).serialize(),
				dataType: 'json',
				timeout: 60000,
				success: function(response) {
					if(response.estado=='500'){
						notifytemplate('fa fa-times', response.msg, 'danger');
					}
					if(response.estado=='201'){
						notifytemplate('fa fa-check', 'Guardado correctamente', 'success');
						reiniciarform(usuarioclaveform,usuarioclavevalidate,'inicio/editarusuarioclave','<i class="fa fa-plus push-5-r"></i> Guardar');
						jQuery(usuarioclavemodal).modal('toggle');
					}
				}
			});
		}
	});
/*******Usuario*******/

/*******Gestion de perfil*******/
	/*******menu*******/
		var menu= '#menu';
		var menuform= '#menu-form';
		var nuevamenu= '.nuevamenu';
		var editarmenu= '.editarmenu';
		var cambiaestado= '.cambiaestado';
		var cambiaestadomenu= '.cambiaestadomenu';
		var seleccionaregistromenu= '.seleccionaregistromenu';
		var ultimasmenus= '#ultimasmenus';
		var ultimasmenustable = datatabletemplate(ultimasmenus+' .table-lista');

		function actualizarultimasmenus(html) {
			ultimasmenustable.destroy();
			jQuery(ultimasmenus+' .table-lista tbody').html(html);
			ultimasmenustable = datatabletemplate(ultimasmenus+' .table-lista');
		}

		var menuvalidate = jQuery(menuform).validate({
			ignore: "",
			errorClass: 'help-block text-right animated fadeInDown',
			errorElement: 'div',
			errorPlacement: function(error, e) {

				jQuery(e).parents('.form-group > div').append(error);
			},
			highlight: function(e) {
				var elem = jQuery(e);
				elem.closest('.form-group').removeClass('has-error').addClass('has-error');
				elem.closest('.help-block').remove();
			},
			success: function(e) {
				var elem = jQuery(e);
				elem.closest('.form-group').removeClass('has-error');
				elem.closest('.help-block').remove();
			},
			rules: {
				'ruc': {
					required: true,
					minlength: 11,
					maxlength: 11,
					digits: true
				}
			},
				submitHandler: function(form) {
				event.preventDefault();
				jQuery.ajax({
					url: form.action,
					type: form.method,
					data: $(form).serialize(),
					dataType: 'json',
					timeout: 60000,
					success: function(response) {
						console.log(response.estado); 
						if(response.estado=='500'){
							notifytemplate('fa fa-times', response.msg, 'danger');
						}
						if(response.estado=='200'){

							notifytemplate('fa fa-check', 'Registro correcto', 'success');
							reiniciarform(menuform,menuvalidate,'gestiondeperfil/nuevoregistro','<i class="fa fa-plus push-5-r"></i> Registrar');
							jQuery(menu).collapse('hide');

							actualizarultimasmenus(response.registros);
							jQuery('#busquedas .tab-pane form').submit();
						}
						if(response.estado=='201'){
							notifytemplate('fa fa-check', 'Registro actualizado', 'success');
							reiniciarform(menuform,menuvalidate,'gestiondeperfil/actualizarregistro','<i class="fa fa-edit push-5-r"></i> Editar');
							jQuery(menu).collapse('hide');

							actualizarultimasmenus(response.registros);
							jQuery('#busquedas .tab-pane form').submit();
						}
					}
				});
			}
		});

		jQuery('body').on('click', nuevamenu, function() {
			reiniciarform(menuform,menuvalidate,'gestiondeperfil/nuevoregistro','<i class="fa fa-plus push-5-r"></i> Registrar');
			jQuery(menuform+' input[name="estado"]').val(1);
		});
		jQuery(menu).on('shown.bs.collapse', function () {
			$('html, body').animate({
				scrollTop: $(menu).offset().top - 90
			}, 500, function(){});
		});
		jQuery(menu).on('hidden.bs.collapse', function () {
			$('html, body').animate({
				scrollTop: $('body').offset().top
			}, 500, function(){});
			jQuery(menuform+' input[name="id"]').val(null);
		});

		jQuery('body').on('click', editarmenu, function() {
			jQuery.ajax({
				type: "POST",
				url: base_url + "gestiondeperfil/detalleregistro",
				data: 'table=' + 'menu' + '&id=' + jQuery(this).data('id'),
				dataType: 'json',
				timeout: 60000,
				success: function(response) {
					if(response.estado=='500'){
						notifytemplate('fa fa-times', response.msg, 'danger');
					}
					if(response.estado=='200'){
						reiniciarform(menuform,menuvalidate,'gestiondeperfil/actualizarregistro','<i class="fa fa-plus push-5-r"></i> Editar');
						jQuery(menuform+' input[name="id"]').val(response.registro.id);
						jQuery(menuform+' input[name="descripcion"]').val(response.registro.descripcion);
						jQuery(menuform+' input[name="icono"]').val(response.registro.icono);
						jQuery(menuform+' select[name="estado"]').val(response.registro.estado);
											
						jQuery(menu).collapse('show');

						$('html, body').animate({
							scrollTop: $(menu).offset().top - 90
						}, 500, function(){});
					}
				}
			});
		});

		jQuery('body').on('click', '#busqueda-icono', function() {
			jQuery('#iconomenu-modal').modal('toggle');
		});
		jQuery('body').on('click', '.agregar-icono', function(e) {
			e.preventDefault();
			var codigo = $(this).attr('data-codigo');
			$('#icono').val(codigo);
		});

		jQuery('body').on('click', cambiaestadomenu, function() {
			var elemento = jQuery(this);
			jQuery.confirm({
				icon: 'fa fa-warning',
				title: 'Confirmación',
				content: 'Se borrará el registro',
				type: 'blue',
				closeIcon: true,
				draggable: false,
				buttons: {
					cancel: {
						btnClass: 'btn-muted',
						text: 'Cancelar'
					},
					success: {
						btnClass: 'btn-green',
						text: 'Confimar',
						action: function(){
							jQuery.ajax({
								type: "POST",
								url: base_url + "gestiondeperfil/actualizarregistro",
								data: 'table=' + elemento.data('table') + '&id=' + elemento.data('id') + '&estado=' + elemento.data('estado'),
								dataType: 'json',
								timeout: 60000,
								success: function(response) {
									if(response.estado=='500'){
										notifytemplate('fa fa-times', response.msg, 'danger');
									}
									if(response.estado=='201'){
										actualizarultimasmenus(response.registros);
										jQuery('#busquedas .tab-pane form').submit();
									}
								}
							});
						}
					}
				}
			});
		});
	/*******menu*******/

	/*******submenu*******/
		var submenu= 'submenu';
		var cambiaestado='.cambiaestadosubmenu'
		var submenumodal= '#submenu-modal';
		var submenuform= '#submenu-form';
		var nuevosubmenubtn= '.nuevosubmenubtn';
		var editarsubmenubtn= '.editarsubmenubtn';
		var submenutable = datatabletemplate(submenumodal+' .table-lista');

		jQuery('body').on('click', nuevosubmenubtn, function() {
			var menu = jQuery(this).data('cadena');

			jQuery.ajax({
				type: "POST",
				url: base_url + "gestiondeperfil/listado",
				data: 'table=' + jQuery(this).data('table') + '&estado=' + jQuery(this).data('estado') + '&cadena=' + menu,
				dataType: 'json',
				timeout: 60000,
				success: function(response) {

					if(response.estado=='500'){
						notifytemplate('fa fa-times', response.msg, 'danger');
						submenutable.clear().draw();
					}
					if(response.estado=='200'){
						reiniciarform(submenuform,submenuvalidate,'gestiondeperfil/nuevoregistro','<i class="fa fa-plus push-5-r"></i> Registrar');
						//submenutable.destroy();
						jQuery(submenuform+' input[name="id"]').val(null);
						jQuery(submenuform+' input[name="padre"]').val(menu);
						jQuery(submenumodal+' .table-lista tbody').html(response.registros);
						//submenutable = datatabletemplate(submenumodal+' .table-lista');
						jQuery(submenumodal).modal('toggle');
					}
				}
			});
		});

		jQuery('body').on('click', editarsubmenubtn, function() {
			jQuery.ajax({
				type: "POST",
				url: base_url + "gestiondeperfil/detalleregistro",
				data: 'table=' + 'menu' + '&id=' + jQuery(this).data('id'),
				dataType: 'json',
				timeout: 60000,
				success: function(response) {
					//console.log(response);
					if(response.estado=='500'){
						notifytemplate('fa fa-times', response.msg, 'danger');
					}
					if(response.estado=='200'){
						reiniciarform(submenuform,submenuvalidate,'gestiondeperfil/actualizarregistro','<i class="fa fa-plus push-5-r"></i> Editar');
						jQuery(submenuform+' input[name="id"]').val(response.registro.id);
						jQuery(submenuform+' input[name="estado"]').val(response.registro.estado);
						jQuery(submenuform+' input[name="descripcion"]').val(response.registro.descripcion);
						jQuery(submenuform+' input[name="icono"]').val(response.registro.icono);
						jQuery(submenuform+' input[name="url"]').val(response.registro.url);
						jQuery(submenumodal).animate({ scrollTop: 0 }, 200);
					}
				}
			});
		});

		jQuery('body').on('click',cambiaestado, function() {
			var elemento = jQuery(this);
			jQuery.confirm({
				icon: 'fa fa-warning',
				title: 'Confirmación',
				content: 'Se borrará el registro',
				type: 'blue',
				closeIcon: true,
				draggable: false,
				buttons: {
					cancel: {
						btnClass: 'btn-muted',
						text: 'Cancelar'
					},
					success: {
						btnClass: 'btn-green',
						text: 'Confimar',
						action: function(){
							jQuery.ajax({
								type: "POST",
								url: base_url + "gestiondeperfil/actualizarregistro",
								data: 'padre=' + elemento.data('padre') + '&table=' + elemento.data('table') + '&id=' + elemento.data('id') + '&estado=' + elemento.data('estado'),
								dataType: 'json',
								timeout: 60000,
								success: function(response) {
									if(response.estado=='500'){
										notifytemplate('fa fa-times', response.msg, 'danger');
									}
									if(response.estado=='200'){

										notifytemplate('fa fa-check', 'Registro eliminado', 'success');
										submenutable.destroy();
										jQuery(submenumodal+' .table-lista tbody').html(response.registros);
										submenutable = datatabletemplate(submenumodal+' .table-lista');

										actualizarultimasmenus(response.registrosmenu);
										jQuery('#busquedas .tab-pane form').submit();
									}
								}
							});
						}
					}
				}
			});			
		});

		jQuery('body').on('click', '#busqueda-icono-submenu', function() {
			jQuery('#iconosubmenu-modal').modal('toggle');
		});
		jQuery('body').on('click', '.agregar-icono-submenu', function(e) {
			e.preventDefault();
			var codigo = $(this).attr('data-codigo');
			$('#icono-submenu').val(codigo);
		});

		var submenuvalidate = jQuery(submenuform).validate({
			ignore: "",
			errorClass: 'help-block text-right animated fadeInDown',
			errorElement: 'div',
			errorPlacement: function(error, e) {

				jQuery(e).parents('.form-group > div').append(error);
			},
			highlight: function(e) {
				var elem = jQuery(e);
				elem.closest('.form-group').removeClass('has-error').addClass('has-error');
				elem.closest('.help-block').remove();
			},
			success: function(e) {
				var elem = jQuery(e);
				elem.closest('.form-group').removeClass('has-error');
				elem.closest('.help-block').remove();
			},
			rules: {
				'descripcion': {
					required: true,
					maxlength: 255
					
				},
				'url': {
					required: true,
					maxlength: 255
					
				}
			},
			submitHandler: function(form) {
				event.preventDefault();
				jQuery.ajax({
					url: form.action,
					type: form.method,
					data: $(form).serialize(),
					dataType: 'json',
					timeout: 60000,
					success: function(response) {
						if(response.estado=='500'){
							notifytemplate('fa fa-times', response.msg, 'danger');
						}
						if(response.estado=='200'){
							notifytemplate('fa fa-check', 'Registro correcto', 'success');
							reiniciarform(submenuform,submenuvalidate,'gestiondeperfil/nuevoregistro','<i class="fa fa-plus push-5-r"></i> Registrar');
							submenutable.destroy();
							jQuery(submenumodal+' .table-lista tbody').html(response.registros);
							submenutable = datatabletemplate(submenumodal+' .table-lista');

							//jQuery(reservaform+ ' input[name="cantidad"]').attr({"min":response.submenues});

							actualizarultimasreservas(response.registrosreserva);
							jQuery('#busquedas .tab-pane form').submit();
						}
						if(response.estado=='201'){
							notifytemplate('fa fa-check', 'Registro actualizado', 'success');
							reiniciarform(submenuform,submenuvalidate,'gestiondeperfil/nuevoregistro','<i class="fa fa-plus push-5-r"></i> Registrar');
							jQuery(submenuform+' input[name="id"]').val(null);
							submenutable.destroy();
							jQuery(submenumodal+' .table-lista tbody').html(response.registros);
							submenutable = datatabletemplate(submenumodal+' .table-lista');

							actualizarultimasreservas(response.registrosreserva);
							jQuery('#busquedas .tab-pane form').submit();
						}
					}
				});
			}
		});
	/*******submenu*******/

	/*******perfil*******/
		var perfil= '#perfil';
		var perfilform= '#perfil-form';
		var nuevaperfil= '.nuevaperfil';
		var editarperfil= '.editarperfil';
		var cambiaestado= '.cambiaestado';
		var cambiaestadoperfil= '.cambiaestadoperfil';
		var seleccionaregistroperfil= '.seleccionaregistroperfil';
		var ultimasperfiles= '#ultimasperfiles';
		var menuperfilmodal= '#menuperfil-modal';
		var menuperfilform= '#menuperfil-form';
		var ultimasperfilestable = datatabletemplate(ultimasperfiles+' .table-lista');

		function actualizarultimasperfiles(html) {
			ultimasperfilestable.destroy();
			jQuery(ultimasperfiles+' .table-lista tbody').html(html);
			ultimasperfilestable = datatabletemplate(ultimasperfiles+' .table-lista');
		}

		var perfilvalidate = jQuery(perfilform).validate({
			ignore: "",
			errorClass: 'help-block text-right animated fadeInDown',
			errorElement: 'div',
			errorPlacement: function(error, e) {

				jQuery(e).parents('.form-group > div').append(error);
			},
			highlight: function(e) {
				var elem = jQuery(e);
				elem.closest('.form-group').removeClass('has-error').addClass('has-error');
				elem.closest('.help-block').remove();
			},
			success: function(e) {
				var elem = jQuery(e);
				elem.closest('.form-group').removeClass('has-error');
				elem.closest('.help-block').remove();
			},
			rules: {
				'ruc': {
					required: true,
					minlength: 11,
					maxlength: 11,
					digits: true
				}
			},
			submitHandler: function(form) {
				event.preventDefault();
				jQuery.ajax({
					url: form.action,
					type: form.method,
					data: $(form).serialize(),
					dataType: 'json',
					timeout: 60000,
					success: function(response) {
						console.log(response.estado); 
						if(response.estado=='500'){
							notifytemplate('fa fa-times', response.msg, 'danger');
						}
						if(response.estado=='200'){

							notifytemplate('fa fa-check', 'Registro correcto', 'success');
							reiniciarform(perfilform,perfilvalidate,'gestiondeperfil/nuevoregistro','<i class="fa fa-plus push-5-r"></i> Registrar');
							jQuery(perfil).collapse('hide');

							actualizarultimasperfiles(response.registros);
							jQuery('#busquedas .tab-pane form').submit();
						}
						if(response.estado=='201'){
							notifytemplate('fa fa-check', 'Registro actualizado', 'success');
							reiniciarform(perfilform,perfilvalidate,'gestiondeperfil/actualizarregistro','<i class="fa fa-edit push-5-r"></i> Editar');
							jQuery(perfil).collapse('hide');

							actualizarultimasperfiles(response.registros);
							jQuery('#busquedas .tab-pane form').submit();
						}
					}
				});
			}
		});

		jQuery('body').on('click', nuevaperfil, function() {
			reiniciarform(perfilform,perfilvalidate,'gestiondeperfil/nuevoregistro','<i class="fa fa-plus push-5-r"></i> Registrar');
			jQuery(perfilform+' input[name="estado"]').val(1);
		});
		jQuery(perfil).on('shown.bs.collapse', function () {
			$('html, body').animate({
				scrollTop: $(perfil).offset().top - 90
			}, 500, function(){});
		});
		jQuery(perfil).on('hidden.bs.collapse', function () {
			$('html, body').animate({
				scrollTop: $('body').offset().top
			}, 500, function(){});
			jQuery(perfilform+' input[name="id"]').val(null);
		});

		jQuery('body').on('click', editarperfil, function() {
			jQuery.ajax({
				type: "POST",
				url: base_url + "gestiondeperfil/detalleregistro",
				data: 'table=' + 'perfil' + '&id=' + jQuery(this).data('id'),
				dataType: 'json',
				timeout: 60000,
				success: function(response) {
					if(response.estado=='500'){
						notifytemplate('fa fa-times', response.msg, 'danger');
					}
					if(response.estado=='200'){
						reiniciarform(perfilform,perfilvalidate,'gestiondeperfil/actualizarregistro','<i class="fa fa-plus push-5-r"></i> Editar');
						jQuery(perfilform+' input[name="id"]').val(response.registro.id);
						jQuery(perfilform+' input[name="descripcion"]').val(response.registro.descripcion);
						jQuery(perfilform+' select[name="estado"]').val(response.registro.estado);
											
						jQuery(perfil).collapse('show');

						$('html, body').animate({
							scrollTop: $(perfil).offset().top - 90
						}, 500, function(){});
					}
				}
			});
		});

		/*jQuery('body').on('click', '.nuevomenuperfilbtn', function() {
			jQuery(menuperfilmodal).$.post(base_url + "gestiondeperfil/menuperfilmodal", { id: $(this).attr('data-cadena') } ).modal('toggle');
		});*/

		jQuery('body').on("click",".nuevomenuperfilbtn", function(){
	        var id = $(this).attr('data-cadena') ;
	        $.ajax({
	            url: base_url + "gestiondeperfil/menuperfilmodal",
	            type:"POST",
	            data:{id:id},
				dataType: 'json',
				timeout: 60000,
				success: function(response) {
					if(response.estado=='500'){
						notifytemplate('fa fa-times', response.msg, 'danger');
					}
					if(response.estado=='200'){
						reiniciarform(menuperfilform,'','gestiondeperfil/actualizarregistro','<i class="fa fa-plus push-5-r"></i> Editar Perfil');
						jQuery(menuperfilform+' .content_menuperfil').html(response.registros);
						jQuery(menuperfilform+' input[name="id"]').val(id);
						jQuery(menuperfilmodal).modal('toggle');
					}
			    }
	        });
	    });

		jQuery('body').on("change",".checklistp", function(){
			var elemento = jQuery(this);
			if(elemento.prop("checked") == true){
				elemento.closest('.listadocont').find("input.checklisti").prop('checked', true);
			}else{
				elemento.closest('.listadocont').find("input.checklisti").prop('checked', false);
			}
		});

		jQuery('body').on("change",".checklisti", function(){
			var elemento = jQuery(this);
			if(elemento.prop("checked") == true){
				var cont=0;
				elemento.closest('.listadocont').find("input.checklisti").each( function (){
					if(jQuery(this).prop("checked") == true){
						cont++;
					}
				});
				if(elemento.closest('.listadocont').find("input.checklisti").length==cont){
					elemento.closest('.listadocont').find("input.checklistp").prop('checked', true);
				}
			}else{
				elemento.closest('.listadocont').find("input.checklistp").prop('checked', false);
			}
		});

		jQuery('body').on('click', cambiaestadoperfil, function() {
			var elemento = jQuery(this);
			jQuery.confirm({
				icon: 'fa fa-warning',
				title: 'Confirmación',
				content: 'Se borrará el registro',
				type: 'blue',
				closeIcon: true,
				draggable: false,
				buttons: {
					cancel: {
						btnClass: 'btn-muted',
						text: 'Cancelar'
					},
					success: {
						btnClass: 'btn-green',
						text: 'Confimar',
						action: function(){
							jQuery.ajax({
								type: "POST",
								url: base_url + "gestiondeperfil/actualizarregistro",
								data: 'table=' + elemento.data('table') + '&id=' + elemento.data('id') + '&estado=' + elemento.data('estado'),
								dataType: 'json',
								timeout: 60000,
								success: function(response) {
									if(response.estado=='500'){
										notifytemplate('fa fa-times', response.msg, 'danger');
									}
									if(response.estado=='201'){
										actualizarultimasperfiles(response.registros);
										jQuery('#busquedas .tab-pane form').submit();
									}
								}
							});
						}
					}
				}
			});
		});
	
		var salidaembarquevalidate = jQuery(menuperfilform).validate({
			ignore: "",
			errorClass: 'help-block text-right animated fadeInDown',
			errorElement: 'div',
			errorPlacement: function(error, e) {

				jQuery(e).parents('.form-group > div').append(error);
			},
			highlight: function(e) {
				var elem = jQuery(e);
				elem.closest('.form-group').removeClass('has-error').addClass('has-error');
				elem.closest('.help-block').remove();
			},
			success: function(e) {
				var elem = jQuery(e);
				elem.closest('.form-group').removeClass('has-error');
				elem.closest('.help-block').remove();
			},
			submitHandler: function(form) {				
				jQuery.ajax({
					url: form.action,
					type: form.method,
					data: $(form).serialize(),
					dataType: 'json',
					timeout: 60000,
					success: function(response) {
						if(response.estado=='500'){
							notifytemplate('fa fa-times', response.msg, 'danger');
						}
						if(response.estado=='200'){
							notifytemplate('fa fa-check', 'Registro actualizado', 'success');
							jQuery(menuperfilmodal).modal('toggle');
						}
					}
				});
			}
		});
	/*******perfil*******/

	/*******usuario*******/
		var usuario= '#usuario';
		var usuarioform= '#usuario-form';
		var nuevausuario= '.nuevausuario';
		var editarusuario= '.editarusuario';
		var cambiaestado= '.cambiaestado';
		var cambiaestadousuario= '.cambiaestadousuario';
		var seleccionaregistrousuario= '.seleccionaregistrousuario';
		var ultimasusuarios= '#ultimasusuarios';
		var ultimasusuariostable = datatabletemplate(ultimasusuarios+' .table-lista');

		function actualizarultimasusuarios(html) {
			ultimasusuariostable.destroy();
			jQuery(ultimasusuarios+' .table-lista tbody').html(html);
			ultimasusuariostable = datatabletemplate(ultimasusuarios+' .table-lista');
		}

		var usuariovalidate = jQuery(usuarioform).validate({
			ignore: "",
			errorClass: 'help-block text-right animated fadeInDown',
			errorElement: 'div',
			errorPlacement: function(error, e) {

				jQuery(e).parents('.form-group > div').append(error);
			},
			highlight: function(e) {
				var elem = jQuery(e);
				elem.closest('.form-group').removeClass('has-error').addClass('has-error');
				elem.closest('.help-block').remove();
			},
			success: function(e) {
				var elem = jQuery(e);
				elem.closest('.form-group').removeClass('has-error');
				elem.closest('.help-block').remove();
			},
			rules: {
				'usuario': {
					required: true,
					minlength: 25,
					maxlength: 25
					
				}
			},

			rules: {
				'clave': {
					required: true,
					minlength: 8,
					maxlength: 25
					
				}
			},

			rules: {
				'telefono': {
					required: true,
					minlength: 7,
					maxlength: 9,
					digits: true
					
				}
			},
		
				submitHandler: function(form) {
				event.preventDefault();
				jQuery.ajax({
					url: form.action,
					type: form.method,
					data: $(form).serialize(),
					dataType: 'json',
					timeout: 60000,
					success: function(response) {
						console.log(response.estado); 
						if(response.estado=='500'){
							notifytemplate('fa fa-times', response.msg, 'danger');
						}
						if(response.estado=='200'){

							notifytemplate('fa fa-check', 'Registro correcto', 'success');
							reiniciarform(usuarioform,usuariovalidate,'gestiondeperfil/nuevoregistro','<i class="fa fa-plus push-5-r"></i> Registrar');
							jQuery(usuario).collapse('hide');

							actualizarultimasusuarios(response.registros);
							jQuery('#busquedas .tab-pane form').submit();
						}
						if(response.estado=='201'){
							notifytemplate('fa fa-check', 'Registro actualizado', 'success');
							reiniciarform(usuarioform,usuariovalidate,'gestiondeperfil/actualizarregistro','<i class="fa fa-edit push-5-r"></i> Editar');
							jQuery(usuario).collapse('hide');

							actualizarultimasusuarios(response.registros);
							jQuery('#busquedas .tab-pane form').submit();
						}
					}
				});
			}
		});

		jQuery('body').on('click', nuevausuario, function() {
			reiniciarform(usuarioform,usuariovalidate,'gestiondeperfil/nuevoregistro','<i class="fa fa-plus push-5-r"></i> Registrar');
			jQuery(usuarioform+' input[name="estado"]').val(1);
		});
		jQuery(usuario).on('shown.bs.collapse', function () {
			$('html, body').animate({
				scrollTop: $(usuario).offset().top - 90
			}, 500, function(){});
		});
		jQuery(usuario).on('hidden.bs.collapse', function () {
			$('html, body').animate({
				scrollTop: $('body').offset().top
			}, 500, function(){});
			jQuery(usuarioform+' input[name="id"]').val(null);
		});

		jQuery('body').on('click', editarusuario, function() {
			jQuery.ajax({
				type: "POST",
				url: base_url + "gestiondeperfil/detalleregistro",
				data: 'table=' + 'usuario' + '&id=' + jQuery(this).data('id'),
				dataType: 'json',
				timeout: 60000,
				success: function(response) {
					if(response.estado=='500'){
						notifytemplate('fa fa-times', response.msg, 'danger');
					}
					if(response.estado=='200'){
						reiniciarform(usuarioform,usuariovalidate,'gestiondeperfil/actualizarregistro','<i class="fa fa-plus push-5-r"></i> Editar');
						jQuery(usuarioform+' input[name="id"]').val(response.registro.id);
						jQuery(usuarioform+' input[name="usuario"]').val(response.registro.usuario);
						jQuery(usuarioform+' input[name="clave"]').val(response.registro.clave);
						jQuery(usuarioform+' input[name="nombres"]').val(response.registro.nombres);
						jQuery(usuarioform+' input[name="apellidos"]').val(response.registro.apellidos);
						jQuery(usuarioform+' input[name="email"]').val(response.registro.email);
						jQuery(usuarioform+' input[name="telefono"]').val(response.registro.telefono);
						jQuery(usuarioform+' select[name="perfil"]').val(response.registro.perfil);
						jQuery(usuarioform+' select[name="condicion"]').val(response.registro.condicion);
						jQuery(usuarioform+' select[name="estado"]').val(response.registro.estado);
											
						jQuery(usuario).collapse('show');

						$('html, body').animate({
							scrollTop: $(usuario).offset().top - 90
						}, 500, function(){});
					}
				}
			});
		});

		jQuery('body').on('click', cambiaestadousuario, function() {
			var elemento = jQuery(this);
			jQuery.confirm({
				icon: 'fa fa-warning',
				title: 'Confirmación',
				content: 'Se borrará el registro',
				type: 'blue',
				closeIcon: true,
				draggable: false,
				buttons: {
					cancel: {
						btnClass: 'btn-muted',
						text: 'Cancelar'
					},
					success: {
						btnClass: 'btn-green',
						text: 'Confimar',
						action: function(){
							jQuery.ajax({
								type: "POST",
								url: base_url + "gestiondeperfil/actualizarregistro",
								data: 'table=' + elemento.data('table') + '&id=' + elemento.data('id') + '&estado=' + elemento.data('estado'),
								dataType: 'json',
								timeout: 60000,
								success: function(response) {
									if(response.estado=='500'){
										notifytemplate('fa fa-times', response.msg, 'danger');
									}
									if(response.estado=='201'){
										actualizarultimasusuarios(response.registros);
										jQuery('#busquedas .tab-pane form').submit();
									}
								}
							});
						}
					}
				}
			});
		});

	/*******usuario*******/
/*******Gestion de perfil*******/

/*******Busqueda*******/
	var busqueda1= '#busqueda1';
	var busqueda2= '#busqueda2';
	var busqueda3= '#busqueda3';
	var busqueda4= '#busqueda4';
	var busquedaform1= '#busqueda1 form';
	var busquedaform2= '#busqueda2 form';
	var busquedaform3= '#busqueda3 form';
	var busquedaform4= '#busqueda4 form';
	var busquedatable1 = datatabletemplate(busqueda1+' .table-lista');
	var busquedatable2 = datatabletemplate(busqueda2+' .table-lista');
	var busquedatable3 = datatabletemplate(busqueda3+' .table-lista');
	var busquedatable4 = datatabletemplate2(busqueda4+' .table-lista',true,true);

	if ($.fn.DataTable.isDataTable(busqueda4+' .table-lista')) {
		var buttons = new $.fn.dataTable.Buttons(busquedatable4, {
			buttons: [
				{
					extend: 'copy',
					text: 'Copiar',
					exportOptions: {
						columns: ':not(:nth-child(2))',
					}
				},
				{
					extend: 'csv',
					title: reportetext,
					filename: reportetext,
					exportOptions: {
						columns: ':not(:nth-child(2))',
					}
				},
				{
					extend: 'excel',
					text: 'Excel',
					title: reportetext,
					filename: reportetext,
					exportOptions: {
						columns: ':not(:nth-child(2))',
					}
				}
			],
		}).container().appendTo($('#busqueda4buttons'));
	}

	var busquedavalidate1 = jQuery(busquedaform1).validate({
		ignore: "",
		errorClass: 'help-block text-right animated fadeInDown',
		errorElement: 'div',
		errorPlacement: function(error, e) {

			jQuery(e).parents('.form-group > div').append(error);
		},
		highlight: function(e) {
			var elem = jQuery(e);
			elem.closest('.form-group').removeClass('has-error').addClass('has-error');
			elem.closest('.help-block').remove();
		},
		success: function(e) {
			var elem = jQuery(e);
			elem.closest('.form-group').removeClass('has-error');
			elem.closest('.help-block').remove();
		},
		submitHandler: function(form) {
			
			jQuery.ajax({
				url: form.action,
				type: form.method,
				data: $(form).serialize(),
				dataType: 'json',
				timeout: 60000,
				success: function(response) {
					if(response.estado=='500'){
						notifytemplate('fa fa-times', response.msg, 'danger');
					}
					if(response.estado=='200'){
						busquedatable1.destroy();
						jQuery(busqueda1+' .table-lista tbody').html(response.registros);
						busquedatable1 = datatabletemplate(busqueda1+' .table-lista');
					}
				}
			});
		}
	});

	var busquedavalidate2 = jQuery(busquedaform2).validate({
		ignore: "",
		errorClass: 'help-block text-right animated fadeInDown',
		errorElement: 'div',
		errorPlacement: function(error, e) {

			jQuery(e).parents('.form-group > div').append(error);
		},
		highlight: function(e) {
			var elem = jQuery(e);
			elem.closest('.form-group').removeClass('has-error').addClass('has-error');
			elem.closest('.help-block').remove();
		},
		success: function(e) {
			var elem = jQuery(e);
			elem.closest('.form-group').removeClass('has-error');
			elem.closest('.help-block').remove();
		},
		submitHandler: function(form) {
			
			jQuery.ajax({
				url: form.action,
				type: form.method,
				data: $(form).serialize(),
				dataType: 'json',
				timeout: 60000,
				success: function(response) {
					if(response.estado=='500'){
						notifytemplate('fa fa-times', response.msg, 'danger');
					}
					if(response.estado=='200'){
						busquedatable2.destroy();
						jQuery(busqueda2+' .table-lista tbody').html(response.registros);
						busquedatable2 = datatabletemplate(busqueda2+' .table-lista');
					}
				}
			});
		}
	});

	var busquedavalidate3 = jQuery(busquedaform3).validate({
		ignore: "",
		errorClass: 'help-block text-right animated fadeInDown',
		errorElement: 'div',
		errorPlacement: function(error, e) {

			jQuery(e).parents('.form-group > div').append(error);
		},
		highlight: function(e) {
			var elem = jQuery(e);
			elem.closest('.form-group').removeClass('has-error').addClass('has-error');
			elem.closest('.help-block').remove();
		},
		success: function(e) {
			var elem = jQuery(e);
			elem.closest('.form-group').removeClass('has-error');
			elem.closest('.help-block').remove();
		},
		submitHandler: function(form) {
			
			jQuery.ajax({
				url: form.action,
				type: form.method,
				data: $(form).serialize(),
				dataType: 'json',
				timeout: 60000,
				success: function(response) {
					if(response.estado=='500'){
						notifytemplate('fa fa-times', response.msg, 'danger');
					}
					if(response.estado=='200'){
						busquedatable3.destroy();
						jQuery(busqueda3+' .table-lista tbody').html(response.registros);
						busquedatable3 = datatabletemplate(busqueda3+' .table-lista');
					}
				}
			});
		}
	});

	var busquedavalidate4 = jQuery(busquedaform4).validate({
		ignore: "",
		errorClass: 'help-block text-right animated fadeInDown',
		errorElement: 'div',
		errorPlacement: function(error, e) {

			jQuery(e).parents('.form-group > div').append(error);
		},
		highlight: function(e) {
			var elem = jQuery(e);
			elem.closest('.form-group').removeClass('has-error').addClass('has-error');
			elem.closest('.help-block').remove();
		},
		success: function(e) {
			var elem = jQuery(e);
			elem.closest('.form-group').removeClass('has-error');
			elem.closest('.help-block').remove();
		},
		submitHandler: function(form) {
			
			jQuery.ajax({
				url: form.action,
				type: form.method,
				data: $(form).serialize(),
				dataType: 'json',
				timeout: 60000,
				success: function(response) {
					if(response.estado=='500'){
						notifytemplate('fa fa-times', response.msg, 'danger');
					}
					if(response.estado=='200'){
						busquedatable4.destroy();
						jQuery(busqueda4+' .table-lista tbody').html(response.registros);
						busquedatable4 = datatabletemplate(busqueda4+' .table-lista');
						if ($.fn.DataTable.isDataTable(busqueda4+' .table-lista')) {
							var buttons = new $.fn.dataTable.Buttons(busquedatable4, {
								buttons: [
									{
										extend: 'copy',
										text: 'Copiar',
										exportOptions: {
											columns: ':not(:nth-child(2))',
										}
									},
									{
										extend: 'csv',
										title: reportetext,
										filename: reportetext,
										exportOptions: {
											columns: ':not(:nth-child(2))',
										}
									},
									{
										extend: 'excel',
										text: 'Excel',
										title: reportetext,
										filename: reportetext,
										exportOptions: {
											columns: ':not(:nth-child(2))',
										}
									}
								],
							}).container().appendTo($('#busqueda4buttons'));
						}
					}
				}
			});
		}
	});
/*******Busqueda*******/

/*******Personal*******/
	var personal= '#personal';
	var personalform= '#personal-form';
	var nuevapersonal= '.nuevapersonal';
	var editarpersonal= '.editarpersonal';
	var cambiaestado= '.cambiaestado';
	var cambiaestadopersonal= '.cambiaestadopersonal';
	var ultimaspersonals= '#ultimaspersonals';
	var ultimaspersonalstable = datatabletemplate(ultimaspersonals+' .table-lista');
	var ordenserviciomodal= '#ordenservicio-modal';
	var ordenservicioform= '#ordenservicio-modal';

	function actualizarultimaspersonals(html) {
		ultimaspersonalstable.destroy();
		jQuery(ultimaspersonals+' .table-lista tbody').html(html);
		ultimaspersonalstable = datatabletemplate(ultimaspersonals+' .table-lista');
	}

	var personalvalidate = jQuery(personalform).validate({
		ignore: "",
		errorClass: 'help-block text-right animated fadeInDown',
		errorElement: 'div',
		errorPlacement: function(error, e) {

			jQuery(e).parents('.form-group > div').append(error);
		},
		highlight: function(e) {
			var elem = jQuery(e);
			elem.closest('.form-group').removeClass('has-error').addClass('has-error');
			elem.closest('.help-block').remove();
		},
		success: function(e) {
			var elem = jQuery(e);
			elem.closest('.form-group').removeClass('has-error');
			elem.closest('.help-block').remove();
		},
		submitHandler: function(form) {			
			jQuery.ajax({
				url: form.action,
				type: form.method,
				data: $(form).serialize(),
				dataType: 'json',
				timeout: 60000,
				success: function(response) {
					if(response.estado=='500'){
						notifytemplate('fa fa-times', response.msg, 'danger');
					}
					if(response.estado=='200'){
						notifytemplate('fa fa-check', 'Registro correcto', 'success');
						reiniciarform(personalform,personalvalidate,'general/nuevoregistro','<i class="fa fa-plus push-5-r"></i> Registrar');
						jQuery(personal).collapse('hide');

						actualizarultimaspersonals(response.registros);
						jQuery('#busquedas .tab-pane form').submit();
					}
					if(response.estado=='201'){
						notifytemplate('fa fa-check', 'Registro actualizado', 'success');
						reiniciarform(personalform,personalvalidate,'general/actualizarregistro','<i class="fa fa-edit push-5-r"></i> Guardar');
						jQuery(personal).collapse('hide');

						actualizarultimaspersonals(response.registros);
						jQuery('#busquedas .tab-pane form').submit();
					}
				}
			});
		}
	});

	jQuery('body').on('click', nuevapersonal, function() {
		reiniciarform(personalform,personalvalidate,'general/nuevoregistro','<i class="fa fa-plus push-5-r"></i> Registrar');
		jQuery(personalform+' input[name="estado"]').val(1);
		jQuery(personalform+' select[name="tipopersonal"]').trigger('change');
	});
	jQuery(personal).on('shown.bs.collapse', function () {
		$('html, body').animate({
			scrollTop: $(personal).offset().top - 90
		}, 500, function(){});
	});
	jQuery(personal).on('hidden.bs.collapse', function () {
		$('html, body').animate({
			scrollTop: $('body').offset().top
		}, 500, function(){});
		jQuery(personalform+' input[name="id"]').val(null);
	});

	jQuery('body').on('click', editarpersonal, function() {
		jQuery.ajax({
			type: "POST",
			url: base_url + "general/detalleregistro",
			data: 'table=' + 'personal' + '&id=' + jQuery(this).data('id'),
			dataType: 'json',
			timeout: 60000,
			success: function(response) {
				if(response.estado=='500'){
					notifytemplate('fa fa-times', response.msg, 'danger');
				}
				if(response.estado=='200'){
					reiniciarform(personalform,personalvalidate,'general/actualizarregistro','<i class="fa fa-plus push-5-r"></i> Guardar');
					jQuery(personalform+' input[name="id"]').val(response.registro.id);
					jQuery(personalform+' input[name="nombres"]').val(response.registro.nombres);
					jQuery(personalform+' input[name="apellidop"]').val(response.registro.apellidop);
					jQuery(personalform+' input[name="apellidom"]').val(response.registro.apellidom);
					jQuery(personalform+' input[name="codigo"]').val(response.registro.codigo);
					jQuery(personalform+' select[name="tipodoc"]').val(response.registro.tipodoc);
					jQuery(personalform+' input[name="doc"]').val(response.registro.doc);
					jQuery(personalform+' input[name="celular"]').val(response.registro.celular);
					jQuery(personalform+' input[name="correo"]').val(response.registro.correo);
					jQuery(personalform+' input[name="estado"]').val(response.registro.estado);
					jQuery(personalform+' select[name="tipopersonal"]').val(response.registro.tipopersonal).trigger('change');
					jQuery(personalform+' select[name="grado"]').val(response.registro.grado);

					jQuery(personal).collapse('show');

					$('html, body').animate({
						scrollTop: $(personal).offset().top - 90
					}, 500, function(){});
				}
			}
		});
	});

	jQuery('body').on('click', cambiaestadopersonal, function() {
		var elemento = jQuery(this);
		jQuery.confirm({
			icon: 'fa fa-warning',
			title: 'Confirmación',
			content: 'Se borrará el registro',
			type: 'blue',
			closeIcon: true,
			draggable: false,
			buttons: {
				cancel: {
					btnClass: 'btn-muted',
					text: 'Cancelar'
				},
				success: {
					btnClass: 'btn-green',
					text: 'Confimar',
					action: function(){
						jQuery.ajax({
							type: "POST",
							url: base_url + "general/actualizarregistro",
							data: 'table=' + elemento.data('table') + '&id=' + elemento.data('id') + '&estado=' + elemento.data('estado'),
							dataType: 'json',
							timeout: 60000,
							success: function(response) {
								if(response.estado=='500'){
									notifytemplate('fa fa-times', response.msg, 'danger');
								}
								if(response.estado=='201'){
									notifytemplate('fa fa-check', 'Registro eliminado', 'success');
									actualizarultimaspersonals(response.registros);
									jQuery('#busquedas .tab-pane form').submit();
								}
							}
						});
					}
				}
			}
		});
	});

	jQuery(personalform+' select[name="tipopersonal"]').on('change', function () {
		var elemento = jQuery(this);
		var html ='';
		switch (elemento.val()) {
			case '2':
				html = '	<div class="form-group">'+
							'		<div class="col-xs-12">'+
							'			<label>Grado</label>'+
							'			<select class="form-control required" name="grado" style="width: 100%;">'+
							'				<option value="">Seleccione</option>'+
							'				<option value="Dr.">Doctor</option>'+
							'				<option value="Dra.">Doctora</option>'+
							'				<option value="Mg.">Magister</option>'+
							'			</select>'+
							'		</div>'+
							'	</div>';
				break;		
			default:
				html ='';
				break;
		}
		jQuery(personalform+' .tipopersonalcont').html(html);
	});
/*******Personal*******/

/*******Tesis*******/
	var tesis= '#tesis';
	var tesisform= '#tesis-form';
	var nuevatesis= '.nuevatesis';
	var editartesis= '.editartesis';
	var cambiaestado= '.cambiaestado';
	var cambiaestadotesis= '.cambiaestadotesis';
	var ultimastesiss= '#ultimastesiss';
	var ultimastesisstable = datatabletemplate(ultimastesiss+' .table-lista');

	function actualizarultimastesiss(html) {
		ultimastesisstable.destroy();
		jQuery(ultimastesiss+' .table-lista tbody').html(html);
		ultimastesisstable = datatabletemplate(ultimastesiss+' .table-lista');

		if ($.fn.DataTable.isDataTable(ultimastesiss+' .table-lista')) {
			var buttons = new $.fn.dataTable.Buttons(ultimastesisstable, {
				buttons: [
					{
						extend: 'excel',
						text: 'Exportar a Excel',
						title: reportetext,
						filename: reportetext
					}
				],
			}).container().appendTo($('#contenedorbuttons'));
		}
	}

	var tesisvalidate = jQuery(tesisform).validate({
		ignore: "",
		errorClass: 'help-block text-right animated fadeInDown',
		errorElement: 'div',
		errorPlacement: function(error, e) {

			jQuery(e).parents('.form-group > div').append(error);
		},
		highlight: function(e) {
			var elem = jQuery(e);
			elem.closest('.form-group').removeClass('has-error').addClass('has-error');
			elem.closest('.help-block').remove();
		},
		success: function(e) {
			var elem = jQuery(e);
			elem.closest('.form-group').removeClass('has-error');
			elem.closest('.help-block').remove();
		},
		submitHandler: function(form) {			
			jQuery.ajax({
				url: form.action,
				type: form.method,
				data: $(form).serialize(),
				dataType: 'json',
				timeout: 60000,
				success: function(response) {
					if(response.estado=='500'){
						notifytemplate('fa fa-times', response.msg, 'danger');
					}
					if(response.estado=='200'){
						notifytemplate('fa fa-check', 'Registro correcto', 'success');
						reiniciarform(tesisform,tesisvalidate,'general/nuevoregistro','<i class="fa fa-plus push-5-r"></i> Registrar');
						jQuery(tesis).collapse('hide');

						actualizarultimastesiss(response.registros);
						jQuery('#busquedas .tab-pane form').submit();
					}
					if(response.estado=='201'){
						notifytemplate('fa fa-check', 'Registro actualizado', 'success');
						reiniciarform(tesisform,tesisvalidate,'general/actualizarregistro','<i class="fa fa-edit push-5-r"></i> Guardar');
						jQuery(tesis).collapse('hide');

						actualizarultimastesiss(response.registros);
						jQuery('#busquedas .tab-pane form').submit();
					}
				}
			});
		}
	});

	jQuery('body').on('click', nuevatesis, function() {
		reiniciarform(tesisform,tesisvalidate,'general/nuevoregistro','<i class="fa fa-plus push-5-r"></i> Registrar');
		jQuery(tesisform+' .select2').val('').trigger('change');
		jQuery(tesisform+' input[name="estado"]').val(1);
	});
	jQuery(tesis).on('shown.bs.collapse', function () {
		$('html, body').animate({
			scrollTop: $(tesis).offset().top - 90
		}, 500, function(){});
	});
	jQuery(tesis).on('hidden.bs.collapse', function () {
		$('html, body').animate({
			scrollTop: $('body').offset().top
		}, 500, function(){});
		jQuery(tesisform+' input[name="id"]').val(null);
	});

	jQuery('body').on('click', editartesis, function() {
		jQuery.ajax({
			type: "POST",
			url: base_url + "general/detalleregistro",
			data: 'table=' + 'tesis' + '&id=' + jQuery(this).data('id'),
			dataType: 'json',
			timeout: 60000,
			success: function(response) {
				if(response.estado=='500'){
					notifytemplate('fa fa-times', response.msg, 'danger');
				}
				if(response.estado=='200'){
					reiniciarform(tesisform,tesisvalidate,'general/actualizarregistro','<i class="fa fa-plus push-5-r"></i> Guardar');
					jQuery(tesisform+' input[name="id"]').val(response.registro.id);
					jQuery(tesisform+' select[name="consulta"]').val(response.registro.alumno).trigger('change');
					jQuery(tesisform+' input[name="inscripcion"]').val(response.registro.inscripcion);
					jQuery(tesisform+' input[name="fechainscripcion"]').val(response.registro.fechainscripcion);
					jQuery(tesisform+' input[name="expedito"]').val(response.registro.expedito);
					jQuery(tesisform+' input[name="fechaexpedito"]').val(response.registro.fechaexpedito);
					jQuery(tesisform+' input[name="titulo"]').val(response.registro.titulo);
					jQuery(tesisform+' select[name="asesor"]').val(response.registro.asesor).trigger('change');
					jQuery(tesisform+' input[name="estado"]').val(response.registro.estado);

					jQuery(tesis).collapse('show');

					$('html, body').animate({
						scrollTop: $(tesis).offset().top - 90
					}, 500, function(){});
				}
			}
		});
	});

	jQuery('body').on('click', cambiaestadotesis, function() {
		var elemento = jQuery(this);
		jQuery.confirm({
			icon: 'fa fa-warning',
			title: 'Confirmación',
			content: 'Se borrará el registro',
			type: 'blue',
			closeIcon: true,
			draggable: false,
			buttons: {
				cancel: {
					btnClass: 'btn-muted',
					text: 'Cancelar'
				},
				success: {
					btnClass: 'btn-green',
					text: 'Confimar',
					action: function(){
						jQuery.ajax({
							type: "POST",
							url: base_url + "general/actualizarregistro",
							data: 'table=' + elemento.data('table') + '&id=' + elemento.data('id') + '&estado=' + elemento.data('estado'),
							dataType: 'json',
							timeout: 60000,
							success: function(response) {
								if(response.estado=='500'){
									notifytemplate('fa fa-times', response.msg, 'danger');
								}
								if(response.estado=='201'){
									notifytemplate('fa fa-check', 'Registro eliminado', 'success');
									actualizarultimastesiss(response.registros);
									jQuery('#busquedas .tab-pane form').submit();
								}
							}
						});
					}
				}
			}
		});
	});

	/*jQuery(tesisform+' select[name="consulta"]').on('change', function () {
		var elemento = jQuery(this);
		if(elemento.val()!=''){
			elemento.valid();
			jQuery.ajax({
				type: "POST",
				url: base_url + "general/detalleregistro",
				data: 'table=personal&id=' + elemento.val(),
				dataType: 'json',
				timeout: 60000,
				success: function(response) {
					if(response.estado=='500'){
						notifytemplate('fa fa-times', response.msg, 'danger');
					}
					if(response.estado=='200'){
						jQuery(tesisform+' input[name="alumno"]').val(response.registro.id);
						jQuery(tesisform+' input[name="codigo"]').val(response.registro.codigo);
						jQuery(tesisform+' input[name="nombres"]').val(response.registro.nombres+' '+response.registro.apellidop+' '+response.registro.apellidom);
					}
				}
			});
		}else{
			jQuery(tesisform+' input[name="alumno"]').val(null);
			jQuery(tesisform+' input[name="codigo"]').val(null);
			jQuery(tesisform+' input[name="nombres"]').val(null);
		}
	});*/

	jQuery(tesisform+' .consultacodigo').on('click', function () {
		var consulta = jQuery(tesisform+' input[name="consulta"]').val();
		if(consulta!=''){
			jQuery.ajax({
				type: "POST",
				url: base_url + "general/detalleregistro",
				data: 'table=alumno&id=' + consulta,
				dataType: 'json',
				timeout: 60000,
				success: function(response) {
					if(response.estado=='500'){
						notifytemplate('fa fa-times', response.msg, 'danger');
						jQuery(tesisform+' input[name="alumno"]').val(null);
						jQuery(tesisform+' input[name="codigo"]').val(null);
						jQuery(tesisform+' input[name="nombres"]').val(null);
					}
					if(response.estado=='200'){
						jQuery(tesisform+' input[name="alumno"]').val(response.registro.id_alum);
						jQuery(tesisform+' input[name="codigo"]').val(response.registro.codigo);
						jQuery(tesisform+' input[name="nombres"]').val(response.registro.ape_nom);
						jQuery(tesisform+' input[name="alumno"]').valid();
					}
				}
			});
		}else{
			jQuery(tesisform+' input[name="alumno"]').val(null);
			jQuery(tesisform+' input[name="codigo"]').val(null);
			jQuery(tesisform+' input[name="nombres"]').val(null);
		}
	});

	jQuery(tesisform+' select[name="asesor"]').on('change', function () {
		var elemento = jQuery(this);
		if(elemento.val()!=''){
			elemento.valid();
		}		
	});

	/*******Completar*******/
		var completarmodal= '#completar-modal';
		var completarform= '#completar-form';
		var completartesis= '.completartesis';

		jQuery('body').on('click', completartesis, function() {
			jQuery.ajax({
				type: "POST",
				url: base_url + "general/detalleregistro",
				data: 'table=' + 'tesis' + '&id=' + jQuery(this).data('id'),
				dataType: 'json',
				timeout: 60000,
				success: function(response) {
					if(response.estado=='500'){
						notifytemplate('fa fa-times', response.msg, 'danger');
					}
					if(response.estado=='200'){
						reiniciarform(completarform,completarvalidate,'general/actualizarregistro','<i class="fa fa-plus push-5-r"></i> Guardar');
						jQuery(completarform+' input[name="id"]').val(response.registro.id);
						jQuery(completarform+' input[name="alumno"]').val(response.registro.alumno);
						jQuery(completarform+' input[name="codigo"]').val(response.registro.codigo);
						jQuery(completarform+' input[name="nombres"]').val(response.registro.ape_nom);
						jQuery(completarform+' select[name="asesor"]').val('').trigger('change');
						jQuery(completarform+' input[name="estado"]').val(2);

						jQuery(completarmodal).modal('toggle');
					}
				}
			});
		});

		var completarvalidate = jQuery(completarform).validate({
			ignore: "",
			errorClass: 'help-block text-right animated fadeInDown',
			errorElement: 'div',
			errorPlacement: function(error, e) {

				jQuery(e).parents('.form-group > div').append(error);
			},
			highlight: function(e) {
				var elem = jQuery(e);
				elem.closest('.form-group').removeClass('has-error').addClass('has-error');
				elem.closest('.help-block').remove();
			},
			success: function(e) {
				var elem = jQuery(e);
				elem.closest('.form-group').removeClass('has-error');
				elem.closest('.help-block').remove();
			},
			submitHandler: function(form) {			
				jQuery.ajax({
					url: form.action,
					type: form.method,
					data: $(form).serialize(),
					dataType: 'json',
					timeout: 60000,
					success: function(response) {
						if(response.estado=='500'){
							notifytemplate('fa fa-times', response.msg, 'danger');
						}
						if(response.estado=='201'){
							notifytemplate('fa fa-check', 'Registro actualizado', 'success');
							reiniciarform(completarform,completarvalidate,'general/actualizarregistro','<i class="fa fa-edit push-5-r"></i> Guardar');
							jQuery(completarmodal).modal('toggle');

							actualizarultimastesiss(response.registros);
							jQuery('#busquedas .tab-pane form').submit();
						}
					}
				});
			}
		});
	/*******Completar*******/

	/*******Expedito*******/
		var expeditomodal= '#expedito-modal';
		var expeditoform= '#expedito-form';
		var expeditotesis= '.expeditotesis';

		jQuery('body').on('click', expeditotesis, function() {
			jQuery.ajax({
				type: "POST",
				url: base_url + "general/detalleregistro",
				data: 'table=' + 'tesis' + '&id=' + jQuery(this).data('id'),
				dataType: 'json',
				timeout: 60000,
				success: function(response) {
					if(response.estado=='500'){
						notifytemplate('fa fa-times', response.msg, 'danger');
					}
					if(response.estado=='200'){
						reiniciarform(expeditoform,expeditovalidate,'general/actualizarregistro','<i class="fa fa-plus push-5-r"></i> Guardar');
						jQuery(expeditoform+' input[name="id"]').val(response.registro.id);
						jQuery(expeditoform+' input[name="alumno"]').val(response.registro.alumno);
						jQuery(expeditoform+' input[name="codigo"]').val(response.registro.codigo);
						jQuery(expeditoform+' input[name="nombres"]').val(response.registro.ape_nom);
						jQuery(expeditoform+' input[name="estado"]').val(3);

						jQuery(expeditomodal).modal('toggle');
					}
				}
			});
		});

		var expeditovalidate = jQuery(expeditoform).validate({
			ignore: "",
			errorClass: 'help-block text-right animated fadeInDown',
			errorElement: 'div',
			errorPlacement: function(error, e) {

				jQuery(e).parents('.form-group > div').append(error);
			},
			highlight: function(e) {
				var elem = jQuery(e);
				elem.closest('.form-group').removeClass('has-error').addClass('has-error');
				elem.closest('.help-block').remove();
			},
			success: function(e) {
				var elem = jQuery(e);
				elem.closest('.form-group').removeClass('has-error');
				elem.closest('.help-block').remove();
			},
			submitHandler: function(form) {			
				var data =new FormData(form);
				jQuery.ajax({
					url: form.action,
					type: form.method,
					data: data,
					contentType: false,
					cache: false,
					processData:false,
					dataType: 'json',
					timeout: 300000,
					success: function(response) {
						if(response.estado=='500'){
							notifytemplate('fa fa-times', response.msg, 'danger');
						}
						if(response.estado=='201'){
							notifytemplate('fa fa-check', 'Registro actualizado', 'success');
							reiniciarform(expeditoform,expeditovalidate,'general/actualizarregistro','<i class="fa fa-edit push-5-r"></i> Guardar');
							jQuery(expeditomodal).modal('toggle');

							actualizarultimastesiss(response.registros);
							jQuery('#busquedas .tab-pane form').submit();
						}
					}
				});
			}
		});
	/*******Expedito*******/

	/*******Jurado*******/
		var juradomodal= '#jurado-modal';
		var juradoform= '#jurado-form';
		var juradotesis= '.juradotesis';

		jQuery(juradoform+' select[name="juradosel[]"]').select2({
			maximumSelectionLength: 4
		});

		jQuery('body').on('click', juradotesis, function() {
			jQuery.ajax({
				type: "POST",
				url: base_url + "general/detalleregistro",
				data: 'table=' + 'tesis' + '&id=' + jQuery(this).data('id'),
				dataType: 'json',
				timeout: 60000,
				success: function(response) {
					if(response.estado=='500'){
						notifytemplate('fa fa-times', response.msg, 'danger');
					}
					if(response.estado=='200'){
						reiniciarform(juradoform,juradovalidate,'general/actualizarregistro','<i class="fa fa-plus push-5-r"></i> Guardar');
						jQuery(juradoform+' input[name="id"]').val(response.registro.id);
						jQuery(juradoform+' input[name="alumno"]').val(response.registro.alumno);
						jQuery(juradoform+' input[name="codigo"]').val(response.registro.codigo);
						jQuery(juradoform+' input[name="nombres"]').val(response.registro.ape_nom);
						jQuery(juradoform+' select[name="juradosel[]"]').val([]).trigger('change');
						jQuery(juradoform+' input[name="estado"]').val(4);

						jQuery(juradomodal).modal('toggle');
					}
				}
			});
		});

		var juradovalidate = jQuery(juradoform).validate({
			ignore: "",
			errorClass: 'help-block text-right animated fadeInDown',
			errorElement: 'div',
			errorPlacement: function(error, e) {

				jQuery(e).parents('.form-group > div').append(error);
			},
			highlight: function(e) {
				var elem = jQuery(e);
				elem.closest('.form-group').removeClass('has-error').addClass('has-error');
				elem.closest('.help-block').remove();
			},
			success: function(e) {
				var elem = jQuery(e);
				elem.closest('.form-group').removeClass('has-error');
				elem.closest('.help-block').remove();
			},
			submitHandler: function(form) {			
				jQuery.ajax({
					url: form.action,
					type: form.method,
					data: $(form).serialize(),
					dataType: 'json',
					timeout: 60000,
					success: function(response) {
						if(response.estado=='500'){
							notifytemplate('fa fa-times', response.msg, 'danger');
						}
						if(response.estado=='201'){
							notifytemplate('fa fa-check', 'Registro actualizado', 'success');
							reiniciarform(juradoform,juradovalidate,'general/actualizarregistro','<i class="fa fa-edit push-5-r"></i> Guardar');
							jQuery(juradomodal).modal('toggle');

							actualizarultimastesiss(response.registros);
							jQuery('#busquedas .tab-pane form').submit();
						}
					}
				});
			}
		});
	/*******Jurado*******/

	/*******Sustentacion*******/
		var sustentacionmodal= '#sustentacion-modal';
		var sustentacionform= '#sustentacion-form';
		var sustentaciontesis= '.sustentaciontesis';

		jQuery('body').on('click', sustentaciontesis, function() {
			jQuery.ajax({
				type: "POST",
				url: base_url + "general/detalleregistro",
				data: 'table=' + 'tesis' + '&id=' + jQuery(this).data('id'),
				dataType: 'json',
				timeout: 60000,
				success: function(response) {
					if(response.estado=='500'){
						notifytemplate('fa fa-times', response.msg, 'danger');
					}
					if(response.estado=='200'){
						reiniciarform(sustentacionform,sustentacionvalidate,'general/actualizarregistro','<i class="fa fa-plus push-5-r"></i> Guardar');
						jQuery(sustentacionform+' input[name="id"]').val(response.registro.id);
						jQuery(sustentacionform+' input[name="alumno"]').val(response.registro.alumno);
						jQuery(sustentacionform+' input[name="codigo"]').val(response.registro.codigo);
						jQuery(sustentacionform+' input[name="nombres"]').val(response.registro.ape_nom);
						jQuery(sustentacionform+' input[name="estado"]').val(5);

						jQuery(sustentacionmodal).modal('toggle');
					}
				}
			});
		});

		var sustentacionvalidate = jQuery(sustentacionform).validate({
			ignore: "",
			errorClass: 'help-block text-right animated fadeInDown',
			errorElement: 'div',
			errorPlacement: function(error, e) {

				jQuery(e).parents('.form-group > div').append(error);
			},
			highlight: function(e) {
				var elem = jQuery(e);
				elem.closest('.form-group').removeClass('has-error').addClass('has-error');
				elem.closest('.help-block').remove();
			},
			success: function(e) {
				var elem = jQuery(e);
				elem.closest('.form-group').removeClass('has-error');
				elem.closest('.help-block').remove();
			},
			submitHandler: function(form) {			
				jQuery.ajax({
					url: form.action,
					type: form.method,
					data: $(form).serialize(),
					dataType: 'json',
					timeout: 60000,
					success: function(response) {
						if(response.estado=='500'){
							notifytemplate('fa fa-times', response.msg, 'danger');
						}
						if(response.estado=='201'){
							notifytemplate('fa fa-check', 'Registro actualizado', 'success');
							reiniciarform(sustentacionform,sustentacionvalidate,'general/actualizarregistro','<i class="fa fa-edit push-5-r"></i> Guardar');
							jQuery(sustentacionmodal).modal('toggle');

							actualizarultimastesiss(response.registros);
							jQuery('#busquedas .tab-pane form').submit();
						}
					}
				});
			}
		});
	/*******Sustentacion*******/
	
	/*******Cerrar*******/
		var cerrarmodal= '#cerrar-modal';
		var cerrarform= '#cerrar-form';
		var cerrartesis= '.cerrartesis';

		jQuery('body').on('click', cerrartesis, function() {
			jQuery.ajax({
				type: "POST",
				url: base_url + "general/detalleregistro",
				data: 'table=' + 'tesis' + '&id=' + jQuery(this).data('id'),
				dataType: 'json',
				timeout: 60000,
				success: function(response) {
					if(response.estado=='500'){
						notifytemplate('fa fa-times', response.msg, 'danger');
					}
					if(response.estado=='200'){
						reiniciarform(cerrarform,cerrarvalidate,'general/actualizarregistro','<i class="fa fa-plus push-5-r"></i> Guardar');
						jQuery(cerrarform+' input[name="id"]').val(response.registro.id);
						jQuery(cerrarform+' input[name="alumno"]').val(response.registro.alumno);
						jQuery(cerrarform+' input[name="codigo"]').val(response.registro.codigo);
						jQuery(cerrarform+' input[name="nombres"]').val(response.registro.ape_nom);
						jQuery(cerrarform+' input[name="estado"]').val(6);

						jQuery(cerrarmodal).modal('toggle');
					}
				}
			});
		});

		var cerrarvalidate = jQuery(cerrarform).validate({
			ignore: "",
			errorClass: 'help-block text-right animated fadeInDown',
			errorElement: 'div',
			errorPlacement: function(error, e) {

				jQuery(e).parents('.form-group > div').append(error);
			},
			highlight: function(e) {
				var elem = jQuery(e);
				elem.closest('.form-group').removeClass('has-error').addClass('has-error');
				elem.closest('.help-block').remove();
			},
			success: function(e) {
				var elem = jQuery(e);
				elem.closest('.form-group').removeClass('has-error');
				elem.closest('.help-block').remove();
			},
			submitHandler: function(form) {			
				var data =new FormData(form);
				jQuery.ajax({
					url: form.action,
					type: form.method,
					data: data,
					contentType: false,
					cache: false,
					processData:false,
					dataType: 'json',
					timeout: 300000,
					success: function(response) {
						if(response.estado=='500'){
							notifytemplate('fa fa-times', response.msg, 'danger');
						}
						if(response.estado=='201'){
							notifytemplate('fa fa-check', 'Registro actualizado', 'success');
							reiniciarform(cerrarform,cerrarvalidate,'general/actualizarregistro','<i class="fa fa-edit push-5-r"></i> Guardar');
							jQuery(cerrarmodal).modal('toggle');

							actualizarultimastesiss(response.registros);
							jQuery('#busquedas .tab-pane form').submit();
						}
					}
				});
			}
		});
	/*******Cerrar*******/

/*******Tesis*******/

/*******Asesor*******/
	var asesormodal= '#asesor-modal';
	var asesorform= '#asesor-form';
	var nuevoasesor= '.nuevoasesor';

	jQuery('body').on('click', nuevoasesor, function() {
		reiniciarform(asesorform,asesorvalidate,'general/nuevoregistro','<i class="fa fa-plus push-5-r"></i> Registrar');
		jQuery(asesorform+' select[name="docente"]').val('').trigger('change');

		jQuery(asesormodal).modal('toggle');
	});

	var asesorvalidate = jQuery(asesorform).validate({
		ignore: "",
		errorClass: 'help-block text-right animated fadeInDown',
		errorElement: 'div',
		errorPlacement: function(error, e) {

			jQuery(e).parents('.form-group > div').append(error);
		},
		highlight: function(e) {
			var elem = jQuery(e);
			elem.closest('.form-group').removeClass('has-error').addClass('has-error');
			elem.closest('.help-block').remove();
		},
		success: function(e) {
			var elem = jQuery(e);
			elem.closest('.form-group').removeClass('has-error');
			elem.closest('.help-block').remove();
		},
		submitHandler: function(form) {			
			jQuery.ajax({
				url: form.action,
				type: form.method,
				data: $(form).serialize(),
				dataType: 'json',
				timeout: 60000,
				success: function(response) {
					if(response.estado=='500'){
						notifytemplate('fa fa-times', response.msg, 'danger');
					}
					if(response.estado=='200'){
						notifytemplate('fa fa-check', 'Registro correcto', 'success');
						jQuery(completarform+' select[name="asesor"]').html(response.registroslista).val('').trigger('change');
						jQuery(asesormodal).modal('toggle');
					}
				}
			});
		}
	});
/*******Asesor*******/

});