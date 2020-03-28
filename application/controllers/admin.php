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
}