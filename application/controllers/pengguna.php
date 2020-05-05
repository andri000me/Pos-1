<?php
class Pengguna extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url();
            redirect($url);
        };
		$this->load->model('m_pengguna');
	}
	function index(){
	if($this->session->userdata('akses')=='1'){
		$data['data']=$this->m_pengguna->get_pengguna();
		$this->load->view('pengguna/v_pengguna',$data);
	}else{
        echo "Halaman tidak ditemukan";
    }
	}

	function add()
	{
		$this->load->view('pengguna/v_add');	
	}

	function tambah_pengguna(){
	if($this->session->userdata('akses')=='1'){
		$nama=$this->input->post('nama');
		$username=$this->input->post('username');
		$komisi=$this->input->post('komisi');
		$password=$this->input->post('password');
		$password2=$this->input->post('password2');
		$level=$this->input->post('level');
		if ($password2 <> $password) {
			echo $this->session->set_flashdata('msg','<label class="label label-danger">Password yang Anda Masukan Tidak Sama</label>');
			redirect('pengguna');
		}else{
			$this->m_pengguna->simpan_pengguna($nama,$username,$komisi,$password,$level);
			echo $this->session->set_flashdata('msg','<div class="alert alert-success">
			  <strong>Success!</strong> User berhasil ditambahkan.
			</div>');
			redirect('pengguna');
		}
		
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	 // function edit()
	 // {
	 // 	$data  = array(
	 // 		'user_id' => $this->input->post('kode'), 
	 // 		'user_nama' => $this->input->post('nama'), 
	 // 		'user_username' => $this->input->post('username'), 
	 // 		'komisi' => $this->input->post('komisi'), 
	 // 		'user_password' => $this->input->post('password'), 
	 // 		'user_level' => $this->input->post('password2'), 
	 // 		'user_status' => $this->input->post('level'), 
	 // 	);
	 // 	$this->load->view('v_edit',$data);		
	 // }


	function edit($id){
		$where = array('user_id' => $id);
		$data['user'] = $this->m_pengguna->edit_data($where,'tbl_user')->result();
		$this->load->view('pengguna/v_edit',$data);
	}


	function edit_pengguna(){
	if($this->session->userdata('akses')=='1'){
		$kode=$this->input->post('kode');
		$nama=$this->input->post('nama');
		$username=$this->input->post('username');
		$komisi=$this->input->post('komisi');
		$password=$this->input->post('password');
		$password2=$this->input->post('password2');
		$level=$this->input->post('level');
		if (empty($password) && empty($password2)) {
			$this->m_pengguna->update_pengguna_nopass($kode,$nama,$username,$komisi,$level);
			echo $this->session->set_flashdata('msg','<div class="alert alert-success">
				  <strong>Success!</strong> User berhasil diupdate.
				</div>');
			redirect('pengguna');
		}elseif ($password2 <> $password) {
			echo $this->session->set_flashdata('msg','<label class="label label-danger">Password yang Anda Masukan Tidak Sama</label>');
			redirect('pengguna');
		}else{
			$this->m_pengguna->update_pengguna($kode,$nama,$username,$komisi,$password,$level);
			echo $this->session->set_flashdata('msg','<label class="label label-success">Pengguna Berhasil diupdate</label>');
			redirect('pengguna');
		}
	}else{
        echo "Halaman tidak ditemukan";
    }
	}
	function nonaktifkan(){
	if($this->session->userdata('akses')=='1'){
		$kode=$this->input->post('kode');
		$this->m_pengguna->update_status($kode);
		redirect('pengguna');
	}else{
        echo "Halaman tidak ditemukan";
    }
	}

	function hapus_pengguna($id){
		$this->m_pengguna->delete($id);
		$this->session->set_flashdata('msg','success-delete');
		redirect('pengguna');
	}
}