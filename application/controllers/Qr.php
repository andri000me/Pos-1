<?php
class Qr extends CI_Controller{
	function __construct(){
		parent::__construct();
			
	}

	public function index()


 {
 	$this->load->library('ciqrcode');
			$this->load->helper('url');
 	error_reporting(0);

	$qr['data'] = 'Dayat';

	$qr['level'] = 'H';
	$qr['size'] = 10;
	$qr['savename'] = FCPATH.'qr.png';
	$this->ciqrcode->generate($qr);


	echo '<img src="'.base_url().'qr.png" />';

	 }
}