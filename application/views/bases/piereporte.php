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
                    colors: ['#039BE5','#F4511E'],
					chart: {
						type: 'line'
					},
					xAxis: {
						categories: ['01/06/18', '02/06/18', '03/06/18', '04/06/18', '05/06/18', '06/06/18', '07/06/18', '08/06/18', '09/06/18', '10/06/18', '11/06/18', '12/06/18', '13/06/18', '14/06/18', '15/06/18', '16/06/18', '17/06/18', '18/06/18','19/06/18', '20/06/18', '21/06/18', '22/06/18', '23/06/18', '24/06/18', '25/06/18', '26/06/18', '27/06/18', '28/06/18', '29/06/18', '30/06/18']
					},
					yAxis: {
						title: {
							text: null
						},
						labels: {
							formatter: function() {
								return this.value;
							}
						},
					},
					plotOptions: {
					},
					tooltip: {
						shared: true,
						useHTML: true,
						headerFormat: 	'<small>Fecha {point.key}</small><table>',
						pointFormat: 	'<tr><td style="color: {series.color}">Cliente {series.name}: </td>' +
										        '<td style="text-align: right"><b>{point.y}</b></td></tr>',
						footerFormat: 	'</table>',
						valueDecimals: 0
					},
                    series: [
                        {
                            name:'HUMON LATIN AMERICA S.A.',
                            data:[60,55,23,40,15,25,10,61,48,21,12,41,38,33,26,41,31,51,24,36,15,60,55,23,40,15,25,10,8,32]
                        },
                        {
                            name:'EXPORTADORA AMB S.A.C.',
                            data:[19,11,0,14,8,5,0,0,21,14,11,4,0,0,16,18,12,0,0,0,15,12,11,0,0,0,0,5,8,9]
                        },
                    ]
				});
                
                $('#high-bars2').highcharts({
					credits: false,
					title: false,
                    colors: ['#039BE5','#F4511E'],
					chart: {
						type: 'line'
					},
					xAxis: {
						categories: ['01/06/18', '02/06/18', '03/06/18', '04/06/18', '05/06/18', '06/06/18', '07/06/18', '08/06/18', '09/06/18', '10/06/18', '11/06/18', '12/06/18', '13/06/18', '14/06/18', '15/06/18', '16/06/18', '17/06/18', '18/06/18','19/06/18', '20/06/18', '21/06/18', '22/06/18', '23/06/18', '24/06/18', '25/06/18', '26/06/18', '27/06/18', '28/06/18', '29/06/18', '30/06/18']
					},
					yAxis: {
						title: {
							text: null
						},
						labels: {
							formatter: function() {
								return this.value;
							}
						},
					},
					plotOptions: {
					},
					tooltip: {
						shared: true,
						useHTML: true,
						headerFormat: 	'<small>Fecha {point.key}</small><table>',
						pointFormat: 	'<tr><td style="color: {series.color}">Cliente {series.name}: </td>' +
										        '<td style="text-align: right"><b>{point.y}</b></td></tr>',
						footerFormat: 	'</table>',
						valueDecimals: 0
					},
                    series: [
                        {
                            name:'HUMON LATIN AMERICA S.A.',
                            data:[24,12,10,8,11,21,9,23,21,18,16,20,15,12,7,30,27,24,28,17,14,26,24,28,23,19,24,15,17,19]
                        },
                        {
                            name:'EXPORTADORA AMB S.A.C.',
                            data:[4,5,7,2,0,0,4,3,2,0,0,5,6,4,0,2,3,4,5,0,0,0,6,4,3,2,0,0,3,5]
                        },
                    ]
				});

                $('#high-bars3').highcharts({
					credits: false,
					title: false,
                    colors: ['#039BE5','#F4511E'],
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
								return this.value;
							}
						},
					},
					plotOptions: {
					},
					tooltip: {
						shared: true,
						useHTML: true,
						headerFormat: 	'<small>Mes de {point.key}</small><table>',
						pointFormat: 	'<tr><td style="color: {series.color}">Cliente {series.name}: </td>' +
										        '<td style="text-align: right"><b>{point.y}</b></td></tr>',
						footerFormat: 	'</table>',
						valueDecimals: 0
					},
                    series: [	
                        {	
                            name:'HUMON LATIN AMERICA S.A.',
                            data:[612,783,949,811,768,691,974,851,982,632,846,744]
                        },	
                        {	
                            name:'EXPORTADORA AMB S.A.C.',
                            data:[145,101,230,201,175,191,272,142,318,187,245,261]
                        }
                    ]
				});

                $('#high-bars4').highcharts({
					credits: false,
					title: false,
                    colors: ['#039BE5','#F4511E'],
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
								return this.value;
							}
						},
					},
					plotOptions: {
					},
					tooltip: {
						shared: true,
						useHTML: true,
						headerFormat: 	'<small>Mes de {point.key}</small><table>',
						pointFormat: 	'<tr><td style="color: {series.color}">Cliente {series.name}: </td>' +
										        '<td style="text-align: right"><b>{point.y}</b></td></tr>',
						footerFormat: 	'</table>',
						valueDecimals: 0
					},
                    series: [	
                        {	
                            name:'HUMON LATIN AMERICA S.A.',
                            data:[413,278,245,310,401,378,541,421,359,457,245,348]
                        },	
                        {	
                            name:'EXPORTADORA AMB S.A.C.',
                            data:[76,46,114,96,89,87,50,76,141,68,125,134]
                        }
                    ]
				});

                $('#high-bars5').highcharts({
					credits: false,
					title: false,
                    colors: ['#039BE5','#F4511E','#8E24AA'],
					chart: {
						type: 'line'
					},
					xAxis: {
						categories: ['1:00 AM', '2:00 AM', '3:00 AM', '4:00 AM', '5:00 AM', '6:00 AM', '7:00 AM', '8:00 AM', '9:00 AM', '10:00 AM', '11:00 AM', '12:00 PM','1:00 PM', '2:00 PM', '3:00 PM', '4:00 PM', '5:00 PM', '6:00 PM', '7:00 PM', '8:00 PM', '9:00 PM', '10:00 PM', '11:00 PM', '12:00 PM']
					},
					yAxis: {
						title: {
							text: null
						},
						labels: {
							formatter: function() {
								return this.value+' TM';
							}
						},
					},
					plotOptions: {
					},
					tooltip: {
						shared: true,
						useHTML: true,
						headerFormat: 	'<small>Hora {point.key}</small><table>',
						pointFormat: 	'<tr><td style="color: {series.color}">Fecha {series.name}: </td>' +
										        '<td style="text-align: right"><b>{point.y} TM</b></td></tr>',
						footerFormat: 	'</table>',
						valueDecimals: 2
					},
                    series: [						
                        {	
                            name:'30/06/2018',
                            data:[31.654,0,0,0,30.478,62.158,61.897,136.584,174.458,179.852,185.621,168.952,147.856,178.562,180.953,201.587,202.477,201.564,198.475,185.657,164.235,120.474,64.512,62.458]
                        },
                        {	
                            name:'29/06/2018',
                            data:[0,0,0,0,28.945,51.220,84.112,126.450,174.458,154.878,165.982,157.840,168.952,164.878,203.562,199.471,174.595,184.520,174.582,126.540,62.145,30.214,31.879,0]
                        },
                        {	
                            name:'28/06/2018',
                            data:[21.485,0,0,0,0,31.265,32.564,58.920,128.458,165.780,178.562,185.623,215.478,221.478,195.488,184.589,172.456,199.542,164.522,152.364,102.454,84.596,51.236,45.698]
                        }
                    ]
				});

                $('#high-bars6').highcharts({
					credits: false,
					title: false,
                    colors: ['#039BE5','#F4511E','#8E24AA'],
					chart: {
						type: 'line'
					},
					xAxis: {
						categories: ['1:00 AM', '2:00 AM', '3:00 AM', '4:00 AM', '5:00 AM', '6:00 AM', '7:00 AM', '8:00 AM', '9:00 AM', '10:00 AM', '11:00 AM', '12:00 PM','1:00 PM', '2:00 PM', '3:00 PM', '4:00 PM', '5:00 PM', '6:00 PM', '7:00 PM', '8:00 PM', '9:00 PM', '10:00 PM', '11:00 PM', '12:00 PM']
					},
					yAxis: {
						title: {
							text: null
						},
						labels: {
							formatter: function() {
								return this.value+' Camiones';
							}
						},
					},
					plotOptions: {
					},
					tooltip: {
						shared: true,
						useHTML: true,
						headerFormat: 	'<small>Hora {point.key}</small><table>',
						pointFormat: 	'<tr><td style="color: {series.color}">Fecha {series.name}: </td>' +
										        '<td style="text-align: right"><b>{point.y} Camiones</b></td></tr>',
						footerFormat: 	'</table>',
						valueDecimals: 0
					},
                    series: [						
                        {	
                            name:'30/06/2018',
                            data:[2,0,0,0,2,3,4,5,6,6,7,7,6,7,7,8,7,6,5,5,4,4,3,1]
                        },
                        {	
                            name:'29/06/2018',
                            data:[0,0,0,0,1,3,4,5,5,6,5,7,5,7,8,9,7,6,7,5,4,3,3,0]
                        },
                        {	
                            name:'28/06/2018',
                            data:[1,0,0,0,0,2,2,3,4,5,7,6,7,8,9,6,7,7,6,5,4,3,3,2]
                        }
                    ]
				});

                $('#high-bars7').highcharts({
					credits: false,
					title: false,
                    colors: ['#039BE5','#F4511E'],
					chart: {
						type: 'line'
					},
					xAxis: {
						categories: ['01/06/18', '02/06/18', '03/06/18', '04/06/18', '05/06/18', '06/06/18', '07/06/18', '08/06/18', '09/06/18', '10/06/18', '11/06/18', '12/06/18', '13/06/18', '14/06/18', '15/06/18', '16/06/18', '17/06/18', '18/06/18','19/06/18', '20/06/18', '21/06/18', '22/06/18', '23/06/18', '24/06/18', '25/06/18', '26/06/18', '27/06/18', '28/06/18', '29/06/18', '30/06/18']
					},
					yAxis: {
						title: {
							text: null
						},
						labels: {
							formatter: function() {
								return this.value+' minutos';
							}
						},
					},
					plotOptions: {
                    },
                    legend: {
                        enabled: false,
					},
					tooltip: {
						shared: true,
						useHTML: true,
						headerFormat: 	'<small>Fecha {point.key}</small><table>',
						pointFormat: 	'<tr><td style="color: {series.color}">{series.name}: </td>' +
										        '<td style="text-align: right"><b>{point.y} minutos</b></td></tr>',
						footerFormat: 	'</table>',
						valueDecimals: 0
					},
                    series: [
                        {
                            name:'Tiempo promedio',
                            data:[4,4,5,5,4,6,4,5,6,7,7,4,5,4,6,6,7,5,6,5,4,7,5,4,5,6,6,5,4,7]
                        }
                    ]
                });

                $('#high-bars8').highcharts({
					credits: false,
					title: false,
                    colors: ['#039BE5','#F4511E'],
					chart: {
						type: 'line'
                    },
                    legend: {
                        enabled: false,
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
								return this.value +' Contenedores';
							}
						},
					},
					plotOptions: {
					},
					tooltip: {
						shared: true,
						useHTML: true,
						headerFormat: 	'<small>Mes de {point.key}</small><table>',
						pointFormat: 	'<tr><td style="color: {series.color}">{series.name}: </td>' +
										        '<td style="text-align: right"><b>{point.y}</b></td></tr>',
						footerFormat: 	'</table>',
						valueDecimals: 0
					},
                    series: [	
                        {	
                            name:'Contenedores',
                            data:[345,301,298,366,385,345,400,397,352,348,355,302]
                        }
                    ]
				});

                $('#high-bars9').highcharts({
					credits: false,
					title: false,
                    colors: ['#039BE5','#F4511E'],
					chart: {
						type: 'line'
                    },
                    legend: {
                        enabled: false,
					},
					xAxis: {
						categories: ['01/06/18', '02/06/18', '03/06/18', '04/06/18', '05/06/18', '06/06/18', '07/06/18', '08/06/18', '09/06/18', '10/06/18', '11/06/18', '12/06/18', '13/06/18', '14/06/18', '15/06/18', '16/06/18', '17/06/18', '18/06/18','19/06/18', '20/06/18', '21/06/18', '22/06/18', '23/06/18', '24/06/18', '25/06/18', '26/06/18', '27/06/18', '28/06/18', '29/06/18', '30/06/18']
					},
					yAxis: {
						title: {
							text: null
						},
						labels: {
							formatter: function() {
								return this.value+' TMH';
							}
						},
					},
					plotOptions: {
					},
					tooltip: {
						shared: true,
						useHTML: true,
						headerFormat: 	'<small>Fecha {point.key}</small><table>',
						pointFormat: 	'<tr><td style="color: {series.color}"></td>' +
										        '<td style="text-align: right"><b>{point.y} TMH</b></td></tr>',
						footerFormat: 	'</table>',
						valueDecimals: 2
					},
                    series: [						
                        {	
                            name:'Serie',
                            data:[1068.000,1004.510,909.874,896.541,1027.841,1258.459,912.548,846.325,1485.236,1028.947,956.846,823.649,842.596,789.285,745.698,826.985,954.545,875.125,789.425,1012.458,1124.785,952.436,785.326,879.582,973.469,896.566,783.574,862.489,741.418,764.599]
                        }
                    ]
				});

                $('#high-bars10').highcharts({
					credits: false,
					title: false,
                    colors: ['#039BE5','#F4511E'],
					chart: {
						type: 'line'
                    },
                    legend: {
                        enabled: false,
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
								return this.value +' TMH';
							}
						},
					},
					plotOptions: {
					},
					tooltip: {
						shared: true,
						useHTML: true,
						headerFormat: 	'<small>Mes de {point.key}</small><table>',
						pointFormat: 	'<tr><td style="color: {series.color}"></td>' +
										        '<td style="text-align: right"><b>{point.y} TMH</b></td></tr>',
						footerFormat: 	'</table>',
						valueDecimals: 2
					},
                    series: [	
                        {	
                            name:'Serie',
                            data:[23485.844,17548.369,20189.957,16489.983,19628.348,18475.299,22987.692,25998.654,20987.474,19784.851,21895.786,20145.983]
                        }
                    ]
                });
                
                $('#high-bars11').highcharts({
					credits: false,
					title: false,
                    colors: ['#039BE5','#F4511E'],
					chart: {
						type: 'line'
                    },
                    legend: {
                        enabled: false,
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
								return this.value +' TMH/GALÓN';
							}
						},
					},
					plotOptions: {
					},
					tooltip: {
						shared: true,
						useHTML: true,
						headerFormat: 	'<small>Mes de {point.key}</small><table>',
						pointFormat: 	'<tr><td style="color: {series.color}"></td>' +
										        '<td style="text-align: right"><b>{point.y} TMH/GALÓN</b></td></tr>',
						footerFormat: 	'</table>',
						valueDecimals: 2
					},
                    series: [	
                        {	
                            name:'Serie',
                            data:[222.844,162.369,180.957,123.983,114.348,132.299,250.692,160.654,184.474,162.851,189.786,142.983]
                        }
                    ]
				});

                $('#high-bars12').highcharts({
					credits: false,
					title: false,
                    colors: ['#039BE5','#F4511E'],
					chart: {
						type: 'line'
                    },
                    legend: {
                        enabled: false,
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
								return this.value +' TMH/PERSONA';
							}
						},
					},
					plotOptions: {
					},
					tooltip: {
						shared: true,
						useHTML: true,
						headerFormat: 	'<small>Mes de {point.key}</small><table>',
						pointFormat: 	'<tr><td style="color: {series.color}"></td>' +
										        '<td style="text-align: right"><b>{point.y} TMH/PERSONA</b></td></tr>',
						footerFormat: 	'</table>',
						valueDecimals: 2
					},
                    series: [	
                        {	
                            name:'Serie',
                            data:[54.25,84.25,100.42,76.52,120.00,40.88,75.68,120.45,40.46,66.81,79.45,85.45]
                        }
                    ]
				});

                $('#high-barsx').highcharts({
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
                        {	
                            name:'2013',
                            data:[0,0,0,0,0,0,0,0,0,0,0,3142.00]
                        },	
                        {	
                            name:'2014',
                            data:[7590.00,3824.00,4813.50,5678.00,6148.00,4744.00,3298.00,4175.00,5692.00,3640.00,8807.00,3629.50]
                        },	
                        {	
                            name:'2015',
                            data:[3919.00,4881.00,4983.00,4142.00,4934.00,4558.50,5530.00,6235.00,7072.90,8803.00,4267.00,9083.50]
                        },	
                        {	
                            name:'2016',
                            data:[7557.50,3408.00,8376.00,9021.00,6446.00,8527.00,9511.00,16768.00,23808.50,21121.00,17485.10,30361.10]
                        },	
                        {	
                            name:'2017',
                            data:[23888.00,25336.00,21109.00,23858.50,25167.00,22898.50,26400.50,25926.50,20568.30,25388.00,15830.00,30612.00]
                        },	
                        {	
                            name:'2018',
                            data:[17470.00,3362.00,7033.00,10111.00,27095.00,21082.50,0,0,0,0,0,0]
                        },
                    ]
				});

			    $('#high-barsxx').highcharts({
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
			});
		</script>
	</body>
</html>
