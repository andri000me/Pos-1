<?php
class M_pengguna extends CI_Model{
	function get_pengguna(){
		$hsl=$this->db->query("SELECT * FROM tbl_user");
		return $hsl;
	}

	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
}

	function simpan_pengguna($nama,$username,$komisi,$password,$level){
		$hsl=$this->db->query("INSERT INTO tbl_user(user_nama,user_username,komisi,user_password,user_level,user_status) VALUES ('$nama','$username','$komisi',md5('$password'),'$level','1')");
		return $hsl;
	}
	function update_pengguna_nopass($kode,$nama,$username,$komisi,$level){
		$hsl=$this->db->query("UPDATE tbl_user SET user_nama='$nama',user_username='$username',komisi='$komisi',user_level='$level' WHERE user_id='$kode'");
		return $hsl;
	}
	function update_pengguna($kode,$nama,$username,$komisi,$password,$level){
		$hsl=$this->db->query("UPDATE tbl_user SET user_nama='$nama',user_username='$username',komisi='$komisi',user_password=md5('$password'),user_level='$level' WHERE user_id='$kode'");
		return $hsl;
	}
	function update_status($kode){
		$hsl=$this->db->query("UPDATE tbl_user SET user_status='0' WHERE user_id='$kode'");
		return $hsl;
	}

	function delete($id){
		$this->db->where('user_id', $id);
		$this->db->delete('tbl_user');
	}

	public function pengguna()
	{   
	    $query = $this->db->get('tbl_user');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}

	


}