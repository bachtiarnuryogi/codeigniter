<?php 
 
class laptop extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper(array('form', 'url'));

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
 
	}
 
	function index(){
		$data['products'] = $this->m_data->tampil_laptop()->result();
		$this->load->view('templates/header');
		$this->load->view('category/v_laptop',$data);
		$this->load->view('templates/footer');
	}
}