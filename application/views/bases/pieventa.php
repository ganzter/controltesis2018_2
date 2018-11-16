		<!-- Page JS Plugins -->
		<script src="<?php echo base_url();?>public/js/plugins/slick/slick.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/chartjs/Chart.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/highcharts/highcharts.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/highcharts/modules/drilldown.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/circles/circles.js"></script>

		<script>
			jQuery(function () {	App.initHelpers([ 'slick','notify']);	});
		</script>
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

			jQuery(document).ready(function() {
				$('#high-bars').highcharts({
					credits: false,
					title: false,
					chart: {
						type: 'line'
					},
					xAxis: {
						categories: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Setiembre', 'Octubre', 'Noviembre', 'Diciembre']
					},
					yAxis: {
						title: {
							text: null
						},
						labels: {
							formatter: function() {
								return 'S/ '+this.value;
							}
						},
					},
					plotOptions: {
					},
					tooltip: {
						shared: true,
						useHTML: true,
						headerFormat: 	'<small>Mes de {point.key}</small><table>',
						pointFormat: 	'<tr><td style="color: {series.color}">Año {series.name}: </td>' +
										'<td style="text-align: right"><b>S/ {point.y}</b></td></tr>',
						footerFormat: 	'</table>',
						valueDecimals: 2
					},
					series: [
					<?php
						$grouped = array_group_by( $totalesmes,"Año");
						foreach ($grouped as $key => $value):
							$data='[';
							$mes=1;
							foreach ($value as $item):
								if ($item['Mes']==$mes) {
									$data.=$item['Total'].',';
								}else{
									continue 2;
								}
								$mes++;
							endforeach;
							$data=substr($data, 0, -1);
							$data.=']';
							echo "	
								{	
									name:'$key',
									data:$data
								},";
						endforeach;
					?>
					]
				});

				$('#high-bars2').highcharts({
					credits: false,
					title: false,
					chart: {
						type: 'column'
					},
					xAxis: {
						type: 'category'
					},
					yAxis: {
						title: {
							text: null
						},
						labels: {
							formatter: function() {
								return 'S/ '+this.value;
							}
						},
					},
					legend: {
						enabled: false
					},
					lang: {
						drillUpText: 'Regresar a Totales  por año'
					},
					plotOptions: {
						series: {
							borderWidth: 0,
							dataLabels: {
								enabled: true,
								format: 'S/ {point.y:.2f}'
							}
						}
					},
					tooltip: {
						headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
						pointFormat: '<span style="color:{point.color}">{point.name}</span>: S/ <b>{point.y:.2f}</b><br/>'
					},
					series: [{
						name: 'Total del año',
						colorByPoint: true,
						data: [
						<?php
							foreach ($totalesano as $item):
								echo "	
									{
										name: '".$item['Año']."',
										y: ".$item['Total'].",
										drilldown: '".$item['Año']."',
									},";
							endforeach;
						?>
						]
					}],
					drilldown: {
						series: [
						<?php
							foreach ($totalesano as $item):
								echo "	
									{
										name: 'Total: S/ ".$item['Total']."',
										id: '".$item['Año']."',
										data: [['A cuenta (".round((($item['Acuenta']/$item['Total'])*100),2)."%)',".$item['Acuenta']."],['Saldo (".round((($item['Saldo']/$item['Total'])*100),2)."%)',".$item['Saldo']."]]
									},";
							endforeach;
						?>
						]
					}
				});

				$('#high-bars3').highcharts({
					credits: false,
					chart: {
						spacingTop:20,
						spacingBottom:40,
						type: 'column',
					},
					legend: {
					},
					title: {
						text: null,
					},
					xAxis: {
						title: {
							text: null
						},
						categories: [
							'<?php echo get_month_string(date('m', strtotime('-2 month')));?>',
							'<?php echo get_month_string(date('m', strtotime('-1 month')));?>',
							'<?php echo get_month_string(date('m', strtotime('0 month')));?>'
						],
						crosshair: [true]	
					},
					yAxis: {
						title: {
							text: null
						},
						labels: {
							formatter: function() {
								return 'S/ '+this.value;
							}
						},
					},
					tooltip: {
						headerFormat: '<span style="font-size:10px">Mes de {point.key}</span><table>',
						pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' + '<td style="padding:0">S/ <b>{point.y:.1f}</b></td></tr>',
						footerFormat: '</table>',
						shared: true,
						useHTML: true
					},
					series: [
					<?php
						$grouped2 = array_group_by( $totalesmestienda,"Oficina");
						foreach ($grouped2 as $key => $value):
							$data='[';
							$mes=date('m', strtotime('-2 month'));
							foreach ($value as $item):
								if ($item['Mes']==$mes) {
									$data.=$item['Total'].',';
								}else{
									continue 2;
								}
								$mes++;
							endforeach;
							$data=substr($data, 0, -1);
							$data.=']';
							echo "	
								{	
									name:'$key',
									data:$data
								},";
						endforeach;
					?>
					],
				});
			});
		</script>
	</body>
</html>