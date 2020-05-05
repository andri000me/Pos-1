<?php
class Welcome extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pengguna');
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
	}
	
	function index(){
		$data['pengguna'] = $this->m_pengguna->pengguna();
		$this->load->view('dashboard',$data);
	}
	
}