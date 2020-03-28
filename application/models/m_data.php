<?php 
 
class m_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('products');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function update_data(){
		return $this->db->get('user');
	}
 
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}
	function update_product($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function jumlah_user(){   
    $query = $this->db->get('user');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
	}

	public function jumlah_product(){   
    $query = $this->db->get('products');
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