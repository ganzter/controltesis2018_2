			
			<!-- Side Overlay-->
			<aside id="side-overlay">
				<!-- Side Overlay Scroll Container -->
				<div id="side-overlay-scroll">
					<!-- Side Header -->
					<div class="side-header side-content">
						<!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
						<button class="btn btn-default pull-right" type="button" data-toggle="layout" data-action="side_overlay_close">
							<i class="fa fa-times"></i>
						</button>
						<span>
							<img class="img-avatar img-avatar32" src="<?php echo base_url();?>public/img/avatars/avatar1.jpg" alt="">
							<span class="font-w600 push-10-l">Nombre del Admin</span>
						</span>
					</div>
					<!-- END Side Header -->

					<!-- Side Content -->
					<div class="side-content remove-padding-t">
						<!-- Side Overlay Tabs -->
						<div class="block pull-r-l border-t">
							<ul class="nav nav-tabs nav-tabs-alt nav-justified" data-toggle="tabs">
								<li class="active">
									<a href="#tabs-side-overlay-overview"><i class="fa fa-fw fa-coffee"></i> Resumen</a>
								</li>
								<li>
									<a href="#tabs-side-overlay-sales"><i class="fa fa-fw fa-line-chart"></i> Ventas</a>
								</li>
							</ul>
							<div class="block-content tab-content">
								<!-- Overview Tab -->
								<div class="tab-pane fade fade-right in active" id="tabs-side-overlay-overview">
									<!-- Activity -->
									<div class="block pull-r-l">
										<div class="block-header bg-gray-lighter">
											<ul class="block-options">
												<li>
													<button type="button" data-toggle="block-option" data-action="content_toggle"></button>
												</li>
											</ul>
											<h3 class="block-title">Actividad Reciente</h3>
										</div>
										<div class="block-content">
											<!-- Activity List -->
											<ul class="list list-activity">
												<li>
													<i class="si si-action-redo text-info"></i>
													<div class="font-w600">Respondió un mensaje</div>
													<div>para <a href="#">correo@gmail.com</a></div>
													<div><small class="text-muted">Hace 10 minutos</small></div>
												</li>
											</ul>
											<!-- END Activity List -->
										</div>
									</div>
									<!-- END Activity -->

									<div class="block pull-r-l">
										<div class="block-header bg-gray-lighter">
											<ul class="block-options">
												<li>
													<button type="button" data-toggle="block-option" data-action="content_toggle"></button>
												</li>
											</ul>
											<h3 class="block-title">Últimos Mensajes</h3>
										</div>
										<div class="block-content">
											<!-- Activity List -->
											<ul class="list list-activity">
												<li>
													<i class="si si-envelope text-success"></i>
													<div class="font-w600">Titulo de mensaje</div>
													<div>de <a href="#">correo@gmail.com</a></div>
													<div><small class="text-muted">Hace 10 minutos</small></div>
												</li>
												<li>
													<i class="si si-envelope text-success"></i>
													<div class="font-w600">Titulo de mensaje</div>
													<div>de <a href="#">correo@gmail.com</a></div>
													<div><small class="text-muted">Hace 10 minutos</small></div>
												</li>
											</ul>
											<!-- END Activity List -->
										</div>
									</div>
									<!-- END Activity -->

								</div>
								<!-- END Overview Tab -->

								<!-- Sales Tab -->
								<div class="tab-pane fade fade-left" id="tabs-side-overlay-sales">
									<div class="block pull-r-l">
										<div class="block-content pull-t">
											<div class="row items-push">
												<div class="col-xs-12">
													<div class="font-w700 text-gray-darker text-uppercase">Ventas</div>
													<a class="h3 font-w300 text-primary" href="javascript:void(0)">Todavía no se realizan ventas.</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- END Sales Tab -->
							</div>
						</div>
						<!-- END Side Overlay Tabs -->
					</div>
					<!-- END Side Content -->
				</div>
				<!-- END Side Overlay Scroll Container -->
			</aside>
			<!-- END Side Overlay -->
