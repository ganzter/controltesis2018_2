<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';

class Pdf extends TCPDF{
	function __construct(){
		parent::__construct();
	}
	public function Footer() {
		$this->SetY(-15);
		$this->SetFont('helvetica', '', 10);
		$this->Cell(0, 10, 'DOCUMENTO USO INTERNO', 0, false, 'C', 0, '', 0, false, 'T', 'M');
	}
}
