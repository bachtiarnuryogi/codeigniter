<?php 

class insert_product extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
		$this->load->view('templates/header');
		$this->load->view('v_insert_product');
		$this->load->view('templates/footer');
	}
}