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

				var bgPrimary = '#4a89dc',
					bgPrimaryL = '#5d9cec',
					bgPrimaryLr = '#83aee7',
					bgPrimaryD = '#2e76d6',
					bgPrimaryDr = '#2567bd',
					bgSuccess = '#70ca63',
					bgSuccessL = '#87d37c',
					bgSuccessLr = '#9edc95',
					bgSuccessD = '#58c249',
					bgSuccessDr = '#49ae3b',
					bgInfo = '#3bafda',
					bgInfoL = '#4fc1e9',
					bgInfoLr = '#74c6e5',
					bgInfoD = '#27a0cc',
					bgInfoDr = '#2189b0',
					bgWarning = '#f6bb42',
					bgWarningL = '#ffce54',
					bgWarningLr = '#f9d283',
					bgWarningD = '#f4af22',
					bgWarningDr = '#d9950a',
					bgDanger = '#e9573f',
					bgDangerL = '#fc6e51',
					bgDangerLr = '#f08c7c',
					bgDangerD = '#e63c21',
					bgDangerDr = '#cd3117',
					bgAlert = '#967adc',
					bgAlertL = '#ac92ec',
					bgAlertLr = '#c0b0ea',
					bgAlertD = '#815fd5',
					bgAlertDr = '#6c44ce',
					bgSystem = '#37bc9b',
					bgSystemL = '#48cfad',
					bgSystemLr = '#65d2b7',
					bgSystemD = '#2fa285',
					bgSystemDr = '#288770',
					bgLight = '#f3f6f7',
					bgLightL = '#fdfefe',
					bgLightLr = '#ffffff',
					bgLightD = '#e9eef0',
					bgLightDr = '#dfe6e9',
					bgDark = '#3b3f4f',
					bgDarkL = '#424759',
					bgDarkLr = '#51566c',
					bgDarkD = '#2c2f3c',
					bgDarkDr = '#1e2028',
					bgBlack = '#283946',
					bgBlackL = '#2e4251',
					bgBlackLr = '#354a5b',
					bgBlackD = '#1c2730',
					bgBlackDr = '#0f161b';

				var highColors = [bgWarning, bgPrimary, bgInfo, bgAlert,
					bgDanger, bgSuccess, bgSystem, bgDark
				];

				var sucursales = ['Trujillo 1','Trujillo 2','Trujillo 3','Trujillo 4','Huamachuco 1','Tarapoto 1','Tarapoto 2','Virú 1', 'Chao 1','Chimbote 1'];
				var sucursalescolors = ['#546E7A','#F4511E','#FFB300','#7CB342','#00897B','#039BE5','#3949AB','#8E24AA','#E53935','#212121'];
				var column2 = $('#high-column2');
				if(column2.length) {
					$('#high-column2').highcharts({
						credits: false,
						colors: sucursalescolors,
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
								'Febrero',
								'Marzo',
								'Abril'
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
							headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
							pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' + '<td style="padding:0">S/ <b>{point.y:.1f}</b></td></tr>',
							footerFormat: '</table>',
							shared: true,
							useHTML: true
						},
						responsive: {
							rules: [{
							    condition: {
							        maxWidth: 500
							    },
							}]
						},
						series: [{
						    name: sucursales[0],
						    data: [52146.54,45567.89, 43455.45]

						}, {
						    name: sucursales[1],
						    data: [70803.852,64345.21,59003.21]

						}, {
						    name: sucursales[2],
						    data: [19217.712,21356.76,16014.76]

						}, {
						    name: sucursales[3],
						    data: [91071.576,81234.98,75892.98]

						}, {
						    name: sucursales[4],
						    data: [37265.34,36396.45,31054.45]

						}, {
						    name: sucursales[5],
						    data: [19230.54,21367.45,16025.45]

						}, {
						    name: sucursales[6],
						    data: [46308.924,43932.77,38590.77]

						}, {
						    name: sucursales[7],
						    data: [48508.644,45765.87,40423.87 ]

						}, {
						    name: sucursales[8],
						    data: [32574.252,32487.21,27145.21]

						}, {
						    name: sucursales[9],
						    data: [33061.992,32893.66,27551.66]

						}],
					});
				}			

				var infoCircle = $('.info-circle');
				if(infoCircle.length) {
					var circles = [];
					var cont=0;
					infoCircle.each(function(i, e) {
						if(cont==10) cont=0;
						var nombre =sucursales[cont];
						var circle = Circles.create({
							id: $(e).attr('id'),
							value: $(e).attr('value'),
							radius: $(e).width() / 2,
							width: 14,
							colors:  ['#DDD', sucursalescolors[cont]],
							text: function(value) {
								var nom = $(e).attr('nom');
								return '<h2 class="circle-text-value">' + value + '<small>' +nom + '</small></h2><p>' + nombre + '</p>'
							}
						});
						cont++;
					});
				}

				var column3 = $('#high-column3');
				if(column3.length) {
					$('#high-column3').highcharts({
						credits: false,
						colors: sucursalescolors,
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
								'Febrero',
								'Marzo',
								'Abril'
							],
							crosshair: [true]	
						},
						yAxis: {
							title: {
								text: null
							},
							labels: {
								formatter: function() {
									return '# '+this.value;
								}
							},
						},
						tooltip: {
							headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
							pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' + '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
							footerFormat: '</table>',
							shared: true,
							useHTML: true
						},
						series: [{
						    name: sucursales[0],
						    data: [160,208, 144]
						}, {
						    name: sucursales[1],
						    data: [80,104, 72]
						}, {
						    name: sucursales[2],
						    data: [140,182, 126]
						}, {
						    name: sucursales[3],
						    data: [100,130, 90]
						}, {
						    name: sucursales[4],
						    data: [120,208, 144]
						}, {
						    name: sucursales[5],
						    data: [140,182, 126]
						}, {
						    name: sucursales[6],
						    data: [160,208, 144]
						}, {
						    name: sucursales[7],
						    data: [180,234, 162]
						}, {
						    name: sucursales[8],
						    data: [200,260, 180]
						}, {
						    name: sucursales[9],
						    data: [300,390, 270]
						}],
					});
				}

				var pie1 = $('#high-pie1');
				var pie2 = $('#high-pie2');
				var pie3 = $('#high-pie3');
				var pie4 = $('#high-pie4');
				if(pie1.length) {
					$('#high-pie1').highcharts({
						credits: false,
						chart: {
							plotBackgroundColor: null,
							plotBorderWidth: null,
							plotShadow: false,
						},
						title: {
							text: null
						},
						tooltip: {
							pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
						},
						plotOptions: {
							pie: {
								center: ['30%', '50%'],
								allowPointSelect: true,
								cursor: 'pointer',
								dataLabels: {
									enabled: false
								},
								showInLegend: true
							}
						},
						colors: highColors,
						legend: {
							x: 130,
							floating: true,
							verticalAlign: "middle",
							layout: "vertical",
							itemMarginTop: 2
						},
						series: [{
							type: 'pie',
							name: 'Marca',
							data: [
								['Armani Exchange',1],
								['Arnette',13],
								['Michael Kors',1],
								['Oakley',30], {
									name: 'Oakley',
									y: 15.8,
									sliced: true,
									selected: true
								},
								['Persol',4],
								['Polo Ralph Lauren',3],
								['Prada',9],
								['Ralph',5],
								['Ralph Lauren',4],
								['Ray-Ban',25],
								['Vogue',5]
							]
						}]
					});
				}
				if(pie2.length) {
					$('#high-pie2').highcharts({
						credits: false,
						chart: {
							plotBackgroundColor: null,
							plotBorderWidth: null,
							plotShadow: false,
						},
						title: {
							text: null
						},
						tooltip: {
							pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
						},
						plotOptions: {
							pie: {
								center: ['30%', '50%'],
								allowPointSelect: true,
								cursor: 'pointer',
								dataLabels: {
									enabled: false
								},
								showInLegend: true
							}
						},
						colors: highColors,
						legend: {
							x: 130,
							floating: true,
							verticalAlign: "middle",
							layout: "vertical",
							itemMarginTop: 2
						},
						series: [{
							type: 'pie',
							name: 'Tipo',
							data: [
								['Perfect View',40],
								['Soft Air',35],
								['Strong Lens',25], {
									name: 'Oakley',
									y: 15.8,
									sliced: true,
									selected: true
								},
							]
						}]
					});
				}
				if(pie3.length) {
					$('#high-pie3').highcharts({
						credits: false,
						chart: {
							plotBackgroundColor: null,
							plotBorderWidth: null,
							plotShadow: false,
						},
						title: {
							text: 'Según marcas'
						},
						tooltip: {
							pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
						},
						plotOptions: {
							pie: {
								center: ['30%', '50%'],
								allowPointSelect: true,
								cursor: 'pointer',
								dataLabels: {
									enabled: false
								},
								showInLegend: true
							}
						},
						colors: highColors,
						legend: {
							x: 130,
							floating: true,
							verticalAlign: "middle",
							layout: "vertical",
							itemMarginTop: 2
						},
						series: [{
							type: 'pie',
							name: 'Marca',
							data: [
								['Armani Exchange',5],
								['Arnette',25], {
									name: 'Arnette',
									y: 15.8,
									sliced: true,
									selected: true
								},
								['Michael Kors',5],
								['Oakley',30],
								['Persol',4],
								['Polo Ralph Lauren',9],
								['Prada',3],
								['Ralph',1],
								['Ralph Lauren',4],
								['Ray-Ban',13],
								['Vogue',1]
							]
						}]
					});
				}
				if(pie4.length) {
					$('#high-pie4').highcharts({
						credits: false,
						chart: {
							plotBackgroundColor: null,
							plotBorderWidth: null,
							plotShadow: false,
						},
						title: {
							text: 'Según color'
						},
						tooltip: {
							pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
						},
						plotOptions: {
							pie: {
								center: ['30%', '50%'],
								allowPointSelect: true,
								cursor: 'pointer',
								dataLabels: {
									enabled: false
								},
								showInLegend: true
							}
						},
						colors: highColors,
						legend: {
							x: 130,
							floating: true,
							verticalAlign: "middle",
							layout: "vertical",
						},
						series: [{
							type: 'pie',
							name: 'Color',
							data: [							
								['Acero',9],
								['Azul',5],
								['Beige',6],
								['Blanco Transparente',6],
								['Bronce',3],
								['Café',3],
								['Dorado',4],
								['Gris',10], {
									name: 'Gris',
									y: 15.8,
									sliced: true,
									selected: true
								},
								['Havana',6],
								['Negro',4],
								['Otro',7],
								['Plata',9],
								['Rojo',3],
								['Rosado',4],
								['Silver',7],
								['Verde',8],
								['Violeta',6],
							]
						}]
					});
				}

			}
		</script>
	</body>
</html>