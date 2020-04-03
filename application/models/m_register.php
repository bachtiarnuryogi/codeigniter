<<<<<<< HEAD
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_register extends CI_Model{
	function daftar($data)
	{
		$this->db->insert('user', $data);
	}
=======
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_register extends CI_Model{
	function daftar($data)
	{
		$this->db->insert('user', $data);
	}
>>>>>>> 3549e69... codeigniter
}