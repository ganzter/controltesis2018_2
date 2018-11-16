
			<footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix hidden-print">
				<div class="pull-right">
					Versión <a class="font-w600">1.1</a>
				</div>
				<div class="pull-left">
					<!--<a class="font-w600">Sistema Demo</a> --><span> <?php echo date('Y');?></span>
				</div>
			</footer>
		</div>

		<div class="modal fade" id="modal-confirmacion" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-sm modal-dialog modal-dialog-popout">
				<div class="modal-content">
					<div class="block block-themed block-transparent">
						<div class="block-header bg-primary">
							<ul class="block-options">
								<li>
									<button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
								</li>
							</ul>
							<h3 class="block-title">Confirmación</h3>
						</div>
						<div class="block-content">
							<div class="row text-center block">
								<div class="col-xs-12">
									<i class="si si-question fa-4x text-danger"></i>
								</div>
								<div class="col-xs-12">
									<h3 class="font-w300 push">¿Está seguro?</h3>
									<h3 class="font-w300 push texto"></h3>
								</div>
								<form method="post" action="">
									<input type="hidden" name="id" value="">
									<div class="col-xs-6">
										<A class="btn btn-minw btn-square btn-muted" data-dismiss="modal"><i class="fa fa-times push-5-r"></i> Cancelar</A>
									</div>
									<div class="col-xs-6">
										<button class="btn btn-minw btn-square btn-success" type="submit"><i class="fa fa-check push-5-r"></i> Confirmar</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="usuarioclave-modal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-sm modal-dialog modal-dialog-popout">
				<div class="modal-content">
					<div class="block block-themed block-transparent">
						<div class="block-header bg-primary">
							<ul class="block-options">
								<li>
									<button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
								</li>
							</ul>
							<h3 class="block-title">Edición de contraseña</h3>
						</div>
						<div class="block-content">
							<form class="form-horizontal push-10-t push-10" method="post" action="" id="usuarioclave-form">
								<input type="hidden" name="usuario" value="<?php echo $this->session->userdata('usuario'); ?>">
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<div class="col-xs-12">
												<label>Contraseña actual</label>
												<div class="input-group">
													<input class="form-control textoinput4 required" type="password" name="clave">
													<span class="input-group-addon"><i class="si si-info"></i></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<div class="col-xs-12">
												<label>Contraseña nueva</label>
												<div class="input-group">
													<input class="form-control textoinput4 required" type="password" name="clavenueva" id="clavenueva">
													<span class="input-group-addon"><i class="si si-info"></i></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-12">
										<div class="form-group">
											<div class="col-xs-12">
												<label>Repetir contraseña nueva</label>
												<div class="input-group">
													<input class="form-control textoinput4" type="password" name="clavenueva2">
													<span class="input-group-addon"><i class="si si-info"></i></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group hidden-print">
									<div class="col-xs-12 text-center">
										<a class="btn btn-minw btn-square btn-muted push-20-r" data-dismiss="modal"><i class="fa fa-times push-5-r"></i> Cerrar</a>
										<button class="btn btn-minw btn-square btn-primary" type="submit"><i class="fa fa-plus push-5-r"></i> Guardar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
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

