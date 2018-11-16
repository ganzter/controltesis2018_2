
			
			<main id="main-container" >
				<div class="content bg-gray-lighter">
					<div class="row items-push">
						<div class="col-sm-10">
							<h1 class="page-heading">
								usuario
							</h1>
						</div>
						<div class="col-sm-2 text-right hidden-xs">
							<ol class="breadcrumb push-10-t">
								<li>Inicio</li>
								<li><a class="link-effect" href="">usuario</a></li>
							</ol>
						</div>
					</div>
				</div>
				<div class="content content-boxed">
					<div class="row">
						<div class="col-sm-4">
							<a class="block block-link-hover2 nuevausuario" href="#" data-toggle="collapse" data-target="#usuario">
								<div class="block-content block-content-full bg-primary clearfix">
									<i class="si si-calendar  fa-2x text-white pull-right"></i>
									<i class="si si-plus text-white"></i>  <span class="h4 text-white">Registrar usuario</span>
								</div>
							</a>
						</div>
					</div>
					<div class="block collapse" id="usuario">
						<div class="block block-themed block-transparent remove-margin-b">
							<div class="block-header bg-primary">
								<h3 class="block-title"><i class="si si-plus push-5-r"></i> <span>Formulario</span></h3>
							</div>
							<div class="block-content">
								<form class="form-horizontal push-10-t push-10" method="post" action="" id="usuario-form">
									<input type="hidden" name="id" value="">
									<input type="hidden" name="table" value="usuario">
									<h4>General</h4>
									<div class="row">
										<div class="col-xs-12 col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Usuario</label>
													<div class="input-group">
														<input class="form-control required textoinput" type="text" name="usuario">
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>									
										<div class="col-xs-12 col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<label>clave</label>
													<div class="input-group">
														<input class="form-control required textoinput" type="password" name="clave">
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>									
										<div class="col-xs-12 col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Nombres</label>
													<div class="input-group">
														<input class="form-control required textoinput" type="text" name="nombres">
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Apellidos</label>
													<div class="input-group">
														<input class="form-control required textoinput" type="text" name="apellidos">
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Email</label>
													<div class="input-group">
														<input class="form-control required textoinput" type="text" name="email">
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Teléfono</label>
													<div class="input-group">
														<input class="form-control required textoinput" type="text" name="telefono">
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>									
										<div class="col-xs-12 col-md-4">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Perfil</label>
													<select class="form-control " name="perfil" style="width: 100%;">
														<option value="">Seleccione</option>
														<?php foreach($perfil as $item):
															if ($item['estado']==1) {?>
														<option value="<?php echo $item['id']; ?>" ><?php echo str_pad($item['id'], 3, '0', STR_PAD_LEFT).' - '.$item['descripcion']; ?></option>
														<?php } 
														endforeach;?>
													</select>													
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-4">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Condición</label>
													<select class="form-control required" name="condicion" style="width: 100%;">
														<option value="0">Regular</option>
														<?php if($condicion =='1' ){?>
														<option value="1">Administrativo</option>
														<?php } ?>
													</select>
												</div>
											</div>
										</div>								
										<div class="col-xs-12 col-md-4">
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
											<a class="btn btn-minw btn-square btn-muted push-20-r" data-toggle="collapse" data-target="#usuario"><i class="fa fa-times push-5-r"></i> Cerrar</a>
											<button class="btn btn-minw btn-square btn-primary" type="submit"><i class="fa fa-plus push-5-r"></i> Registrar</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="block" id="busquedas">
						<script type="text/javascript">
								var reportetext='Listado de usuarios';
						</script>
						<ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs">
							<li class="active">
								<a href="#ultimasusuarios">Tipo de presentación registradas</a>
							</li>
						</ul>
						<div class="block-content tab-content">
							<div class="tab-pane fade active in" id="ultimasusuarios">
								<table class="table table-hover table-lista">
									<thead>
										<tr>
											<th>ID</th>
											<th class="text-center" style="width: 10%;">ACCIONES</th>
											<th>Usuario</th>
											<th>Clave</th>
											<th>Nombres</th>
											<th>Apellidos</th>
											<th>Email</th>
											<th>Teléfono</th>
											<th>Perfil</th>
											<th>ESTADO</th>
										</tr>
									</thead>
									<tbody>
										<?php echo $usuarios;?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</main>

		