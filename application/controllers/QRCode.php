<?php defined('BASEPATH') OR exit('No direct script access allowed');

class QRCode extends CI_Controller {


	public function index()
	{
		$this->load->view('scan_qrcode');
	}
}
