<?php 

class product extends CI_Controller{
 
	function __construct(){
		parent::__construct();	
		$this->load->model('m_data');
		$this->load->helper('url');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$data['products'] = $this->m_data->tampil_data()->result();
		$this->load->view('templates/header',$data);
		$this->load->view('v_product',$data);
		$this->load->view('templates/footer',$data);
	}
}