<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this->load->model('general_modelo');
		$this->load->helper('text');

		$this->avisos=array(		'Aviso' 	=>$this->session->userdata('aviso'),
									'Mensaje' 	=>$this->session->userdata('mensaje'));
	}

	function alumno(){

		$alumno= $this->registroslistado('alumno','^5','');

		$datos = array('alumnos' => $alumno['registros']);

		$this->load->view('bases/cabezera',$this->avisos);
		$this->load->view('bases/aside');
		$this->load->view('bases/menu',$this->menu);
		$this->load->view('bases/barra');
		$this->load->view('personal',$datos);
		$this->load->view('bases/pie');
		$this->load->view('bases/pietabla');

		$this->session->set_userdata('aviso',0);
	}

	function tesis(){

		$tesis= $this->registroslistado('tesis','^5','');
		$asesores= $this->registroslistado('asesor','','');
		$docentes= $this->registroslistado('docente','','');

		$datos = array('tesis' => $tesis['registros'],
								'asesores' => $asesores['registroslista'],
								'docentes' => $docentes['registroslistam']);

		$this->load->view('bases/cabezera',$this->avisos);
		$this->load->view('bases/aside');
		$this->load->view('bases/menu',$this->menu);
		$this->load->view('bases/barra');
		$this->load->view('tesis',$datos);
		$this->load->view('bases/pie');
		$this->load->view('bases/pietabla');

		$this->session->set_userdata('aviso',0);
	}

	function registroslistado($table,$estado,$cadena=''){
		$table =trim($this->db->escape_like_str($table));
		switch ($table) {
			case 'alumno':
				$resreg = $this->general_modelo->ultimos($table,$estado,$cadena);
				break;
			default:
				$resreg = $this->general_modelo->listado($table,$estado,$cadena);
				break;
		}
		$registros['registros']='';
		$registros['registroslista']='<option value="">Seleccione</option>';
		$registros['registroslistam']='';
		$registros['cadena']='';
		$cont=1;
		foreach($resreg as $item):
			switch ($table) {
				case 'contenedor':
					$id = $item['id'];
					$idformat = str_pad($item['id'], 6, '0', STR_PAD_LEFT);
					$reserva = $item['reserva'];
					$prefijo = $item['prefijo'];
					$numero = $item['numero'];
					$tamano = $item['tamano'];
					$peso = $item['peso']*1000/1000;
					$tara = $item['tara']*1000/1000;
					$estado = $item['estado'];

					$precintos =($item['precinto1']=='' ? '' : $item['precinto1']).' '.($item['precinto2']=='' ? '' : '| '.$item['precinto2']).' '.
								($item['precinto3']=='' ? '' : '| '.$item['precinto3']).' '.($item['precinto4']=='' ? '' : '| '.$item['precinto4']).' '.
								($item['precinto5']=='' ? '' : '| '.$item['precinto5']).' '.($item['precinto6']=='' ? '' : '| '.$item['precinto6']).' '.
								($item['precinto7']=='' ? '' : '| '.$item['precinto8']).' '.($item['precinto8']=='' ? '' : '| '.$item['precinto8']).' '.
								($item['precinto9']=='' ? '' : '| '.$item['precinto9']).' '.($item['precinto10']=='' ? '' : '| '.$item['precinto10']);

					switch ($estado) {
						case '1':
							$estadolabel = 'success';
							$estadotexto = 'Booking';
							$opciones = "	<a class='btn btn-xs btn-info editarcontenedorbtn' data-id='$id' data-table='contenedor' data-toggle='tooltip' data-placement='top' title='Detalles/Editar'>
												<i class='si si-note' ></i>
											</a>
											<a class='btn btn-xs btn-danger cambiaestado' data-id='$id' data-table='$table' data-estado='5' data-reserva='$reserva' data-toggle='tooltip' data-placement='top' title='Eliminar'>
												<i class='fa fa-times' ></i>
											</a>";
							break;
						case '2':
							$estadolabel = 'info';
							$estadotexto = 'CheckIN';
							$opciones = " 	<a class='btn btn-xs btn-info editarcontenedorbtn' data-id='$id' data-table='contenedor' data-toggle='tooltip' data-placement='top' title='Detalles/Editar'>
												<i class='si si-note' ></i>
											</a>";
							break;
						case '3':
							$estadolabel = 'warning';
							$estadotexto = 'CheckOut';
							$opciones = "";
							break;
						case '4':
							$estadolabel = 'danger';
							$estadotexto = 'Borrador';
							$opciones = " 	<a class='btn btn-xs btn-info editarcontenedorbtn' data-id='$id' data-table='contenedor' data-toggle='tooltip' data-placement='top' title='Detalles/Editar'>
												<i class='si si-note' ></i>
											</a>";
							break;
						default:
							$opciones = '';
							break;
					}
					$registros['registros'].="	<tr>
										<td>$cont</td>
										<td>$prefijo</td>
										<td>$numero</td>
										<td>$tara Kg</td>
										<td>$peso Kg</td>
										<td>$tamano</td>
										<td>$precintos</td>
										<td><span class='label label-$estadolabel'>$estadotexto</span></td>
										<td class='text-center'>
											$opciones
										</td>
									</tr>";
					$registros['cadena']=$reserva;
					break;				
				case 'tipopersonal':
					$id = $item['id'];
					if($item['estado']=='1'){
						$registros['registroslista'].="	<option value='$id'>".$item['descripcion']."</option>";
					}
					break;
				case 'alumno':
					$id = $item['id_alum'];

					$registros['registros'].="	<tr>
										<td>".str_pad($item['id_alum'], 8, '0', STR_PAD_LEFT)."</td>
										<td>".$item['facultad']."</td>
										<td>".str_pad($item['codigo'], 8, '0', STR_PAD_LEFT)."</td>
										<td>".$item['ape_nom']."</td>
										<td>".$item['dni']."</td>
									</tr>";
					break;
				case 'asesor':
					$id = $item['id'];
					//if($item['estado']=='1'){
						$registros['registroslista'].="	<option value='$id'>".$item['nombres']."</option>";
					//}
					break;
				case 'docente':
					$id = $item['id'];
					//if($item['estado']=='1'){
						$registros['registroslista'].="	<option value='$id'>".$item['nombres']."</option>";
						$registros['registroslistam'].="	<option value='$id'>".$item['nombres']."</option>";
					//}
					break;
				case 'personaltipo':
					$id = $item['id'];
					$registros['registroslista'].="	<option value='$id'>".str_pad($item['codigo'], 8, '0', STR_PAD_LEFT)." | ".$item['grado']." ".$item['nombres']." ".$item['apellidop']." ".$item['apellidom']."</option>";
					break;
				case 'tesis':
					$id = $item['id'];
					$estado = $item['estado'];
					$asesor = $item['asesor'];
					$expedito = ($item['nro_expedito'] === NULL ? '-' : $item['nro_expedito']);
					$doc_expedito = $item['doc_expedito'];
					$acta_sustentacion = $item['acta_sustentacion'];
					$nota = ($item['nota'] === NULL ? '-' : $item['nota']);
					$fecha_hora_sustentacion = ($item['fecha_hora_sustentacion'] === NULL ? '-' : date("d-m-Y g:i A",strtotime($item['fecha_hora_sustentacion'])));

					switch ($estado) {
						/*case '1':
							$estadolabel = 'success';
							$estadotexto = 'Creado';
							$opciones = "	<a class='btn btn-xs btn-info completartesis' data-id='$id' data-table='tesis' data-toggle='tooltip' data-placement='top' title='Asignación de asesor y RAIS'>
														<i class='fa fa-edit' ></i>
													</a>
													<a class='btn btn-xs btn-danger cambiaestadotesis' data-id='$id' data-table='$table' data-estado='5' data-toggle='tooltip' data-placement='top' title='Eliminar'>
														<i class='fa fa-times' ></i>
													</a>";
							break;*/
						case '1':
							$estadolabel = 'success';
							$estadotexto = 'Creado';
							$opciones = "	<a class='btn btn-xs btn-info completartesis' data-id='$id' data-table='tesis' data-toggle='tooltip' data-placement='top' title='Asignación de asesor y RAIS'>
														<i class='fa fa-edit' ></i>
													</a>";
							break;
						case '2':
							$estadolabel = 'info';
							$estadotexto = 'Asesor asignado';
							$opciones = "	<a class='btn btn-xs btn-info expeditotesis' data-id='$id' data-table='tesis' data-toggle='tooltip' data-placement='top' title='Declaración de expedito'>
														<i class='fa fa-bars' ></i>
													</a>";
							break;
						case '3':
							$estadolabel = 'success';
							$estadotexto = 'Expedito declarado';
							$opciones = "	<a class='btn btn-xs btn-success' href='$doc_expedito' target='_new3' data-toggle='tooltip' data-placement='top' title='Informe de originalidad de expedito'>
														<i class='fa fa-file-text' ></i>
													</a> 
													<a class='btn btn-xs btn-info juradotesis' data-id='$id' data-table='tesis' data-toggle='tooltip' data-placement='top' title='Registro de Jurado de Tesis'>
														<i class='fa fa-users' ></i>
													</a>";
							break;
						case '4':
							$estadolabel = 'info';
							$estadotexto = 'Jurado asignado';
							$opciones = "	<a class='btn btn-xs btn-success' href='$doc_expedito' target='_new3' data-toggle='tooltip' data-placement='top' title='Informe de originalidad de expedito'>
														<i class='fa fa-file-text' ></i>
													</a> 
													<a class='btn btn-xs btn-info sustentaciontesis' data-id='$id' data-table='tesis' data-toggle='tooltip' data-placement='top' title='Programación del Acto de sustentación'>
														<i class='fa fa-calendar' ></i>
													</a>";
							break;
						case '5':
							$estadolabel = 'warning';
							$estadotexto = 'Sustentación definida';
							$opciones = "	<a class='btn btn-xs btn-success' href='$doc_expedito' target='_new3' data-toggle='tooltip' data-placement='top' title='Informe de originalidad de expedito'>
														<i class='fa fa-file-text' ></i>
													</a> 
													<a class='btn btn-xs btn-warning cerrartesis' data-id='$id' data-table='tesis' data-toggle='tooltip' data-placement='top' title='Cerrar Tesis'>
														<i class='fa fa-folder-open' ></i>
													</a>";
							break;
						case '6':
							$estadolabel = 'danger';
							$estadotexto = 'Tesis cerrada';
							$opciones = "	<a class='btn btn-xs btn-success' href='$doc_expedito' target='_new3' data-toggle='tooltip' data-placement='top' title='Informe de originalidad de expedito'>
														<i class='fa fa-file-text' ></i>
													</a> 
													<a class='btn btn-xs btn-warning' href='$acta_sustentacion' target='_new4' data-toggle='tooltip' data-placement='top' title='Acta de sustentación'>
														<i class='fa fa-file-text' ></i>
													</a> ";
							break;
						default:
							$opciones = '';
							break;
					}
					$registros['registros'].="	<tr>
										<td>".str_pad($item['id'], 3, '0', STR_PAD_LEFT)."</td>
										<td class='text-center'>
											$opciones
										</td>
										<td><span class='label label-$estadolabel'>$estadotexto</span></td>
										<td>".$item['nro_inscripcion']."</td>
										<td>".date("d-m-Y",strtotime($item['fecha_inscripcion']))."</td>
										<td>".$item['titulo']."</td>
										<td>".str_pad($item['codigo'], 8, '0', STR_PAD_LEFT)." | ".$item['alumno']."</td>
										<td>".$asesor."</td>
										<td>".$expedito."</td>
										<td>".$fecha_hora_sustentacion."</td>
										<td>".$nota."</td>
									</tr>";
					break;
				default:
					break;
			}
			$cont++;
		endforeach;

		return $registros;
	}

	function registrosbusqueda($table,$campo,$estado,$cadena){
		$table =trim($this->db->escape_like_str($table));
		//$campo =trim($this->db->escape_like_str($campo));
		$campo =trim(($campo));
		$resreg = $this->general_modelo->busqueda($table,$campo,$estado,$cadena);
		//error_log($this->db->last_query());
		$registros['registros']='';
		$registros['registroslista']='';
		foreach($resreg as $item):
			switch ($table) {
				case 'alumno':
					$id = $item['id_alum'];

					$registros['registros'].="	<tr>
										<td>".str_pad($item['id_alum'], 8, '0', STR_PAD_LEFT)."</td>
										<td>".$item['facultad']."</td>
										<td>".str_pad($item['codigo'], 8, '0', STR_PAD_LEFT)."</td>
										<td>".$item['ape_nom']."</td>
										<td>".$item['dni']."</td>
									</tr>";
					break;
				case 'tesis':
					$id = $item['id'];
					$estado = $item['estado'];
					$asesor = $item['asesor'];
					$expedito = ($item['nro_expedito'] === NULL ? '-' : $item['nro_expedito']);
					$doc_expedito = $item['doc_expedito'];
					$acta_sustentacion = $item['acta_sustentacion'];
					$nota = ($item['nota'] === NULL ? '-' : $item['nota']);
					$fecha_hora_sustentacion = ($item['fecha_hora_sustentacion'] === NULL ? '-' : date("d-m-Y g:i A",strtotime($item['fecha_hora_sustentacion'])));

					switch ($estado) {
						/*case '1':
							$estadolabel = 'success';
							$estadotexto = 'Creado';
							$opciones = "	<a class='btn btn-xs btn-info completartesis' data-id='$id' data-table='tesis' data-toggle='tooltip' data-placement='top' title='Asignación de asesor y RAIS'>
														<i class='fa fa-edit' ></i>
													</a>
													<a class='btn btn-xs btn-danger cambiaestadotesis' data-id='$id' data-table='$table' data-estado='5' data-toggle='tooltip' data-placement='top' title='Eliminar'>
														<i class='fa fa-times' ></i>
													</a>";
							break;*/
						case '1':
							$estadolabel = 'success';
							$estadotexto = 'Creado';
							$opciones = "	<a class='btn btn-xs btn-info completartesis' data-id='$id' data-table='tesis' data-toggle='tooltip' data-placement='top' title='Asignación de asesor y RAIS'>
														<i class='fa fa-edit' ></i>
													</a>";
							break;
						case '2':
							$estadolabel = 'info';
							$estadotexto = 'Asesor asignado';
							$opciones = "	<a class='btn btn-xs btn-info expeditotesis' data-id='$id' data-table='tesis' data-toggle='tooltip' data-placement='top' title='Declaración de expedito'>
														<i class='fa fa-bars' ></i>
													</a>";
							break;
						case '3':
							$estadolabel = 'success';
							$estadotexto = 'Expedito declarado';
							$opciones = "	<a class='btn btn-xs btn-success' href='$doc_expedito' target='_new3' data-toggle='tooltip' data-placement='top' title='Informe de originalidad de expedito'>
														<i class='fa fa-file-text' ></i>
													</a> 
													<a class='btn btn-xs btn-info juradotesis' data-id='$id' data-table='tesis' data-toggle='tooltip' data-placement='top' title='Registro de Jurado de Tesis'>
														<i class='fa fa-users' ></i>
													</a>";
							break;
						case '4':
							$estadolabel = 'info';
							$estadotexto = 'Jurado asignado';
							$opciones = "	<a class='btn btn-xs btn-success' href='$doc_expedito' target='_new3' data-toggle='tooltip' data-placement='top' title='Informe de originalidad de expedito'>
														<i class='fa fa-file-text' ></i>
													</a> 
													<a class='btn btn-xs btn-info sustentaciontesis' data-id='$id' data-table='tesis' data-toggle='tooltip' data-placement='top' title='Programación del Acto de sustentación'>
														<i class='fa fa-calendar' ></i>
													</a>";
							break;
						case '5':
							$estadolabel = 'warning';
							$estadotexto = 'Sustentación definida';
							$opciones = "	<a class='btn btn-xs btn-success' href='$doc_expedito' target='_new3' data-toggle='tooltip' data-placement='top' title='Informe de originalidad de expedito'>
														<i class='fa fa-file-text' ></i>
													</a> 
													<a class='btn btn-xs btn-warning cerrartesis' data-id='$id' data-table='tesis' data-toggle='tooltip' data-placement='top' title='Cerrar Tesis'>
														<i class='fa fa-folder-open' ></i>
													</a>";
							break;
						case '6':
							$estadolabel = 'danger';
							$estadotexto = 'Tesis cerrada';
							$opciones = "	<a class='btn btn-xs btn-success' href='$doc_expedito' target='_new3' data-toggle='tooltip' data-placement='top' title='Informe de originalidad de expedito'>
														<i class='fa fa-file-text' ></i>
													</a> 
													<a class='btn btn-xs btn-warning' href='$acta_sustentacion' target='_new4' data-toggle='tooltip' data-placement='top' title='Acta de sustentación'>
														<i class='fa fa-file-text' ></i>
													</a> ";
							break;
						default:
							$opciones = '';
							break;
					}
					$registros['registros'].="	<tr>
										<td>".str_pad($item['id'], 3, '0', STR_PAD_LEFT)."</td>
										<td class='text-center'>
											$opciones
										</td>
										<td><span class='label label-$estadolabel'>$estadotexto</span></td>
										<td>".$item['nro_inscripcion']."</td>
										<td>".date("d-m-Y",strtotime($item['fecha_inscripcion']))."</td>
										<td>".$item['titulo']."</td>
										<td>".str_pad($item['codigo'], 8, '0', STR_PAD_LEFT)." | ".$item['alumno']."</td>
										<td>".$asesor."</td>
										<td>".$expedito."</td>
										<td>".$fecha_hora_sustentacion."</td>
										<td>".$nota."</td>
									</tr>";
					break;
				default:
					break;
			}
		endforeach;

		return $registros;
	}

	function listado(){

		$table=	strip_tags($this->input->post('table'));
		$estado= strip_tags($this->input->post('estado'));
		$cadena= strip_tags($this->input->post('cadena'));

		$this->form_validation->set_rules('table', 'table', 'trim|required');
		$this->form_validation->set_rules('estado', 'estado', 'trim|required');
		if ($this->form_validation->run() == FALSE){
			$response = array(	'estado' =>'500',
								'msg'=>'Parámetros incorrectos');
		}else{
			$registros= $this->registroslistado($table,$estado,$cadena);
			$response  =array(	'estado' =>'200',
								'registros' =>$registros['registros'],
								'cadena' =>$registros['cadena']);
		}
		echo json_encode($response);
	}

	function busqueda(){
		
		$table=	strip_tags($this->input->post('table'));
		$campo= strip_tags($this->input->post('campo'));
		$estado= strip_tags($this->input->post('estado'));
		$cadena= strip_tags($this->input->post('cadena'));

		$this->form_validation->set_rules('table', 'table', 'trim|required');
		$this->form_validation->set_rules('campo', 'campo', 'trim|required');
		$this->form_validation->set_rules('estado', 'estado', 'trim|required');
		$this->form_validation->set_rules('cadena', 'cadena', 'required');
		if ($this->form_validation->run() == FALSE){
			$response = array(	'estado' =>'500',
								'msg'=>'Parámetros incorrectos');
		}else{			
			$registros= $this->registrosbusqueda($table,$campo,$estado,$cadena);
			//log_message('debug',$this->db->last_query());
			$response  =array(	'estado' =>'200',
								'registros' =>$registros['registros']);
		}
		echo json_encode($response);
	}

	function busquedafecha(){
		
		$table=	strip_tags($this->input->post('table'));
		$campo= strip_tags($this->input->post('campo'));
		$fechainicio= strip_tags($this->input->post('fechainicio'));
		$fechafin= strip_tags($this->input->post('fechafin'));
		$estado= strip_tags($this->input->post('estado'));

		$this->form_validation->set_rules('table', 'table', 'trim|required');
		$this->form_validation->set_rules('campo', 'campo', 'trim|required');
		$this->form_validation->set_rules('fechainicio', 'fechainicio', 'trim|required');
		$this->form_validation->set_rules('fechafin', 'fechafin', 'trim|required');
		$this->form_validation->set_rules('estado', 'estado', 'trim|required');
		if ($this->form_validation->run() == FALSE){
			$response = array(	'estado' =>'500',
								'msg'=>'Parámetros incorrectos');
		}else{			
			$registros= $this->registrosbusqueda($table,$campo,$estado,$cadena);
			$response  =array(	'estado' =>'200',
								'registros' =>$registros['registros']);
		}
		echo json_encode($response);
	}

	function nuevoregistro(){

		$params= $this->input->post();
		$queryvalues='';
		$querycolumns='';
		$table='';
		$cadena='';
		foreach ($params as $field  => $value) {
			$fieldcomp =trim($this->db->escape_like_str($field));
			$fieldtemp =trim($this->db->escape_str($field));
			$valuetemp =$this->db->escape(trim($value));
			$valuetable =$this->db->escape_like_str($value);
			if($fieldcomp=='id' || $fieldcomp=='rucconsulta' || $fieldcomp=='consulta'){
			}elseif($fieldcomp=='table'){
				$table = trim($valuetable);
				$fecha = date('Y-m-d H:i:s');
				switch ($table) {
					case 'tesis':
						$fecha = date('Y-m-d');
						$querycolumns.="fecha, ";
						$queryvalues.="'$fecha', ";
						break;
					case 'contenedor':
						$cadena = strip_tags($this->input->post('reserva'));
						$prefijo = strip_tags($this->input->post('prefijo'));
						$numero = strip_tags($this->input->post('numero'));
						break;
					case 'personal':
						$codigo = strip_tags($this->input->post('codigo'));
						break;
				}
			}else{
				$querycolumns.="$fieldtemp, ";
				$queryvalues.="$valuetemp, ";
			}
		}
		$querycolumns	=substr($querycolumns, 0, -2);
		$queryvalues	=substr($queryvalues, 0, -2);

		if (empty($querycolumns) or empty($queryvalues)){
			$response  =array(	'estado' =>'500',
											'msg'=>'Parámetros incorrectos');
		}else{
			$flagcont=true;
			switch ($table) {
				case 'contenedor':
					$reserva = $this->general_modelo->detallereserva($cadena);
					$contenedores = $this->general_modelo->listado($table,'^5',$cadena);
					$contcont=count($contenedores);
					if($contcont>=$reserva[0]['cantidad'] && $reserva[0]['tipo']=='1'){
						$flagcont=false;
						$response  =array(	'estado' =>'500',
											'msg'=>'Ya estan registrados '.count($contenedores).' de '.$reserva[0]['cantidad'].' contenedores.<br>No se puede registrar mas.');
					}else{
						$contenedor = $this->general_modelo->identificarcontenedor($prefijo,$numero,$cadena);
						$idcont=count($contenedor);
						if($idcont>0){
							$flagcont=false;
							$response  =array(	'estado' =>'500',
												'msg'=>'El prefijo: <b>'.$prefijo.'</b> y número: <b>'.$numero.'</b> ya estan registrados en este Booking.<br>No se puede registrar nuevamente.');
						}
					}
					break;				
				case 'personal':
					$personal = $this->general_modelo->detalleregistro($table,'codigo',$codigo);
					if(count($personal)>0){
						$flagcont=false;
						$response  =array(	'estado' =>'500',
														'msg'=>'El Código <b>'.$codigo.'</b> ya se encuentra registrado.<br>No se puede registrar nuevamente.');
					}
					break;
				default:
					break;
			}
			if($flagcont){
				if($this->general_modelo->nuevoregistro($table,$querycolumns,$queryvalues)){
					switch ($table) {
						case 'contenedor':
							$registrosreserva= $this->registroslistado('reserva','^5','');
							break;
						default:
							break;
					}

					$registros= $this->registroslistado($table,'^5',$cadena);
					$response  =array(	'estado' =>'200',
													'registros' =>$registros['registros'],
													'registroslista' =>$registros['registroslista'],
													'registrosreserva' =>$registrosreserva['registros'],
													'cadena' =>$registros['cadena']);
				}else{
					$response  =array(	'estado' =>'500',
													'msg'=>'Error al registrar en la BD');
				}
			}
		}
		echo json_encode($response);
	}

	function actualizarregistro(){
		
		$params= $this->input->post();
		$querycolumns='';
		$table='';
		$cadena='';
		foreach ($params as $field  => $value) {
			$fieldcomp =trim($this->db->escape_like_str($field));
			$fieldtemp =trim($this->db->escape_str($field));
			$valuetemp =$this->db->escape(trim($value));
			$valuetable =$this->db->escape_like_str($value);
			if($fieldcomp=='id'){
				$id = strip_tags($this->input->post('id'));
			}elseif($fieldcomp=='rucconsulta' || $fieldcomp=='consulta' || $fieldcomp=='doc_expedito' || $fieldcomp=='juradosel'){
			}elseif($fieldcomp=='table'){
				$table = trim($valuetable);
				$fecha = date('Y-m-d H:i:s');
				switch ($table) {
					case 'contenedor':
						$cadena = strip_tags($this->input->post('reserva'));
						$estadoin = strip_tags($this->input->post('estado'));
						$prefijo = strip_tags($this->input->post('prefijo'));
						$numero = strip_tags($this->input->post('numero'));
						break;
					case 'personal':
						$codigo = strip_tags($this->input->post('codigo'));
						break;
					case 'tesis':
						$estadoin = strip_tags($this->input->post('estado'));
						$juradosel = $this->input->post('juradosel');
						break;
				}
			}else{
				$querycolumns.="$fieldtemp=$valuetemp, ";
			}
		}
		$querycolumns	=substr($querycolumns, 0, -2);
		if (empty($querycolumns)){
			$response  =array(	'estado' =>'500',
								'msg'=>'Parámetros incorrectos');
		}else{
			$flagcont=true;
			switch ($table) {
				case 'personal':
					$personal = $this->general_modelo->detalleregistro($table,'codigo',$codigo);
					if(count($personal)>0 && $personal[0]['id']!=$id){
						$flagcont=false;
						$response  =array(	'estado' =>'500',
														'msg'=>'El Código <b>'.$codigo.'</b> ya se encuentra registrado.<br>No se puede registrar nuevamente.');
					}
					break;
				case 'tesis':
					if(!empty($_FILES['doc_expedito']['name'])){
						$this->load->library('upload');
						$config['upload_path']	= './public/documentos/';
						$config['allowed_types']= 'pdf|ppt|pptx|zip|rar|doc|docx|xls|xlsx|msg|bmp|gif|jpeg|jpg|tif|png|text|txt';
						$config['max_size']			= 2048;
						$config['encrypt_name'] = TRUE;
						$this->upload->initialize($config);		
						if (!$this->upload->do_upload('doc_expedito')){
							$flagcont=false;
							$response  =array(	'estado' =>'500',
															'msg'=>$this->upload->display_errors());
						}else{
							$uploaddata = $this->upload->data();
							$documento = base_url().'public/documentos/'.$uploaddata['file_name'];
							$querycolumns.=",doc_expedito='$documento'";
						}
					}
					if(!empty($_FILES['acta_sustentacion']['name'])){
						$this->load->library('upload');
						$config['upload_path']	= './public/documentos/';
						$config['allowed_types']= 'pdf|ppt|pptx|zip|rar|doc|docx|xls|xlsx|msg|bmp|gif|jpeg|jpg|tif|png|text|txt';
						$config['max_size']			= 2048;
						$config['encrypt_name'] = TRUE;
						$this->upload->initialize($config);		
						if (!$this->upload->do_upload('acta_sustentacion')){
							$flagcont=false;
							$response  =array(	'estado' =>'500',
															'msg'=>$this->upload->display_errors());
						}else{
							$uploaddata = $this->upload->data();
							$documento = base_url().'public/documentos/'.$uploaddata['file_name'];
							$querycolumns.=",acta_sustentacion='$documento'";
						}
					}
					if($estadoin=='4'){
						if(count($juradosel)<4){
							$flagcont=false;
							$response  =array(	'estado' =>'500',
															'msg'=>'Se necesita seleccionar 4 Jurados');
						}else{
							$jurado0=$juradosel[0];
							$jurado1=$juradosel[1];
							$jurado2=$juradosel[2];
							$jurado3=$juradosel[3];
							$querycolumns.=",jurado1='$jurado0',jurado2='$jurado1',jurado3='$jurado2',jurado4='$jurado3'";
						}
					}
					break;
				default:
					break;
			}
			if($flagcont){
				if($this->general_modelo->actualizarregistro($table,$querycolumns,$id)){
					switch ($table) {
						case 'contenedor':
							$registrosreserva= $this->registroslistado('reserva','^5','');
							break;
						case 'tesis':
							break;
						default:
							break;
					}

					$registros= $this->registroslistado($table,'^5',$cadena);
					$response  =array(	'estado' =>'201',
													'registros' =>$registros['registros'],
													'registroslista' =>$registros['registroslista'],
													'registrosreserva' =>$registrosreserva['registros'],
													'cadena' =>$registros['cadena']);
				}else{
					$response  =array(	'estado' =>'500',
													'msg'=>'Error al registrar en la BD');
				}
			}
		}
		echo json_encode($response);
	}

	function detalleregistro(){
		
		$table=	strip_tags($this->input->post('table'));
		$id= strip_tags($this->input->post('id'));

		$this->form_validation->set_rules('table', 'table', 'trim|required');
		$this->form_validation->set_rules('id', 'id', 'trim|required');
		if ($this->form_validation->run() == FALSE){
			$response = array(	'estado' =>'500',
								'msg'=>'Parámetros incorrectos');
		}else{
			$table =trim($this->db->escape_like_str($table));
			
			switch ($table) {
				case 'nave':
					$registros= $this->general_modelo->detalleregistro($table,'id',$id);
					$registros[0]['id'] = str_pad($registros[0]['id'], 6, '0', STR_PAD_LEFT);
					$response  =array(	'estado' =>'200',
										'registro' =>$registros[0]);
					break;
				case 'personal':
					$registros= $this->general_modelo->detalleregistro($table,'id',$id);
					$registros[0]['codigo'] = str_pad($registros[0]['codigo'], 8, '0', STR_PAD_LEFT);
					$response  =array(	'estado' =>'200',
										'registro' =>$registros[0]);
					break;
				case 'alumno':
					$registros= $this->general_modelo->detalleregistro($table,'codigo',$id);
					if(count($registros)==0){
						$response = array(	'estado' =>'500',
											'msg'=>'El código <b>'.$id.'</b> no esta registrado');
					}else{
						$response  =array(	'estado' =>'200',
											'registro' =>$registros[0]);
					}
					//$registros[0]['codigo'] = str_pad($registros[0]['codigo'], 8, '0', STR_PAD_LEFT);
					break;
				case 'tesis':
					$registros= $this->general_modelo->detalleregistro($table,'id',$id);
					$alumno= $this->general_modelo->detalleregistro('alumno','id_alum',$registros[0]['alumno']);
					$registros[0]['codigo']=$alumno[0]['codigo'];
					$registros[0]['ape_nom']=$alumno[0]['ape_nom'];
					$response  =array(	'estado' =>'200',
													'registro' =>$registros[0]);
					break;
				default:
					$registros= $this->general_modelo->detalleregistro($table,'id',$id);
					$response  =array(	'estado' =>'200',
													'registro' =>$registros[0]);
					break;
			}
		}
		log_message('debug',$this->db->last_query());
		echo json_encode($response);
	}

	function subircontenedor(){

		$cadena= strip_tags($this->input->post('reserva'));
		$table= strip_tags($this->input->post('table'));
		$fecha = date('Y-m-d H:i:s');

		$this->form_validation->set_rules('reserva', 'reserva', 'trim|required');
		if ($this->form_validation->run() == FALSE){
			$response = array(	'estado' =>'500',
								'msg'=>'Parámetros incorrectos');
		}else{
			$this->load->library('upload');
			$config['upload_path']		= './public/documentos/';
			$config['allowed_types'] 		= 'xls';
			$config['max_size']			= 2048;
			$config['file_name'] 			= round(microtime(true)).'.xls';
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('excel')){
				$response  =array(	'estado' =>'500',
									'msg'=>$this->upload->display_errors());
			}else{
				$uploaddata = $this->upload->data();
				$excel = 'public/documentos/'.$uploaddata['file_name'];
				$this->load->library('excel_reader');
				$this->excel_reader->read($excel);
				$worksheet = $this->excel_reader->sheets[0];
				$cells = $worksheet['cells'];
				$cont=0;
				$msg='';
				$resultados='';
				$flagcont=true;				
				$contcell=count($cells)-1;
				if($contcell<=0){
					unlink('./public/documentos/'.$uploaddata['file_name']);
					$response = array(	'estado' =>'500',
										'msg'=>'El archivo no contiene registros de contenedores');
				}else{
					$reserva = $this->general_modelo->detallereserva($cadena);
					$contenedores = $this->general_modelo->listado('contenedor','^5',$cadena);
					$contcont=count($contenedores);
					$disponibles=$reserva[0]['cantidad']-$contcont-$contcell;
					$flagtable=false;
					switch ($table) {
						case 'contenedor':
							if($disponibles<0 && $reserva[0]['tipo']=='1'){
								$flagtable=true;
							}else{
								$flagtable=false;
							}	
							break;
						case 'contenedorc':
							$flagtable=false;
							break;
						default:
							break;
					}

					if($flagtable){
						$flagcont=false;
						$msg='Ya estan registrados '.$contcont.' de '.$reserva[0]['cantidad'].' contenedores.<br>No se puede registrar los '.$contcell.' contenedores del archivo';					
					}else{
						foreach($cells as $item):
							if($cont>0){
								$orden=trim($item['1']);
								$prefijo=trim($item['2']);
								$numero=trim($item['3']);
								$tara=floatval(trim($item['4']));
								$peso=floatval(trim($item['5']));
								$tamano=trim($item['6']);
								$tipo=trim($item['7']);
								$precinto1=trim($item['8']);
								$precinto2=trim($item['9']);
								$precinto3=trim($item['10']);
								$precinto4=trim($item['11']);
								$precinto5=trim($item['12']);
								$precinto6=trim($item['13']);
								$precinto7=trim($item['14']);
								$precinto8=trim($item['15']);
								$precinto9=trim($item['16']);
								$precinto10=trim($item['17']);
								$precintos =($precinto1=='' ? '' : $precinto1).' '.($precinto2=='' ? '' : '| '.$precinto2).' '.
										($precinto3=='' ? '' : '| '.$precinto3).' '.($precinto4=='' ? '' : '| '.$precinto4).' '.
										($precinto5=='' ? '' : '| '.$precinto5).' '.($precinto6=='' ? '' : '| '.$precinto6).' '.
										($precinto7=='' ? '' : '| '.$precinto7).' '.($precinto8=='' ? '' : '| '.$precinto8).' '.
										($precinto9=='' ? '' : '| '.$precinto9).' '.($precinto10=='' ? '' : '| '.$precinto10);

								switch ($tipo) {
									case '2':
										$tipostr = 'RZ - REFORZADO';
										break;
									case '3':
										$tipostr = 'DC - DRY CONTAINER';
										break;
									case '4':
										$tipostr = 'ST - STANDARD';
										break;
									default:
										$tipostr = '';	
										break;
								}

								$resultados.="<tr>
												<td>$orden</td>
												<td>$prefijo</td>
												<td>$numero</td>
												<td>$tara</td>
												<td>$peso</td>
												<td>$tamano</td>
												<td>$tipostr</td>
												<td>$precintos</td>
												<td>";

								if($prefijo!='' && $numero!='' && $peso!='' && $tara!='' && $tamano!=''){
									if(strlen($prefijo)<=4){
										if(strlen($numero)<=7){
											switch ($table) {
												case 'contenedor':
													$contenedor = $this->general_modelo->identificarcontenedor($prefijo,$numero,$cadena);
													break;
												case 'contenedorc':
													$contenedor = $this->general_modelo->identificarcontenedorc($prefijo,$numero,$cadena);
													break;
												default:
													break;
											}
											$idcont=count($contenedor);
											if($idcont>0){
												$flagcont=false;
												$resultado="<span class='text-danger'>El prefijo <b>$prefijo</b> y número <b>$numero</b> ya se han registrado anteriormente</span>";
												$msg='Ocurrieron errores al leer el archivo';
											}else{
												$resultado="<span class='text-info'>Sin errores, pero no se registró</span>";
											}
										}else{
											$flagcont=false;
											$resultado="<span class='text-danger'>El numero <b>$numero</b> tiene mas de 7 caracteres</span>";
											$msg='Ocurrieron errores al leer el archivo';
										}
									}else{
										$flagcont=false;
										$resultado="<span class='text-danger'>El prefijo <b>$prefijo</b> tiene mas de 4 caracteres</span>";
										$msg='Ocurrieron errores al leer el archivo';
									}
								}else{
									$flagcont=false;
									$resultado="<span class='text-danger'>Datos obligatorios: prefijo, número, peso, tara o tamaño incompletos</span>";
									$msg='Ocurrieron errores al leer el archivo';
								}
								$resultados.="	$resultado</td>
											</tr>";
							}
						$cont++;
						endforeach;
					}
					if($flagcont){
						$cont=0;
						$resultados='';
						foreach($cells as $item):
							if($cont>0){
								$orden=trim($item['1']);
								$prefijo=trim($item['2']);
								$numero=trim($item['3']);
								$tara=floatval(trim($item['4']));
								$peso=floatval(trim($item['5']));
								$tamano=trim($item['6']);
								$tipo=trim($item['7']);
								$precinto1=trim($item['8']);
								$precinto2=trim($item['9']);
								$precinto3=trim($item['10']);
								$precinto4=trim($item['11']);
								$precinto5=trim($item['12']);
								$precinto6=trim($item['13']);
								$precinto7=trim($item['14']);
								$precinto8=trim($item['15']);
								$precinto9=trim($item['16']);
								$precinto10=trim($item['17']);
								$precintos =($precinto1=='' ? '' : $precinto1).' '.($precinto2=='' ? '' : '| '.$precinto2).' '.
										($precinto3=='' ? '' : '| '.$precinto3).' '.($precinto4=='' ? '' : '| '.$precinto4).' '.
										($precinto5=='' ? '' : '| '.$precinto5).' '.($precinto6=='' ? '' : '| '.$precinto6).' '.
										($precinto7=='' ? '' : '| '.$precinto7).' '.($precinto8=='' ? '' : '| '.$precinto8).' '.
										($precinto9=='' ? '' : '| '.$precinto9).' '.($precinto10=='' ? '' : '| '.$precinto10);

								$querycolumns = "reserva,prefijo,numero,tara,peso,tamano,tipocontenedor,precinto1,precinto2,precinto3,precinto4,precinto5,precinto6,precinto7,precinto8,precinto9,precinto10,estado";
								$queryvalues = "'$cadena','$prefijo','$numero','$tara','$peso','$tamano','$tipo','$precinto1','$precinto2','$precinto3','$precinto4','$precinto5','$precinto6','$precinto7','$precinto8','$precinto9','$precinto10','1'";
								$this->general_modelo->nuevoregistro($table,$querycolumns,$queryvalues);
								switch ($tipo) {
									case '2':
										$tipostr = 'RZ - REFORZADO';
										break;
									case '3':
										$tipostr = 'DC - DRY CONTAINER';
										break;
									case '4':
										$tipostr = 'ST - STANDARD';
										break;
									default:
										$tipostr = '';	
										break;
								}

								$resultados.="<tr>
												<td>$orden</td>
												<td>$prefijo</td>
												<td>$numero</td>
												<td>$tara</td>
												<td>$peso</td>
												<td>$tamano</td>
												<td>$tipostr</td>
												<td>$precintos</td>
												<td><span class='text-success'>Registrado correctamente</span></td>
											</tr>";
							}
							$cont++;
						endforeach;
						$registrosreserva= $this->registroslistado('reserva','^5','');
						$registros= $this->registroslistado($table,'^5',$cadena);
						$response = array(	'estado' =>'200',
											'resultados' =>$resultados,
											'registros' =>$registros['registros'],
											'registrosreserva' =>$registrosreserva['registros']);
					}else{
						unlink('./public/documentos/'.$uploaddata['file_name']);
						$response = array(	'estado' =>'205',
											'resultados' =>$resultados,
											'msg'=>$msg);
					}
				}
			}
		}
		echo json_encode($response);
	}

}

