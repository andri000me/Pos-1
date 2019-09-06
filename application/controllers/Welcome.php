<?php
class Welcome extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
	}
	
	function index(){
		$x['jurnal'] = $this->db->get('tbl_jual');
		$this->load->view('admin/v_index',$x);
	}
	function hapus($id){
		$this->db->delete('tbl_jual', array('jual_nofak' => $id));
		redirect('welcome');
	}
}