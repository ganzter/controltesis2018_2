<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	function __construct() {

		parent::__construct();
		$this->load->model('general_modelo');

		$this->menu=array(	'menu' =>'inicio','submenu' =>'');
		$this->avisos= array(	'Aviso' =>$this->session->userdata('aviso'),
											'Mensaje' =>$this->session->userdata('mensaje'));
	}

	function ingresar(){
		$this->load->view('login',$this->avisos);
		$this->session->set_userdata('aviso',0);
	}

	function comprobar(){
		$this->config->load('custom');	
		$usuario= $this->input->post('username');
		$clave 	= remove_invisible_characters($this->input->post('password'));

		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		
		if ($this->form_validation->run() == FALSE){
			$this->session->set_userdata('aviso',2);
			$this->session->set_userdata('mensaje','Parámetros no permitidos');	
			redirect(base_url().'inicio/ingresar','location');
		}else{
			if($usuario == $this->config->item('superusuario')){
				if($clave == $this->config->item('superusuarioclave') ){
					$this->session->set_userdata('id',$resultado[0]['id']);
					
					$this->session->set_userdata('aviso',1);
					$this->session->set_userdata('mensaje','Bienvenido');

					redirect(base_url().'general/alumno','location');
				} else {
					$this->session->set_userdata('aviso',2);
					$this->session->set_userdata('mensaje','Contraseña incorrecta');
					redirect(base_url().'inicio/ingresar','location');
				}
			}else{
				$this->session->set_userdata('aviso',2);
				$this->session->set_userdata('mensaje','Usuario incorrecto');	
				redirect(base_url().'inicio/ingresar','location');
			}
		}
	}

	function index(){

		if($this->session->userdata('rol')=='' || $this->session->userdata('rol')=='FALSE'){
			redirect(base_url().'inicio/ingresar','location');			
		}

		$this->load->view('bases/cabezera');
		$this->load->view('bases/aside');
		$this->load->view('bases/menu',$this->menu);
		$this->load->view('bases/barra');
		$this->load->view('inicio');
		$this->load->view('bases/pie');
		$this->load->view('bases/piepanel',$this->avisos);

		$this->session->set_userdata('aviso',0);
	}

	function salir(){
		$this->session->sess_destroy();
		redirect(base_url().'inicio/ingresar','location');
	}

	function perfil(){
		$this->load->view('perfil');
	}

}