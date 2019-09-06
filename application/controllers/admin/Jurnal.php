<?php
class Jurnal extends CI_Controller{function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_jurnal');
		$this->load->model('m_kategori');
		$this->load->model('m_barang');
		$this->load->model('m_suplier');
		$this->load->model('m_pembelian');
		$this->load->model('m_penjualan');
	}
	function index()
	{
		if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='3'){
		$data['data']=$this->m_barang->tampil_barang();
		$data['kat']=$this->m_kategori->tampil_kategori();
		$data['jual_bln']=$this->m_jurnal->get_bulan_jurnal();
		$data['jual_thn']=$this->m_jurnal->get_tahun_jurnal();
		$this->load->view('admin/v_jurnal',$data);
		}else{
	        echo "Halaman tidak ditemukan";
	    }
		
	}
	function lap_jurnal_pertanggal(){
		$tanggal=$this->input->post('tgl');
		$x['jml']=$this->m_jurnal->get_data__total_jurnal_pertanggal($tanggal);
		$x['data']=$this->m_jurnal->get_data_jurnal_pertanggal($tanggal);
		$this->load->view('admin/laporan/v_jurnal_pertanggal',$x);
	}
	function lap_jurnal_perbulan(){
		$bulan=$this->input->post('bln');
		$x['jml']=$this->m_jurnal->get_total_jurnal_perbulan($bulan);
		$x['data']=$this->m_jurnal->get_jurnal_perbulan($bulan);
		$this->load->view('admin/laporan/v_jurnal_perbulan',$x);
	}
	function lap_jurnal_pertahun(){
		$tahun=$this->input->post('thn');
		$x['jml']=$this->m_jurnal->get_total_jurnal_pertahun($tahun);
		$x['data']=$this->m_jurnal->get_jurnal_pertahun($tahun);
		$this->load->view('admin/laporan/v_jurnal_pertahun',$x);
	}
}