<?php
class M_pembayaran extends CI_Model{

	function insert_kirim($table,$data)
	{
		return $this->db->insert($table,$data);
	}
	function get_pengiriman(){
		$this->db->join('tbl_order','tbl_pengiriman.id_order=tbl_order.id_order','left');
		return $this->db->get('tbl_pengiriman')->result();
	}
	function add($table,$data)
	{
		return $this->db->insert($table,$data);
	}

	function update_data($where,$data,$table)
	{
		$this->db->where($where);
        $this->db->update($table,$data);
	}

	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function get_per_id($cetak){
		$query = $this->db->get_where('tbl_order', array('id_order' => $cetak));
		return $query;
	}
	function update_status($cetak){
		$data = array(
		        'print' => 1
		);
		$this->db->where('id_order', $cetak);
		$this->db->update('tbl_order', $data);
	}
	function update_unstatus($cetak){
		$data = array(
		        'print' => 0
		);
		$this->db->where('id_order', $cetak);
		$this->db->update('tbl_order', $data);
	}

	function get_id($id){
        $hsl=$this->db->query("SELECT * FROM tbl_order where id_order='$id'");
        return $hsl;
    }

	public function pengguna()
	{   
				$this->db->join('tbl_user','user_id=id_level','LEFT');
        $query = $this->db->get_where('tbl_order', array('id_level' => $this->session->userdata('idadmin')))->result();
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}

	function delete_hold($id){
		$this->db->where('id_kirim', $id);
		$this->db->delete('tbl_pengiriman');
	}

	function delete($id){
		$this->db->where('id_order', $id);
		$this->db->delete('tbl_order');
	}

	function cek(){
        $q = $this->db->query("SELECT MAX(RIGHT(no_order,7)) AS kd_max FROM tbl_order");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%07s", $tmp);
            }
        }else{
            $kd = "0009001";
        }
        return $kd;
    }


}