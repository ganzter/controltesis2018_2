<?php $usuario = $this->session->usuario;  ?>
			<main id="main-container" >
				<div class="content bg-gray-lighter">
					<div class="row items-push">
						<div class="col-sm-10">
							<h1 class="page-heading">
								Perfil
							</h1>
						</div>
						<div class="col-sm-2 text-right hidden-xs">
							<ol class="breadcrumb push-10-t">
								<li>Inicio</li>
								<li><a class="link-effect" href="">Perfil</a></li>
							</ol>
						</div>
					</div>
				</div>
				<div class="content content-boxed">
					<?php if($usuario =='superusuario'){ ?>
					<div class="row">
						<div class="col-sm-4">
							<a class="block block-link-hover2 nuevaperfil" href="#" data-toggle="collapse" data-target="#perfil">
								<div class="block-content block-content-full bg-primary clearfix">
									<i class="si si-calendar  fa-2x text-white pull-right"></i>
									<i class="si si-plus text-white"></i>  <span class="h4 text-white">Registrar Perfil</span>
								</div>
							</a>
						</div>
					</div>
					<?php } ?>
					<div class="block collapse" id="perfil">
						<div class="block block-themed block-transparent remove-margin-b">
							<div class="block-header bg-primary">
								<h3 class="block-title"><i class="si si-plus push-5-r"></i> <span>Formulario</span></h3>
							</div>
							<div class="block-content">
								<form class="form-horizontal push-10-t push-10" method="post" action="" id="perfil-form">
									<input type="hidden" name="id" value="">
									<input type="hidden" name="table" value="perfil">
									<h4>General</h4>
									<div class="row">
										<div class="col-xs-12 col-md-9">
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
									<hr>
									<div class="form-group hidden-print">
										<div class="col-xs-12 text-center">
											<a class="btn btn-minw btn-square btn-muted push-20-r" data-toggle="collapse" data-target="#perfil"><i class="fa fa-times push-5-r"></i> Cerrar</a>
											<?php if($usuario =='superusuario'){ ?>
											<button class="btn btn-minw btn-square btn-primary" type="submit"><i class="fa fa-plus push-5-r"></i> Registrar</button>
											<?php } ?>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="block" id="busquedas">
						<script type="text/javascript">
								var reportetext='Listado de perfiles';
						</script>
						<ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs">
							<li class="active">
								<a href="#ultimasperfiles">Perfiles registrados</a>
							</li>
						</ul>
						<div class="block-content tab-content">
							<div class="tab-pane fade active in" id="ultimasperfiles">
								<table class="table table-hover table-lista">
									<thead>
										<tr>
											<th>ID</th>
											<th>Descripción</th>
											<th>ESTADO</th>
											<th class="text-center" style="width: 10%;">ACCIONES</th>
										</tr>
									</thead>
									<tbody>
										<?php echo $perfiles;?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</main>

			<div class="modal fade" id="menuperfil-modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-dialog-popout">
					<div class="modal-content">
						<div class="block block-themed block-transparent remove-margin-b">
							<div class="block-header bg-primary">
								<ul class="block-options"><li><button data-dismiss="modal" type="button"><i class="si si-close"></i></button></li></ul>
								<h3 class="block-title"><i class="si si-plus push-5-r"></i> <span>Menús del perfil</span></h3>
							</div>
							<div class="block-content">
								<form class="form-horizontal push-10-t push-10" method="post" action="" id="menuperfil-form">
									<input type="hidden" name="id" value="">
									<input type="hidden" name="table" value="menuperfil">
									<div class="content_menuperfil"></div>
									<?php if($usuario =='superusuario'){ ?>
									<?php }else{?>
									<div class="row">
										<div class="col-xs-12 col-md-6 col-md-offset-3">
											<div class="alert alert-warning">
												<h3 class="font-w300 push-15">Atención</h3>
												<p>Solo el <span class="alert-link">superusario</span> puede editar este registro.</p>
											</div>
										</div>
									</div>
									<?php } ?>
									<div class="form-group">
										<div class="col-xs-12 text-center">
											<a class="btn btn-minw btn-square btn-muted push-20-r" data-dismiss="modal"><i class="fa fa-times push-5-r"></i> Cerrar</a>
											<?php if($usuario =='superusuario'){ ?>
											<button class="btn btn-minw btn-square btn-primary" type="submit"><i class="fa fa-plus push-5-r"></i> Registrar</button>
											<?php } ?>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>