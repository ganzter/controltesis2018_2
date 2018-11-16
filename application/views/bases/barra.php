
			<header id="header-navbar" class="content-mini content-mini-full">
				<ul class="nav-header pull-right">
					<li>
						<div class="btn-group">
							<button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
								<img src="<?php echo base_url();?>public/img/avatars/avatar1.jpg" alt="Avatar">
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu dropdown-menu-right">
								<li class="dropdown-header">Perfil</li>
								<li>
									<a tabindex="-1">
										<i class="si si-user push-5-r"></i><?php echo $this->session->userdata('nombres'); ?>
									</a>
								</li>
								<li class="divider"></li>
								<li class="dropdown-header">Acciones</li>
								<li>
									<?php 
									$this->config->load('custom');
									if($this->session->userdata('usuario')!=$this->config->item('superusuario')){ ?>
									<a tabindex="-1" href="#" class="editarusuarioclave">
										<i class="si si-key push-5-r"></i>Editar contraseña
									</a>
									<?php } ?>
									<a tabindex="-1" href="<?php echo base_url();?>inicio/salir">
										<i class="si si-logout push-5-r"></i>Cerrar Sesión
									</a>
								</li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="nav-header pull-left">
					<li class="hidden-md hidden-lg">
						<button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
							<i class="fa fa-navicon"></i>
						</button>
					</li>
					<li class="hidden-xs hidden-sm">
						<button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
							<i class="fa fa-ellipsis-v"></i>
						</button>
					</li>
				</ul>
			</header>