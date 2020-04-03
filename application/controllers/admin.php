<<<<<<< HEAD
<?php 
 
class admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
 		$datauser['total_user'] = $this->m_data->jumlah_user();
		$this->load->view('templates/header');
		$this->load->view('v_dashboard', $datauser);
		$this->load->view('templates/footer');
	}
=======
<?php 
 
class admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
 		$data['total_user'] = $this->m_data->jumlah_user();
 		$data['total_product'] = $this->m_data->jumlah_product();
 		$data['total_handphone'] = $this->m_data->jumlah_handphone();
 		$data['total_laptop'] = $this->m_data->jumlah_laptop();
		$this->load->view('templates/header');
		$this->load->view('v_dashboard', $data);
		$this->load->view('templates/footer');
	}
>>>>>>> 3549e69... codeigniter
}