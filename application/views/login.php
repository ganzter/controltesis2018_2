<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">

		<title>Sistema</title>

		<meta name="description" content="Admin Dashboard">
		<meta name="author" content="">
		<meta name="robots" content="noindex, nofollow">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

		<link rel="shortcut icon" href="<?php echo base_url();?>public/img/recursos/favicon.png">

		<link rel="stylesheet" href="<?php echo base_url();?>/public/css/bootstrap.min.css">
		<link rel="stylesheet" id="css-main" href="<?php echo base_url();?>/public/css/oneui.css">
		<link rel="stylesheet" id="css-main" href="<?php echo base_url();?>/public/css/custom.css">

	</head>
	<body>
		<div class="content overflow-hidden">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
					<div class="block block-themed animated fadeIn">
						<div class="block-header bg-primary">
							<ul class="block-options">
							</ul>
							<h3 class="block-title">Ingreso al Sistema</h3>
						</div>
						<div class="block-content block-content-full block-content-narrow" style="text-align: center;">
							<img src="<?php echo base_url();?>public/img/recursos/logo2.png" style="max-width: 50%;">
							<h1 class="h2 font-w600 push-30-t push-5 text-logo"><b>CONTROL DE TESIS</b></h1>

							<form class="js-form-login form-horizontal push-30-t push-50" action="<?php echo base_url();?>inicio/comprobar" method="post">
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<div class="form-group text-left">
											<div class="col-xs-12">
												<label>Usuario</label>
												<div class="input-group">
													<input class="form-control required textoinput" type="text" name="username">
													<span class="input-group-addon"><i class="si si-user"></i></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<div class="form-group text-left">
											<div class="col-xs-12">
												<label>Contraseña</label>
												<div class="input-group">
													<input class="form-control required textoinput" type="password" name="password">
													<span class="input-group-addon"><i class="si si-key"></i></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-xs-12 col-xs-offset-0 col-sm-6 col-sm-offset-3">
										<button class="btn btn-block btn-primary" type="submit"><i class="si si-login pull-right"></i> Ingresar </button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="push-10-t text-center">
			<small class="text-muted font-w600">Versión <a class="font-w600">1.1</a></a> <span> | <?php echo date('Y');?></span></small>
		</div>

		<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
		<script src="<?php echo base_url();?>public/js/core/jquery.min.js"></script>
		<script src="<?php echo base_url();?>public/js/core/bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>public/js/core/jquery.slimscroll.min.js"></script>
		<script src="<?php echo base_url();?>public/js/core/jquery.scrollLock.min.js"></script>
		<script src="<?php echo base_url();?>public/js/core/jquery.appear.min.js"></script>
		<script src="<?php echo base_url();?>public/js/core/jquery.countTo.min.js"></script>
		<script src="<?php echo base_url();?>public/js/core/jquery.placeholder.min.js"></script>
		<script src="<?php echo base_url();?>public/js/core/js.cookie.min.js"></script>
		<script src="<?php echo base_url();?>public/js/app.js"></script>

		<!-- Page JS Plugins -->
		<script src="<?php echo base_url();?>public/js/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/jquery-validation/jquery.validate.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>

		<!-- Page JS Code -->
		<script>
			jQuery(function () {
				App.initHelpers(['notify']);
			});
		</script>	
		<script src="<?php echo base_url();?>public/js/customlogin.js"></script>
		<script type="text/javascript">

			window.onload = function() {
				<?php if($Aviso=='1'){?>
					jQuery.notify({
						icon: 'fa fa-check',
						message: '<?php echo $Mensaje; ?>' 
					},
					{
						element: 'body',
						type: 'success',
						allow_dismiss: true,
						newest_on_top: true,
						showProgressbar: false,
						offset: 20,
						spacing: 10,
						z_index: 1051,
						delay: 5000,
						timer: 1000,
						animate: {
							enter: 'animated fadeIn',
							exit: 'animated fadeOutDown'
						}
					});
				<?php }if($Aviso=='2'){?>
					jQuery.notify({
						icon: 'fa fa-times',
						message: '<?php echo $Mensaje; ?>' 
					},
					{
						element: 'body',
						type: 'danger',
						allow_dismiss: true,
						newest_on_top: true,
						showProgressbar: false,
						mouse_over: 'pause',
						offset: 20,
						spacing: 10,
						z_index: 1051,
						delay: 5000,
						timer: 1000,
						animate: {
							enter: 'animated fadeIn',
							exit: 'animated fadeOutDown'
						}
					});
				<?php }?>
			}
		</script>
	</body>
</html>