
			
			<main id="main-container" >
				<div class="content bg-gray-lighter">
					<div class="row items-push">
						<div class="col-sm-10">
							<h1 class="page-heading">
								Menú
							</h1>
						</div>
						<div class="col-sm-2 text-right hidden-xs">
							<ol class="breadcrumb push-10-t">
								<li>Inicio</li>
								<li><a class="link-effect" href="">Menú</a></li>
							</ol>
						</div>
					</div>
				</div>
				<?php $usuario = $this->session->usuario;  ?>

				<div class="content content-boxed">
					<?php if($usuario =='superusuario'){ ?>
					<div class="row">
						<div class="col-sm-4">
							<a class="block block-link-hover2 nuevamenu" href="#" data-toggle="collapse" data-target="#menu">
								<div class="block-content block-content-full bg-primary clearfix">
									<i class="si si-calendar  fa-2x text-white pull-right"></i>
									<i class="si si-plus text-white"></i>  <span class="h4 text-white">Registrar menú</span>
								</div>
							</a>
						</div>
					</div>
					<?php } ?>
					<div class="block collapse" id="menu">
						<div class="block block-themed block-transparent remove-margin-b">
							<div class="block-header bg-primary">
								<h3 class="block-title"><i class="si si-plus push-5-r"></i> <span>Formulario</span></h3>
							</div>
							<div class="block-content">
								<form class="form-horizontal push-10-t push-10" method="post" action="" id="menu-form">
									<input type="hidden" name="id" value="">
									<input type="hidden" name="table" value="menu">
									<h4>General</h4>
									<div class="row">
										<div class="col-xs-6 col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Descripción</label>
													<div class="input-group">
														<input class="form-control required textoinput" type="text" name="descripcion">
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-6 col-md-4">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Icono</label>
													<div class="input-group">
														<input class="form-control required textoinput" type="text" id="icono" name="icono" readonly>
														<span class="input-group-addon" style="cursor:pointer;" id="busqueda-icono"><i class="fa fa-search"></i></span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-6 col-md-3">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Estado</label>
													<select class="form-control required" name="estado" style="width: 100%;">
														<option value="1">Activo</option>
														<option value="0">Inactivo</option>
													</select>
												</div>
											</div>
										</div>
										<hr>
										<div class="form-group hidden-print">
											<div class="col-xs-12 text-center">
												<a class="btn btn-minw btn-square btn-muted push-20-r" data-toggle="collapse" data-target="#menu"><i class="fa fa-times push-5-r"></i> Cerrar</a>
												<?php if($usuario =='superusuario'){ ?>
												<button class="btn btn-minw btn-square btn-primary" type="submit"><i class="fa fa-plus push-5-r"></i> Registrar</button>
												<?php } ?>
											</div>
										</div>
									</div>									
								</form>
							</div>
						</div>
					</div>
					<div class="block" id="busquedas">
						<script type="text/javascript">
								var reportetext='Listado de menus';
						</script>
						<ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs">
							<li class="active">
								<a href="#ultimasmenus">Menús registradas</a>
							</li>
						</ul>
						<div class="block-content tab-content">
							<div class="tab-pane fade active in" id="ultimasmenus">
								<table class="table table-hover table-lista">
									<thead>
										<tr>
											<th>ID</th>
											<th>Descripcion</th>
											<th>Icono</th>
											<th>ESTADO</th>
											<th class="text-center" style="width: 10%;">ACCIONES</th>
										</tr>
									</thead>
									<tbody>
										<?php echo $menus;?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</main>
			
			<div class="modal fade" id="submenu-modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-dialog-popout modal-lg">
					<div class="modal-content">
						<div class="block block-themed block-transparent remove-margin-b">
							<div class="block-header bg-primary">
								<ul class="block-options"><li><button data-dismiss="modal" type="button"><i class="si si-close"></i></button></li></ul>
								<h3 class="block-title"><i class="si si-plus push-5-r"></i> <span>submenu</span></h3>
							</div>
							<div class="block-content">
								<form class="form-horizontal push-10-t push-10" method="post" action="" id="submenu-form">
									<input type="hidden" name="id" value="">
									<input type="hidden" name="table" value="submenu">
								    <input type="hidden" name="padre" value="">
									<input type="hidden" name="estado" value="1">
									<div class="row">
										<div class="col-xs-6 col-md-5">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Descripcion</label>
													<div class="input-group">
														<input class="form-control textoinput2" type="text" name="descripcion">
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-6 col-md-4">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Icono</label>
													<div class="input-group">
														<input class="form-control required textoinput" type="text" id="icono-submenu" name="icono" readonly>
														<span class="input-group-addon" style="cursor:pointer;" id="busqueda-icono-submenu"><i class="fa fa-search"></i></span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<label>URL</label>
													<div class="input-group">
														<input class="form-control textoinput2" type="text" name="url">
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-3">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Estado</label>
													<select class="form-control required" name="estado" style="width: 100%;">
														<option value="1">Activo</option>
														<option value="0">Inactivo</option>
													</select>
												</div>
											</div>
										</div>
							
									</div>
									<?php if($usuario =='superusuario'){ ?>
				
									<div class="form-group hidden-print">
										<div class="col-xs-12 text-center">
											<button class="btn btn-minw btn-square btn-primary" type="submit"><i class="fa fa-plus push-5-r"></i> Registrar</button>
										</div>
									</div>
									<?php } ?>
								</form>
								<hr class="hidden-print">
								<h3 class="push">submenu registrados</h3>
								<table class="table table-hover table-lista">
									<thead>
										<tr>
											<th>#</th>
											<th>Descripcion</th>
											<th>Icono</th>
											<th>url</th>
											<th>Estado</th>
											<th class="text-center" width=150>Acciones</th>
										</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>
						</div>
						<div class="modal-footer">
							<div class="col-xs-12 text-center">
								<button class="btn btn-minw btn-square btn-muted" data-dismiss="modal"><i class="fa fa-times push-5-r"></i> Cerrar</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="iconomenu-modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-dialog-popout modal-lg">
					<div class="modal-content">
						<div class="block block-themed block-transparent remove-margin-b">
							<div class="block-header bg-primary">
								<ul class="block-options"><li><button data-dismiss="modal" type="button"><i class="si si-close"></i></button></li></ul>
								<h3 class="block-title"><i class="si si-plus push-5-r"></i> <span>Icono</span></h3>
							</div>
							<div class="block-content">
								<form class="form-horizontal push-10-t push-10" method="post" action="" id="iconomenu-form" >
									<button data-codigo="fa fa-list" class="agregar-icono"><i class="fa fa-list" aria-hidden="true"></i></button>
									<button data-codigo="fa fa-calendar" class="agregar-icono"><i class="fa fa-calendar" aria-hidden="true"></i></button>
									<button data-codigo="fa fa-bus" class="agregar-icono"><i class="fa fa-bus" aria-hidden="true"></i></button>
									<button data-codigo="fa fa-truck" class="agregar-icono"><i class="fa fa-truck" aria-hidden="true"></i></button>
									<button data-codigo="si si-settings" class="agregar-icono"><i class="si si-settings" aria-hidden="true"></i></button>
									<button data-codigo="fa fa-gear" class="agregar-icono"><i class="fa fa-gear" aria-hidden="true"></i></button>
									<button data-codigo="fa fa-file-o" class="agregar-icono"><i class="fa fa-file-o" aria-hidden="true"></i></button>
									<button data-codigo="fa fa-th-large" class="agregar-icono"><i class="fa fa-th-large" aria-hidden="true"></i></button>
									<button data-codigo="si si-check" class="agregar-icono"><i class="si si-check" aria-hidden="true"></i></button>
									<button data-codigo="si si-users" class="agregar-icono"><i class="si si-users" aria-hidden="true"></i></button>
								</form>
							</div>
						</div>
						<div class="modal-footer">
							<div class="col-xs-12 text-center">
								<button class="btn btn-minw btn-square btn-muted" data-dismiss="modal"><i class="fa fa-times push-5-r"></i> Cerrar</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="iconosubmenu-modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-dialog-popout modal-lg">
					<div class="modal-content">
						<div class="block block-themed block-transparent remove-margin-b">
							<div class="block-header bg-primary">
								<ul class="block-options"><li><button data-dismiss="modal" type="button"><i class="si si-close"></i></button></li></ul>
								<h3 class="block-title"><i class="si si-plus push-5-r"></i> <span>Icono</span></h3>
							</div>
							<div class="block-content">
								<form class="form-horizontal push-10-t push-10" method="post" action="" id="iconosubmenu-form" >
									<button data-codigo="fa fa-list" class="agregar-icono-submenu"><i class="fa fa-list" aria-hidden="true"></i></button>
									<button data-codigo="fa fa-calendar" class="agregar-icono-submenu"><i class="fa fa-calendar" aria-hidden="true"></i></button>
									<button data-codigo="fa fa-bus" class="agregar-icono-submenu"><i class="fa fa-bus" aria-hidden="true"></i></button>
									<button data-codigo="fa fa-truck" class="agregar-icono-submenu"><i class="fa fa-truck" aria-hidden="true"></i></button>
									<button data-codigo="si si-settings" class="agregar-icono-submenu"><i class="si si-settings" aria-hidden="true"></i></button>
									<button data-codigo="fa fa-gear" class="agregar-icono-submenu"><i class="fa fa-gear" aria-hidden="true"></i></button>
									<button data-codigo="fa fa-file-o" class="agregar-icono-submenu"><i class="fa fa-file-o" aria-hidden="true"></i></button>
									<button data-codigo="fa fa-th-large" class="agregar-icono-submenu"><i class="fa fa-th-large" aria-hidden="true"></i></button>
									<button data-codigo="si si-check" class="agregar-icono-submenu"><i class="si si-check" aria-hidden="true"></i></button>
									<button data-codigo="si si-users" class="agregar-icono-submenu"><i class="si si-users" aria-hidden="true"></i></button>

								</form>
							</div>
						</div>
						<div class="modal-footer">
							<div class="col-xs-12 text-center">
								<button class="btn btn-minw btn-square btn-muted" data-dismiss="modal"><i class="fa fa-times push-5-r"></i> Cerrar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
					

		