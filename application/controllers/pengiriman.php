<?php
class Pengiriman extends CI_Controller{
	function __construct(){
		parent::__construct();
		
		$this->load->model('m_pembayaran');
	}

	function login()
	{
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
	}

	function index()
	{
		$this->login();
		$data['order'] = $this->db->get('tbl_order')->result();
		$data['manifest'] = $this->m_pembayaran->get_pengiriman();
		$this->load->view('pembayaran/v_manifest',$data);
	}

	function cetak()
	{
		$data['cetak'] = $this->m_pembayaran->get_pengiriman();
		$this->load->view('print/v_cetak_pengiriman',$data);
	}

	function add_kirim()
	{
		$data  = array(
            'tgl_kirim' => $this->input->post('tgl'),
            'no_order' => $this->input->post('order'),
            'status' => $this->input->post('status'),
            'id_order' => $this->input->post('get_order')
        );
        $this->m_pembayaran->insert_kirim('tbl_pengiriman',$data);
        redirect('pengiriman'); 
	}

	function get_order($id){
        if($id != 'null'):
        $result = $this->m_pembayaran->get_id($id)->result();
        echo json_encode($result);
        endif;
    }

    function hold($id)
    {
    	$this->m_pembayaran->delete_hold($id);
		$this->session->set_flashdata('msg','success-delete');
		redirect('pengiriman');
    }

    //kg ndi kodingane
}