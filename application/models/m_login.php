<<<<<<< HEAD
<?php 
 
class m_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
=======
<?php 
 
class m_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
>>>>>>> 3549e69... codeigniter
}