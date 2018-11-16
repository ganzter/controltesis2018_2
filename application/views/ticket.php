<!DOCTYPE html>
<html class="no-focus">
	<head>
		<meta charset="utf-8">

		<title>Sistema - LOGISMINSA</title>

		<meta name="description" content="Admin Dashboard">
		<meta name="author" content="">
		<meta name="robots" content="noindex, nofollow">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
		<link rel="shortcut icon" href="<?php echo base_url();?>public/img/recursos/favicon.png">			
		<link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.min.css" media="all" />
		<style>
			.table2{
				width: 100%;
				max-width: 100%;
				margin-bottom: 5px;
				font-size: 11px;
				border: 0px solid black;
				/*font-family: tahoma;*/
				font-family: consolas;
			}
			.table3 {
				font-size: 12px;
			}
			.table {
				margin-bottom: 0px;
			}
			.bg-gray{
				background-color:#d9d9d9;
			}
			.text-center{
				text-align:center;
			}
			.text-left{
				text-align:left;
			}
			.text-right{
				text-align:right;
			}
			.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
				padding: 0px 2px;
				line-height: 1;
				vertical-align: middle;
				border-top: 0px solid #ddd;
			}
		</style>
	</head>
	<body>	
		<div class="">
			<table class="table2 table3" border="0" cellspacing="0" cellpadding="0">
				<tbody>
					<tr>
						<td WIDTH="100%">
							<table class="table" border="0" cellspacing="0" cellpadding="5">
								<tbody>
									<tr>
										<td WIDTH="75%" colspan="2" class="text-center">
											<b>TICKET Nº <?php echo str_pad($resreg[0]['id'], 6, '0', STR_PAD_LEFT);?></b><br><span style="font-size: 11px;">Recepción de Depósito Temporal</span>
										</td>
										<td WIDTH="25%" rowspan="2" class="text-right" style="border-left: 1px solid #ddd;">
											Fecha: <?php echo date('d-m-Y');?><br>
											Hora:  <?php echo date('g:i:s A');?><br>
											Usuario de ingreso: <?php echo strtoupper($resreg[0]['usuarioingreso']);?><br>
											Usuario de salida: <?php echo strtoupper($resreg[0]['usuariosalida']);?><br>
										</td>
									</tr>
									<tr>
										<td WIDTH="30%"><span style="line-height:50%">Tipo de Operación: <?php echo strtoupper($resreg[0]['operacion']);?></span></td>
										<td WIDTH="35%"><span style="line-height:50%">Nº de Autorización de Ingreso: <?php echo str_pad($resreg[0]['autorizacioningreso'], 6, '0', STR_PAD_LEFT);?></span></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
			<table class="table2" border="0" cellspacing="0" cellpadding="0">
				<tbody>
					<tr>
						<td WIDTH="100%">
							<table class="table" border="0" cellspacing="0" cellpadding="5">
								<tbody>
									<tr>
										<td WIDTH="50%" colspan="2"><span style="line-height:50%">Embarcador: <?php echo strtoupper($resreg[0]['embarcador']);?></span></td>												
										<td WIDTH="25%"><span style="line-height:50%">Guía embarcador: <?php echo strtoupper($resreg[0]['guiaembarcador']);?></span></td>
										<td WIDTH="25%"><span style="line-height:50%"></span></td>
									</tr>
									<tr>
										<td WIDTH="50%" colspan="2"><span style="line-height:50%">Agencia de ADUANA: <?php echo strtoupper($resreg[0]['aduana']);?></span></td>
									</tr>
									<tr>
										<td WIDTH="50%" colspan="2"><span style="line-height:50%">Nave: <?php echo strtoupper($resreg[0]['nave']);?></span></td>
										<td WIDTH="25%"><span style="line-height:50%">Viaje: <?php echo strtoupper($resreg[0]['viaje']);?></span></td>
										<td WIDTH="25%"><span style="line-height:50%">Rumbo: <?php echo strtoupper($resreg[0]['rumbo']);?></span></td>
									</tr>
									<tr>
										<td WIDTH="50%" colspan="2"><span style="line-height:50%">Línea:  <?php echo strtoupper($resreg[0]['linea']);?></span></td>
										<td WIDTH="25%"><span style="line-height:50%">Nº de booking: <?php echo strtoupper($resreg[0]['booking']);?></span></td>
										<td WIDTH="25%"><span style="line-height:50%">Nº atención: <?php echo str_pad($resreg[0]['atencion'], 6, '0', STR_PAD_LEFT);?></span></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
			<table class="table2" border="0" cellspacing="0" cellpadding="0">
				<tbody>
					<tr>
						<td WIDTH="100%">
							<table class="table" border="0" cellspacing="0" cellpadding="5">
								<tbody>
									<tr>
										<td WIDTH="50%" colspan="2"><span style="line-height:50%">Emp. transp.: <?php echo strtoupper($resreg[0]['transportistacnombre']);?></span></td>
										<td WIDTH="25%"><span style="line-height:50%">Guía de transp.: <?php echo strtoupper($resreg[0]['guia']);?></span></td>
										<td WIDTH="25%"><span style="line-height:50%">Nº Placa Tracto: <?php echo strtoupper($resreg[0]['tracto']);?></span></td>
									</tr>
									<tr>
										<td WIDTH="50%" colspan="2"><span style="line-height:50%">Conductor: <?php echo strtoupper($resreg[0]['conductor']);?></span></td>
										<td WIDTH="25%"><span style="line-height:50%">Brevete: <?php echo strtoupper($resreg[0]['brevete']);?></span></td>
										<td WIDTH="25%"><span style="line-height:50%">Nº Placa Carreta: <?php echo strtoupper($resreg[0]['carreta']);?></span></td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
			<table class="table2" border="0" cellspacing="0" cellpadding="0">
				<tbody>
					<tr>
						<td WIDTH="100%">
							<table class="table" border="0" cellspacing="0" cellpadding="5">
								<tbody>
									<tr>
										<td WIDTH="100%" colspan="4"><span style="line-height:50%">Commodity: <?php echo strtoupper($resreg[0]['commodity']);?></span></td>
									</tr>
									<tr>
										<td WIDTH="100%" colspan="4"><span style="line-height:50%">Observaciones: <?php echo strtoupper($resreg[0]['observaciones']);?></span></td>
									</tr>
									<?php 
									$precintos =($resreg[0]['precinto1']=='' ? '' : $resreg[0]['precinto1']).' '.($resreg[0]['precinto2']=='' ? '' : '| '.$resreg[0]['precinto2']).' '.
												($resreg[0]['precinto3']=='' ? '' : '| '.$resreg[0]['precinto3']).' '.($resreg[0]['precinto4']=='' ? '' : '| '.$resreg[0]['precinto4']).' '.
												($resreg[0]['precinto5']=='' ? '' : '| '.$resreg[0]['precinto5']).' '.($resreg[0]['precinto6']=='' ? '' : '| '.$resreg[0]['precinto6']).' '.
												($resreg[0]['precinto7']=='' ? '' : '| '.$resreg[0]['precinto8']).' '.($resreg[0]['precinto8']=='' ? '' : '| '.$resreg[0]['precinto8']).' '.
												($resreg[0]['precinto9']=='' ? '' : '| '.$resreg[0]['precinto9']).' '.($resreg[0]['precinto10']=='' ? '' : '| '.$resreg[0]['precinto10']); 	

									switch ($resreg[0]['reservatipo']) {
										case '1': ?>
											<tr>
												<td WIDTH="25%"><span style="line-height:50%">Contenedor: <?php echo $resreg[0]['prefijo'].$resreg[0]['numero'];?></span></td>
												<td WIDTH="25%"><span style="line-height:50%">Categoría: CONTENEDORES</span></td>
												<td WIDTH="25%"><span style="line-height:50%">Tamaño: <?php echo strtoupper($resreg[0]['tamano']);?></span></td>
												<td WIDTH="25%"><span style="line-height:50%">Tipo: <?php echo strtoupper($resreg[0]['tipocontenedor']);?></span></td>
											</tr>	
									<?php	break;
										case '2':?>
											<tr>
												<td WIDTH="25%"><span style="line-height:50%">Contenedor: <?php echo $resreg[0]['prefijo'].$resreg[0]['numero'];?></span></td>
												<td WIDTH="25%"><span style="line-height:50%">Categoría: CARGA SUELTA</span></td>
												<td WIDTH="25%"><span style="line-height:50%">Nº de bultos asignados: <?php echo $resreg[0]['bultosasignados'];?></span></td>
												<td WIDTH="25%"><span style="line-height:50%">Nº de bultos restantes: <?php echo $resreg[0]['bultos']-$resreg[0]['bultosasignados'];?></span></td>
											</tr>
									<?php	break;
										default:
											break;
									} ?>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
			<table class="table2" border="0" cellspacing="0" cellpadding="0">
				<tbody>
					<tr>
						<td WIDTH="100%">
							<table class="table" border="0" cellspacing="0" cellpadding="5" style="margin-bottom:55px;">
								<tbody>
									<tr>
										<td WIDTH="20%" style="border-right: 0px solid #ddd"><span style="line-height:50%">Peso Bruto Ingreso:</span></td>
										<td WIDTH="14%" class="text-right" style="border-right: 0px solid #ddd"><span style="line-height:50%;padding-right:8px;"><?php echo ($resreg[0]['pesoingreso']*1000/1000);?> Kg</span></td>
										<td WIDTH="33%"><span style="line-height:50%">Fecha Ingreso: <?php echo date("d-m-Y",strtotime($resreg[0]['fechaingreso']));?></span></td>
										<td WIDTH="33%"><span style="line-height:50%">Hora Ingreso: <?php echo date("g:i A",strtotime($resreg[0]['fechaingreso']));?></span></td>
									</tr>
									<tr>
										<td WIDTH="20%" style="border-right: 0px solid #ddd"><span style="line-height:50%">Peso Bruto Salida:</span></td>
										<td WIDTH="14%" class="text-right" style="border-right: 0px solid #ddd"><span style="line-height:50%;padding-right:8px;"><?php echo ($resreg[0]['pesosalida']*1000/1000);?> Kg</span></td>
										<td WIDTH="33%"><span style="line-height:50%">Fecha Salida: <?php echo date("d-m-Y",strtotime($resreg[0]['fechasalida']));?></span></td>
										<td WIDTH="33%"><span style="line-height:50%">Hora Salida: <?php echo date("g:i A",strtotime($resreg[0]['fechasalida']));?></span></td>
									</tr>
									<tr>
									<?php switch ($resreg[0]['reservatipo']) {
										case '1':  ?>	
										<td WIDTH="20%" style="border-right: 0px solid #ddd"><span style="line-height:50%">Contenedor+Contenido:</span></td>
										<td WIDTH="14%" class="text-right" style="border-right: 0px solid #ddd"><span style="line-height:50%;padding-right:8px;"><?php echo ($resreg[0]['pesoneto']*1000/1000);?> Kg</span></td>
										<td WIDTH="66%" colspan="2"><span style="line-height:50%">Payload: <?php echo ($resreg[0]['peso']*1000/1000);?> Kg</span></td>
									</tr>
									<tr>
										<td WIDTH="20%" style="border-right: 0px solid #ddd"><span style="line-height:50%">Peso Tara:</span></td>
										<td WIDTH="14%" class="text-right" style="border-right: 0px solid #ddd"><span style="line-height:50%;padding-right:8px;"><?php echo ($resreg[0]['tara']*1000/1000);?> Kg</span></td>
										<td WIDTH="66%" colspan="2"><span style="line-height:50%">Precintos: <?php echo $precintos;?></span></td>
									</tr>
									<tr>
										<td WIDTH="20%" style="border-right: 0px solid #ddd;border-bottom: 0px solid #ddd"><span style="line-height:50%">Peso Neto:</span></td>
										<td WIDTH="14%" class="text-right" style="border-right: 0px solid #ddd;border-bottom: 0px solid #ddd"><span style="line-height:50%;padding-right:8px;"><?php echo ($resreg[0]['cargo']*1000/1000);?> Kg</span></td>
										<td WIDTH="33%"><span style="line-height:50%"></span></td>
										<td WIDTH="33%"><span style="line-height:50%"></span></td>
									</tr>
									<?php	break;
										case '2': ?>
										<td WIDTH="20%" style="border-bottom: 0px solid #ddd"><span style="line-height:50%">Peso Neto:</span></td>
										<td WIDTH="14%" class="text-right" style="border-right: 0px solid #ddd;border-bottom: 0px solid #ddd"><span style="line-height:50%;padding-right:8px;"><?php echo ($resreg[0]['cargo']*1000/1000);?> Kg</span></td>
										<td WIDTH="66%" colspan="2"><span style="line-height:50%">Payload: <?php echo ($resreg[0]['peso']*1000/1000);?> Kg</span></td>
									</tr>
									<tr>
										<td WIDTH="20%"><span style="line-height:50%"></span></td>
										<td WIDTH="14%"><span style="line-height:50%"></span></td>
										<td WIDTH="33%"><span style="line-height:50%"></span></td>
										<td WIDTH="33%"><span style="line-height:50%"></span></td>
									</tr>
									<tr>
										<td WIDTH="20%"><span style="line-height:50%"></span></td>
										<td WIDTH="14%"><span style="line-height:50%"></span></td>
										<td WIDTH="33%"><span style="line-height:50%"></span></td>
										<td WIDTH="33%"><span style="line-height:50%"></span></td>
									</tr>
									<?php	break;
										default:
											break;
									} ?>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
		</div>	
	</body>
	<script type="text/javascript">
		window.onload = function() {
			window.print();
		};
	</script>
</html>	