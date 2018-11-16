<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil_modelo extends CI_Model{

	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	function listado($table,$estado,$cadena,$tipo = NULL){
		switch ($table) {
			case 'menu':
				$query = $this->db->query("SELECT * FROM $table WHERE padre = 0 ORDER BY id DESC", array('^['.$estado.']',$cadena));
				break;	
			case 'submenu':
				$query = $this->db->query("SELECT * FROM menu WHERE estado REGEXP ? AND padre=? ORDER BY id DESC", array('^['.$estado.']',$cadena));
				break;			
			case 'menuperfil':
				$query = $this->db->query("	SELECT m.*,mp.estado reg 
																FROM menu m 
																LEFT JOIN menu_perfil mp ON mp.menu = m.id AND mp.perfil = ? 
																WHERE m.estado REGEXP ? ORDER BY m.id DESC", array($cadena,'^['.$estado.']'));
				break;
			case 'perfil':
				$query = $this->db->query("SELECT * FROM perfil WHERE estado REGEXP ? ORDER BY id DESC", array('^['.$estado.']'));
				break;
			case 'usuario':
				$query = $this->db->query("SELECT u.*,p.id idperfil ,p.descripcion FROM usuario u JOIN perfil p ON p.id = u.perfil WHERE u.estado REGEXP ? ORDER BY u.id DESC", array('^['.$estado.']'));
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
		return $this->db->query("UPDATE $table SET $querycolumns WHERE id=$id");
	}
	function detalleregistro($table,$campo,$id){
		$query = $this->db->query("SELECT * FROM $table WHERE $campo=?", array($id));
		return $query->result_array();
	}
	function IdFind($idForan,$table,$campo,$id){
		$query = $this->db->query("SELECT  $idForan FROM $table WHERE $campo=?", array($id));
		return $query->result_array();
	}
}
?>