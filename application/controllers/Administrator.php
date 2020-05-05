<?php
class Administrator extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('mlogin');
    }
    function index(){
        $x['judul']="Silahkan Masuk..!";
        $this->load->view('login',$x);
    }
    function cekuser(){
        $username=strip_tags(stripslashes($this->input->post('username',TRUE)));
        $password=strip_tags(stripslashes($this->input->post('password',TRUE)));
        $u=$username;
        $p=$password;
        $cadmin=$this->mlogin->cekadmin($u,$p);
        if($cadmin->num_rows > 0){
         $this->session->set_userdata('masuk',true);
         $this->session->set_userdata('user',$u);
         $xcadmin=$cadmin->row_array();
         if($xcadmin['user_level']=='1')
            $this->session->set_userdata('akses','1');
            $idadmin=$xcadmin['user_id'];
            $user_nama=$xcadmin['user_nama'];
            $user=$xcadmin['user_username'];
            $this->session->set_userdata('idadmin',$idadmin);
            $this->session->set_userdata('nama',$user_nama);
            $this->session->set_userdata('user',$user);
         if($xcadmin['user_level']=='2')
             $this->session->set_userdata('akses','2');
             $idadmin=$xcadmin['user_id'];
             $user_nama=$xcadmin['user_nama'];
              $user=$xcadmin['user_username'];
             $this->session->set_userdata('idadmin',$idadmin);
             $this->session->set_userdata('nama',$user_nama);
             $this->session->set_userdata('user',$user);
         //Front Office
           
         
         
        }
        
        if($this->session->userdata('masuk')==true){
            redirect('administrator/berhasillogin');
        }else{
            redirect('administrator/gagallogin');
        }
    }
        function berhasillogin(){
            redirect('welcome');
        }
        function gagallogin(){
            $url=base_url('administrator');
            echo $this->session->set_flashdata('msg','<label class="label label-danger">Username dan pasword salah !!</label>');
            redirect($url);
        }
        function logout(){
            $url=base_url('administrator');
            $this->session->sess_destroy();
            redirect($url);
        }
       
}