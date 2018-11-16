
			<main id="main-container" >
				<div class="content bg-gray-lighter">
					<div class="row items-push">
						<div class="col-sm-10">
							<h1 class="page-heading">
								Tesis
							</h1>
						</div>
						<div class="col-sm-2 text-right hidden-xs">
							<ol class="breadcrumb push-10-t">
								<li>Tesis</li>
								<li><a class="link-effect" href="">Gestión</a></li>
							</ol>
						</div>
					</div>
				</div>
				<div class="content content-boxed">
					<div class="row">
						<div class="col-sm-4">
							<a class="block block-link-hover2 nuevatesis" href="#" data-toggle="collapse" data-target="#tesis">
								<div class="block-content block-content-full bg-primary clearfix">
									<i class="si si-doc  fa-2x text-white pull-right"></i>
									<i class="si si-plus text-white"></i>  <span class="h4 text-white">Registrar Tesis</span>
								</div>
							</a>
						</div>
						<div class="col-sm-4">
							<a class="block block-link-hover2 nuevoasesor" href="#" data-toggle="collapse" data-target="#asesor">
								<div class="block-content block-content-full bg-primary clearfix">
									<i class="si si-doc  fa-2x text-white pull-right"></i>
									<i class="si si-plus text-white"></i>  <span class="h4 text-white">Registrar Asesor</span>
								</div>
							</a>
						</div>
					</div>
					<div class="block collapse" id="tesis">
						<div class="block block-themed block-transparent remove-margin-b">
							<div class="block-header bg-primary">
								<h3 class="block-title"><i class="si si-plus push-5-r"></i> <span>Formulario de Registro de Tesis</span></h3>
							</div>
							<div class="block-content">
								<form class="form-horizontal push-10-t push-10" method="post" action="" id="tesis-form">
									<input type="hidden" name="id" value="">
									<input type="hidden" name="table" value="tesis">
									<input type="hidden" name="estado" value="1">
									<h4>Datos de alumno</h4>
									<div class="row">
										<div class="col-xs-12 col-md-6 col-md-offset-3">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Código de alumno</label>
													<div class="input-group">
														<input class="form-control required textoinputcorta8" type="text" name="consulta" placeholder="Código">
														<span class="input-group-btn">
															<a class="btn btn-info consultacodigo"><i class="fa fa-search-plus"></i>  Buscar</a>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-md-2">
											<div class="form-group">
												<div class="col-xs-12">
													<label>ID</label>
													<div class="input-group">
														<input class="form-control required textoinput4" type="text" name="alumno" readonly>
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-2">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Código</label>
													<div class="input-group">
														<input class="form-control required textoinput4" type="text" name="codigo" disabled>
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-8">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Nombres</label>
													<div class="input-group">
														<input class="form-control required textoinput4" type="text" name="nombres" disabled>
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<h4>Dictamen de inscripción</h4>
									<div class="row">
										<div class="col-xs-12 col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Título</label>
													<div class="input-group">
														<input class="form-control required textoinput4" type="text" name="titulo">
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>                                        
									</div>
									<div class="row">
                                        <div class="col-xs-12 col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Número de inscripción</label>
													<div class="input-group">
														<input class="form-control required textoinput4" type="text" name="nro_inscripcion">
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Fecha de inscripción</label>
													<div class="input-group">
														<input class="form-control js-datetimepicker required" type="text" name="fecha_inscripcion" data-locale="es" data-format="DD-MM-YYYY" data-show-today-button="true">
														<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<hr class="divisor">
									<div class="form-group">
										<div class="col-xs-12 text-center">
											<a class="btn btn-minw btn-square btn-muted push-20-r" data-toggle="collapse" data-target="#tesis"><i class="fa fa-times push-5-r"></i> Cerrar</a>
											<button class="btn btn-minw btn-square btn-primary" type="submit"><i class="fa fa-plus push-5-r"></i> Registrar</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="block" id="busquedas">
						<script type="text/javascript">
								var reportetext='Listado de tesis';
						</script>
						<div class="block-header">
							<ul class="block-options">
								<li>
									<button type="button" data-toggle="block-option" data-action="fullscreen_toggle"><i class="si si-size-fullscreen"></i></button>
								</li>
							</ul>
							<h3 class="block-title">Listado de tesis registradas</h3>
						</div>
						<ul class="nav nav-tabs nav-tabs-alt" data-toggle="tabs">
							<li class="active">
								<a href="#ultimastesiss">Todos los registros</a>
							</li>
							<li class="">
								<a href="#busqueda1">Consulta por código de alumno</a>
							</li>
						</ul>
						<div class="block-content tab-content">
							<div class="tab-pane fade active in" id="ultimastesiss">
								<table class="table table-hover table-lista">
									<thead>
										<tr>
											<th>ID</th>
											<th class="text-center" style="width: 10%;">ACCIONES</th>
											<th>ESTADO</th>
											<th>Nº DE INSCRIPCIÓN</th>
											<th>F. DE INSCRIPCIÓN</th>
											<th>TÍTULO</th>
											<th>ALUMNO</th>
											<th>ASESOR</th>
											<th>Nº DE EXPEDITO</th>
											<th>F. DE SUSTENTACIÓN</th>
											<th>NOTA</th>
										</tr>
									</thead>
									<tbody>
										<?php echo $tesis;?>
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="busqueda1">
								<form class="form-horizontal" method="post" action="<?php echo base_url();?>general/busqueda">
									<input type="hidden" name="table" value="tesis">
									<input type="hidden" name="campo" value="codigo">
									<input type="hidden" name="estado" value="^5">
									<div class="form-group">
										<div class="col-sm-12">
											<div class="input-group">
												<input class="form-control required textoinputcorta8 digits" type="text" name="cadena" placeholder="Código de tesis">
												<span class="input-group-btn">
													<button class="btn btn-default" type="submit"><i class="fa fa-check text-success"></i>  Enviar</button>
												</span>
											</div>
										</div>
									</div>
								</form>
								<hr class="divisor">
								<table class="table table-hover table-lista">
									<thead>
										<tr>
											<th class="text-center" style="width: 10%;">ACCIONES</th>
											<th>Nº DE INSCRIPCIÓN</th>
											<th>F. DE INSCRIPCIÓN</th>
											<th>TÍTULO</th>
											<th>ALUMNO</th>
											<th>ASESOR</th>
											<th>Nº DE EXPEDITO</th>
											<th>SUSTENCIÓN</th>
											<th>NOTA</th>
											<th>ESTADO</th>
										</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</main>

			<div class="modal fade" id="asesor-modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-dialog-popout">
					<div class="modal-content">
						<div class="block block-themed block-transparent remove-margin-b">
							<div class="block-header bg-primary">
								<ul class="block-options"><li><button data-dismiss="modal" type="button"><i class="si si-close"></i></button></li></ul>
								<h3 class="block-title"><i class="si si-plus push-5-r"></i> <span>Registro de asesor</span></h3>
							</div>
							<div class="block-content">
								<form class="form-horizontal push-10-t push-10" method="post" action="" id="asesor-form">
									<input type="hidden" name="id" value="">
									<input type="hidden" name="table" value="asesor">
									<div class="row">
										<div class="col-xs-12">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Asesor</label>
													<div class="input-group">
														<select class="form-control required select2" name="docente" style="width: 100%;">
															<option value="">Seleccione</option>
															<?php echo $docentes;?>
														</select>
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
													<label>Datos adicionales</label>
													<div class="input-group">
														<input class="form-control textoinput4" type="text" name="obs">
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<hr class="divisor">
									<div class="form-group hidden-print">
										<div class="col-xs-12 text-center">
											<a class="btn btn-minw btn-square btn-muted" data-dismiss="modal"><i class="fa fa-times push-5-r"></i> Cerrar</a>
											<button class="btn btn-minw btn-square btn-primary" type="submit"><i class="fa fa-plus push-5-r"></i> Registrar</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="completar-modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-dialog-popout">
					<div class="modal-content">
						<div class="block block-themed block-transparent remove-margin-b">
							<div class="block-header bg-primary">
								<ul class="block-options"><li><button data-dismiss="modal" type="button"><i class="si si-close"></i></button></li></ul>
								<h3 class="block-title"><i class="si si-plus push-5-r"></i> <span>Asignación de asesor y RAIS</span></h3>
							</div>
							<div class="block-content">
								<form class="form-horizontal push-10-t push-10" method="post" action="" id="completar-form">
									<input type="hidden" name="id" value="">
									<input type="hidden" name="table" value="tesis">
									<input type="hidden" name="estado" value="">
									<div class="row">
										<div class="col-xs-12 col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<label>ID</label>
													<div class="input-group">
														<input class="form-control required textoinput4" type="text" name="alumno" disabled>
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Código</label>
													<div class="input-group">
														<input class="form-control required textoinput4" type="text" name="codigo" disabled>
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
													<label>Nombres</label>
													<div class="input-group">
														<input class="form-control required textoinput4" type="text" name="nombres" disabled>
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
													<label>Asesor</label>
													<div class="input-group">
														<select class="form-control required select2" name="asesor" style="width: 100%;">
															<?php echo $asesores;?>
														</select>
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>
                                        <div class="col-xs-12">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Nº de registro en RAIS</label>
													<div class="input-group">
														<input class="form-control required textoinput2" type="text" name="nro_rais">
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<hr class="divisor">
									<div class="form-group hidden-print">
										<div class="col-xs-12 text-center">
											<a class="btn btn-minw btn-square btn-muted" data-dismiss="modal"><i class="fa fa-times push-5-r"></i> Cerrar</a>
											<button class="btn btn-minw btn-square btn-primary" type="submit"><i class="fa fa-plus push-5-r"></i> Registrar</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="expedito-modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-dialog-popout">
					<div class="modal-content">
						<div class="block block-themed block-transparent remove-margin-b">
							<div class="block-header bg-primary">
								<ul class="block-options"><li><button data-dismiss="modal" type="button"><i class="si si-close"></i></button></li></ul>
								<h3 class="block-title"><i class="si si-plus push-5-r"></i> <span>Declaración de expedito</span></h3>
							</div>
							<div class="block-content">
								<form class="form-horizontal push-10-t push-10" method="post" action="" id="expedito-form">
									<input type="hidden" name="id" value="">
									<input type="hidden" name="table" value="tesis">
									<input type="hidden" name="estado" value="">
									<div class="row">
										<div class="col-xs-12 col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<label>ID</label>
													<div class="input-group">
														<input class="form-control required textoinput4" type="text" name="alumno" disabled>
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Código</label>
													<div class="input-group">
														<input class="form-control required textoinput4" type="text" name="codigo" disabled>
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
													<label>Nombres</label>
													<div class="input-group">
														<input class="form-control required textoinput4" type="text" name="nombres" disabled>
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
                                        <div class="col-xs-12 col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Número de expedito</label>
													<div class="input-group">
														<input class="form-control required textoinput4" type="text" name="nro_expedito">
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Fecha de expedito</label>
													<div class="input-group">
														<input class="form-control js-datetimepicker required" type="text" name="fecha_expedito" data-locale="es" data-format="DD-MM-YYYY" data-show-today-button="true">
														<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Informe de originalidad de expedito</label>
													<input class="form-control required" type="file" name="doc_expedito">
												</div>
											</div>
										</div>
									</div>
									<hr class="divisor">
									<div class="form-group hidden-print">
										<div class="col-xs-12 text-center">
											<a class="btn btn-minw btn-square btn-muted" data-dismiss="modal"><i class="fa fa-times push-5-r"></i> Cerrar</a>
											<button class="btn btn-minw btn-square btn-primary" type="submit"><i class="fa fa-plus push-5-r"></i> Registrar</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="jurado-modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-dialog-popout">
					<div class="modal-content">
						<div class="block block-themed block-transparent remove-margin-b">
							<div class="block-header bg-primary">
								<ul class="block-options"><li><button data-dismiss="modal" type="button"><i class="si si-close"></i></button></li></ul>
								<h3 class="block-title"><i class="si si-plus push-5-r"></i> <span>Asignación de Jurado</span></h3>
							</div>
							<div class="block-content">
								<form class="form-horizontal push-10-t push-10" method="post" action="" id="jurado-form">
									<input type="hidden" name="id" value="">
									<input type="hidden" name="table" value="tesis">
									<input type="hidden" name="estado" value="">
									<div class="row">
										<div class="col-xs-12 col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<label>ID</label>
													<div class="input-group">
														<input class="form-control required textoinput4" type="text" name="alumno" disabled>
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Código</label>
													<div class="input-group">
														<input class="form-control required textoinput4" type="text" name="codigo" disabled>
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
													<label>Nombres</label>
													<div class="input-group">
														<input class="form-control required textoinput4" type="text" name="nombres" disabled>
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
													<label>Seleccione Jurados (4)</label>
													<div class="input-group">
														<select class="form-control required" name="juradosel[]" style="width: 100%;" multiple="multiple">
															<?php echo $docentes;?>
														</select>
														<span class="input-group-addon"><i class="fa fa-users"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<hr class="divisor">
									<div class="form-group hidden-print">
										<div class="col-xs-12 text-center">
											<a class="btn btn-minw btn-square btn-muted" data-dismiss="modal"><i class="fa fa-times push-5-r"></i> Cerrar</a>
											<button class="btn btn-minw btn-square btn-primary" type="submit"><i class="fa fa-plus push-5-r"></i> Registrar</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="modal fade" id="sustentacion-modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-dialog-popout">
					<div class="modal-content">
						<div class="block block-themed block-transparent remove-margin-b">
							<div class="block-header bg-primary">
								<ul class="block-options"><li><button data-dismiss="modal" type="button"><i class="si si-close"></i></button></li></ul>
								<h3 class="block-title"><i class="si si-plus push-5-r"></i> <span>Sustentación de Tesis</span></h3>
							</div>
							<div class="block-content">
								<form class="form-horizontal push-10-t push-10" method="post" action="" id="sustentacion-form">
									<input type="hidden" name="id" value="">
									<input type="hidden" name="table" value="tesis">
									<input type="hidden" name="estado" value="">
									<div class="row">
										<div class="col-xs-12 col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<label>ID</label>
													<div class="input-group">
														<input class="form-control required textoinput4" type="text" name="alumno" disabled>
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Código</label>
													<div class="input-group">
														<input class="form-control required textoinput4" type="text" name="codigo" disabled>
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
													<label>Nombres</label>
													<div class="input-group">
														<input class="form-control required textoinput4" type="text" name="nombres" disabled>
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-md-6 col-md-offset-3">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Fecha de Sustentación</label>
													<div class="input-group">
														<input class="form-control js-datetimepicker required" type="text" name="fecha_hora_sustentacion" data-locale="es" data-format="DD-MM-YYYY hh:mm A" data-show-today-button="true" data-side-by-side="true">
														<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Lugar de Sustentación</label>
													<input class="form-control textoinput4 required " type="text" name="lugar_sustentacion">
												</div>
											</div>
										</div>
									</div>
									<hr class="divisor">
									<div class="form-group hidden-print">
										<div class="col-xs-12 text-center">
											<a class="btn btn-minw btn-square btn-muted" data-dismiss="modal"><i class="fa fa-times push-5-r"></i> Cerrar</a>
											<button class="btn btn-minw btn-square btn-primary" type="submit"><i class="fa fa-plus push-5-r"></i> Registrar</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal fade" id="cerrar-modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-dialog-popout">
					<div class="modal-content">
						<div class="block block-themed block-transparent remove-margin-b">
							<div class="block-header bg-primary">
								<ul class="block-options"><li><button data-dismiss="modal" type="button"><i class="si si-close"></i></button></li></ul>
								<h3 class="block-title"><i class="si si-plus push-5-r"></i> <span>Cerrar Tesis</span></h3>
							</div>
							<div class="block-content">
								<form class="form-horizontal push-10-t push-10" method="post" action="" id="cerrar-form">
									<input type="hidden" name="id" value="">
									<input type="hidden" name="table" value="tesis">
									<input type="hidden" name="estado" value="">
									<div class="row">
										<div class="col-xs-12 col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<label>ID</label>
													<div class="input-group">
														<input class="form-control required textoinput4" type="text" name="alumno" disabled>
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-6">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Código</label>
													<div class="input-group">
														<input class="form-control required textoinput4" type="text" name="codigo" disabled>
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
													<label>Nombres</label>
													<div class="input-group">
														<input class="form-control required textoinput4" type="text" name="nombres" disabled>
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
                                        <div class="col-xs-12 col-md-3">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Nota final</label>
													<div class="input-group">
														<input class="form-control required number" type="text" max="20" name="nota">
														<span class="input-group-addon"><i class="si si-info"></i></span>
													</div>
												</div>
											</div>
										</div>
                                        <div class="col-xs-12 col-md-9">
											<div class="form-group">
												<div class="col-xs-12">
													<label>Acta de Sustentación</label>
													<input class="form-control required" type="file" name="acta_sustentacion">
												</div>
											</div>
										</div>
									</div>
									<hr class="divisor">
									<div class="form-group hidden-print">
										<div class="col-xs-12 text-center">
											<a class="btn btn-minw btn-square btn-muted" data-dismiss="modal"><i class="fa fa-times push-5-r"></i> Cerrar</a>
											<button class="btn btn-minw btn-square btn-primary" type="submit"><i class="fa fa-plus push-5-r"></i> Registrar</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>