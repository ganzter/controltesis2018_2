<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General_modelo extends CI_Model{

	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	function listado($table,$estado,$cadena=''){
		switch ($table) {
			case 'contenedor':
				$query = $this->db->query("SELECT * FROM $table WHERE estado REGEXP ? AND reserva = ? ORDER BY id DESC", array('^['.$estado.']',$cadena));
				break;
			case 'alumno':
				$query = $this->db->query("	SELECT alumno.*, facultad.nombre as facultad
											FROM alumno
											INNER JOIN facultad ON alumno.id_facultad = facultad.id_facultad
											ORDER BY alumno.id_alum DESC", array());
				break;
			case 'personaltipo':
				$query = $this->db->query("	SELECT personal.*, tipopersonal.descripcion as tipopersonaldes
																FROM personal
																INNER JOIN tipopersonal ON personal.tipopersonal = tipopersonal.id
																WHERE personal.estado REGEXP ? AND personal.tipopersonal = ?
																ORDER BY personal.id DESC", array('^['.$estado.']',$cadena));
				break;
			case 'tesis':
				$query = $this->db->query("	SELECT tesis.*,
																alumno.codigo,
																alumno.id_alum,
																alumno.ape_nom AS alumno,
																CONCAT(docente.nombres,' ',docente.apell_pat,' ',docente.apell_mat) AS asesor
																FROM tesis
																LEFT JOIN alumno ON tesis.alumno = alumno.id_alum
																LEFT JOIN asesor ON tesis.asesor = asesor.id
																LEFT JOIN docente ON asesor.docente = docente.id
																ORDER BY tesis.id DESC", array('^['.$estado.']'));
				break;
			case 'alumno':
				$query = $this->db->query("	SELECT alumno.*, facultad.nombre as facultad
											FROM alumno
											INNER JOIN facultad ON alumno.id_facultad = facultad.id_facultad
											ORDER BY alumno.id_alum DESC", array());
				break;
			case 'docente':
				$query = $this->db->query("	SELECT docente.*, CONCAT(docente.nombres,' ',docente.apell_pat,' ',docente.apell_mat) as nombres
																FROM docente
																ORDER BY docente.id DESC", array());
				break;
			case 'asesor':
				$query = $this->db->query("	SELECT asesor.*, CONCAT(docente.nombres,' ',docente.apell_pat,' ',docente.apell_mat) as nombres
																FROM asesor
																LEFT JOIN docente ON asesor.docente = docente.id
																ORDER BY asesor.id DESC", array());
				break;
			case 'docente':
				$query = $this->db->query("	SELECT docente.*, CONCAT(docente.nombres,' ',docente.apell_pat,' ',docente.apell_mat) as nombres
																FROM docente
																ORDER BY docente.id DESC", array());
				break;
			default:
				$query = $this->db->query("SELECT * FROM $table WHERE estado REGEXP ? ORDER BY id DESC", array('^['.$estado.']'));
				break;
		}
		return $query->result_array();
	}
	function nuevoregistro($table,$querycolumns,$queryvalues){
		return $this->db->query("INSERT INTO $table ($querycolumns) VALUES ($queryvalues)");
	}
	function actualizarregistro($table,$querycolumns,$id){
		return $this->db->query("UPDATE $table SET $querycolumns WHERE id=?", array($id));
	}
	function detallereserva($id){
		$query = $this->db->query("SELECT reserva.id, 
									reserva.tipo, 
									reserva.fecha, 
									reserva.booking, 
									reserva.commodity, 
									reserva.deposito, 
									reserva.cantidad,
									reserva.aduana, 
									reserva.embarque, 
									reserva.transbordo, 
									reserva.destino, 
									TRIM(puerto.dpuerto) as destinostr,
									nave.id as atencion, 
									COALESCE(contacto.id,'') as contactoid, 
									COALESCE(contacto.nombres,'') as contacto, 
									reserva.estado, 
									reserva.documento, 
									embarcador.id as embarcadorid,
									embarcador.nombre_o_razon_social as embarcador,
									nave.id as naveid,
									nave.id as naveid2,
									nave.nave as nave,
									nave.viaje as viaje,
									nave.rumbo as rumbo,
									nave.etb as etb,
									linea.id as lineaid, 
									linea. descripcion as linea,
									aduana.agencia as agencia,
									(SELECT COUNT(contenedor.id) FROM contenedor WHERE contenedor.reserva=reserva.id AND contenedor.estado<>'5') AS contenedores
									FROM reserva 
									INNER JOIN linea ON reserva.linea = linea.id
									INNER JOIN nave ON reserva.nave = nave.id
									INNER JOIN embarcador ON reserva.embarcador = embarcador.id
									INNER JOIN puerto as puerto ON reserva.destino = puerto.id
									INNER JOIN aduana ON reserva.aduana = aduana.id
									LEFT JOIN contacto ON reserva.contacto = contacto.id
									WHERE reserva.id = ?
									GROUP BY reserva.id",
									array($id));
		return $query->result_array();
	}
	function detalleregistro($table,$campo,$id){
		$query = $this->db->query("SELECT * FROM $table WHERE $campo=?", array($id));
		return $query->result_array();
	}
	function busqueda($table,$campo,$estado,$cadena=''){
		switch ($table) {
			case 'alumno':
				$query = $this->db->query("	SELECT alumno.*, facultad.nombre as facultad
																FROM alumno
																INNER JOIN facultad ON alumno.id_facultad = facultad.id_facultad
																WHERE alumno.$campo LIKE ?
																ORDER BY alumno.id_alum DESC
																LIMIT 100", array('%'.mb_strtoupper($cadena).'%'));
				break;
			case 'docente':
				$query = $this->db->query("	SELECT alumno.*, facultad.nombre as facultad
																FROM alumno
																INNER JOIN facultad ON alumno.id_facultad = facultad.id_facultad
																WHERE alumno.$campo LIKE ?
																ORDER BY alumno.id_alum DESC
																LIMIT 100", array('%'.mb_strtoupper($cadena).'%'));
				break;
			case 'tesis':
				$query = $this->db->query("	SELECT tesis.*,
																alumno.codigo,
																alumno.id_alum,
																alumno.ape_nom AS alumno,
																CONCAT(docente.nombres,' ',docente.apell_pat,' ',docente.apell_mat) AS asesor
																FROM tesis
																INNER JOIN alumno ON tesis.alumno = alumno.id_alum AND alumno.$campo LIKE ?
																LEFT JOIN asesor ON tesis.asesor = asesor.id
																LEFT JOIN docente ON asesor.docente = docente.id
																ORDER BY tesis.id DESC", array('%'.$cadena.'%'));	
				break;
			default:	
				$query = $this->db->query("SELECT * FROM $table WHERE estado REGEXP ? AND $campo LIKE ?", array('^['.$estado.']','%'.$cadena.'%'));	
				break;
		}
		return $query->result_array();
	}
	function busquedafecha($table,$campo,$estado,$fechainicio,$fechafin,$cadena=''){
		switch ($table) {
			case 'pesaje':
				$query = $this->db->query("SELECT pesaje.*,
											embarcador.nombre_o_razon_social as embarcadorrazon
											FROM pesaje 
											INNER JOIN embarcador ON pesaje.embarcador = embarcador.id
											WHERE DATE(pesaje.$campo)>=? AND DATE(pesaje.$campo)<=? AND pesaje.estado REGEXP ? 
											ORDER BY pesaje.id DESC
											", array($fechainicio,$fechafin,'^['.$estado.']'));
				break;
			default:	
				$query = $this->db->query("SELECT * FROM $table WHERE estado REGEXP ? AND $campo LIKE ?", array('^['.$estado.']','%'.$cadena.'%'));	
				break;
		}
		return $query->result_array();
	}
	function ultimos($table,$estado,$cadena=''){
		switch ($table) {
			case 'alumno':
				$query = $this->db->query("	SELECT alumno.*, facultad.nombre as facultad
											FROM alumno
											INNER JOIN facultad ON alumno.id_facultad = facultad.id_facultad
											ORDER BY alumno.id_alum DESC
											LIMIT 100", array());
				break;
			default:
				$query = $this->db->query("SELECT * FROM $table WHERE estado REGEXP ? ORDER BY id DESC LIMIT 100", array('^['.$estado.']'));	
				break;
		}
		return $query->result_array();
	}
}
?>