<?php
class Agen extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_pengguna');
		$this->load->model('m_agen');
		$this->load->model('m_pembayaran');
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
	}
	
	function index(){
		$this->load->view('agen/v_agen');
	}

	function print($id){
		$cetak = htmlspecialchars($this->uri->segment(3),ENT_QUOTES);
        $result = $this->m_pembayaran->get_per_id($cetak);
        if($result->num_rows() > 0){
            $row = $result->row_array();
            $x['nama'] = $row['nama_penerima'];
            $x['notlp'] = $row['notlp_penerima'];
            $x['no_order'] = $row['no_order'];
            $x['isi'] = $row['isi'];
            $x['berat'] = $row['berat'];
            $x['drop_point'] = $row['drop_point'];
            $x['nama_terima'] = $row['nama_pengirim'];
            $x['tlp_terima'] = $row['tlp_pengirim'];
            $x['tgl_order'] = $row['tgl_order'];
            $this->m_pembayaran->update_status($cetak);
            $this->load->view('print/v_print',$x);
        }else{
            redirect('pembayaran');
        }
	}


	
}