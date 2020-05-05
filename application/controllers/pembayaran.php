<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation'); 
        $this->load->model('m_pembayaran');       
    
    }

    public function index()
    {
        $this->load->view('pembayaran/v_pembayaran');
    } 

    function add_bayar()
    {
        $this->load->view('pembayaran/v_add_bayar'); 
    }
    function aksi_bayaran()
    {
        $data  = array(
            'nama_penerima' => $this->input->post('nama_penerima'),
            'no_order' => $this->m_pembayaran->cek(),
            'notlp_penerima' => $this->input->post('tlp_penerima'),
            'isi' => $this->input->post('isi'),
            'berat' => $this->input->post('berat'),
            'drop_point' => $this->input->post('drop_point'),
            'nama_pengirim' => $this->input->post('nama_pengirim'),
            'tlp_pengirim' => $this->input->post('tlp_pengirim'),
            'tgl_order' => $this->input->post('tgl_order'),
            'id_level' => $this->input->post('level_id')
        );
        $this->m_pembayaran->add('tbl_order',$data);
        redirect('pembayaran'); 
    }

    function edit($id){
        $where = array('id_order' => $id);
        $data['user'] = $this->m_pembayaran->edit_data($where,'tbl_order')->result();
        $this->load->view('pembayaran/v_edit_bayar',$data);
    }

    function aksi_editbayaran()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama_penerima');
        $no_order = $this->m_pembayaran->cek();
        $notlp = $this->input->post('tlp_penerima');
        $isi = $this->input->post('isi');
        $berat = $this->input->post('berat');
        $drop_point = $this->input->post('drop_point');
        $nama_terima = $this->input->post('nama_pengirim');
        $tlp_terima = $this->input->post('tlp_pengirim');
        $tgl_order = $this->input->post('tgl_order');
        $level = $this->input->post('level_id');

        $data  = array(
            'nama_penerima' => $nama,
            'notlp_penerima' => $notlp,
            'no_order' => $no_order,
            'isi' => $isi,
            'berat' => $berat,
            'drop_point' => $drop_point,
            'nama_pengirim' => $nama_terima,
            'tlp_pengirim' => $tlp_terima,
            'tgl_order' => $tgl_order,
            'id_level' => $level
        );
        $where = array(
            'id_order' => $id
        );

        $this->m_pembayaran->update_data($where,$data,'tbl_order');
        redirect('pembayaran'); 
    }

    function cetak_resi()
    {
        $cetak = htmlspecialchars($this->uri->segment(3),ENT_QUOTES);
        $result = $this->m_pembayaran->get_per_id($cetak);
        if($result->num_rows() > 0){
            $row = $result->row_array();
            $x['nama'] = $row['nama_penerima'];
            $x['no_order'] = $row['no_order'];
            $x['notlp'] = $row['notlp_penerima'];
            $x['isi'] = $row['isi'];
            $x['berat'] = $row['berat'];
            $x['drop_point'] = $row['drop_point'];
            $x['nama_terima'] = $row['nama_pengirim'];
            $x['tlp_terima'] = $row['tlp_pengirim'];
            $x['tgl_order'] = $row['tgl_order'];
            $this->m_pembayaran->update_status($cetak);
            $this->load->view('print/v_cetak_bayaran',$x);
        }else{
            redirect('pembayaran');
        }
    }

    function cetak_unresi()
    {
        $cetak = htmlspecialchars($this->uri->segment(3),ENT_QUOTES);
        $result = $this->m_pembayaran->get_per_id($cetak);
        if($result->num_rows() > 0){
            $this->m_pembayaran->update_unstatus($cetak);
            redirect('pembayaran');
        }else{
            redirect('pembayaran');
        }
    }

    function hapus_pembayaran($id){
        $this->m_pembayaran->delete($id);
        $this->session->set_flashdata('msg','success-delete');
        redirect('pembayaran');
    }



    

    

}

