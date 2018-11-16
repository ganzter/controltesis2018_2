		<!-- Page JS Plugins -->
		<script src="<?php echo base_url();?>public/js/plugins/slick/slick.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/chartjs/Chart.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/bootstrap-datetimepicker/moment.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/bootstrap-datetimepicker/locale/es.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/bootstrap-confirmation/bootstrap-confirmation.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/select2/select2.full.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/dropzonejs/dropzone.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/jquery-validation/jquery.validate.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/jquery-validation/additional-methods.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/magnific-popup/magnific-popup.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/datatables/dataTables.buttons.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/datatables/jszip.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/datatables/pdfmake.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/datatables/vfs_fonts.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/datatables/buttons.html5.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/datatables/buttons.print.min.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/datatables/datatables_ini.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/highcharts/highcharts.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/highcharts/modules/drilldown.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/raphael/raphael.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/circles/circles.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/jquery-blockui/jquery.blockUI.js"></script>
		<script src="<?php echo base_url();?>public/js/plugins/jquery-confirm/jquery-confirm.min.js"></script>
		
		<script>
			jQuery(function () {
				App.initHelpers(['slick','datepicker','datetimepicker','maxlength', 'select2', 'tags-inputs', 'appear', 'appear-countTo', 'slimscroll','notify','table-tools','masked-inputs', 'rangeslider','magnific-popup']);
			});
			var balanza ='<?php echo $balanza;?>';
			var base_url ='<?php echo base_url();?>';
			var perfilsess ='<?php echo $this->session->userdata('perfil');?>';
		</script>		
		<script src="<?php echo base_url();?>public/js/custom.js?v<?php echo rand();?>"></script>
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
		</script>
	</body>
</html>