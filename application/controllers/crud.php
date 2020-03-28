<?php 
 
 
class crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
	}
 
	function tambah_aksi(){
		$product_id = $this->input->post('product_id');
		$vendor_id = $this->input->post('vendor_id');
		$product_name = $this->input->post('product_name');
		$product_price = $this->input->post('product_price');
		$product_desc = $this->input->post('product_desc');
		$image = $this->input->post('image');
 
		$data = array(
			'prod_id' => $product_id,
			'vend_id' => $vendor_id,
			'prod_name' => $product_name,
			'prod_price' => $product_price,
			'prod_desc' => $product_desc,
			'image' => $image
			);
		$this->m_data->input_data($data,'products');
		redirect('product');
	}

	function hapus($prod_id){
		$where = array('prod_id' => $prod_id);
		$this->m_data->hapus_data($where,'products');
		redirect('product');
	}

	function edit($prod_id){
	$where = array('prod_id' => $prod_id);
	$data['user'] = $this->m_data->edit_data($where,'products')->result();
	$this->load->view('templates/header',$data);
	$this->load->view('v_edit',$data);
	$this->load->view('templates/footer',$data);
	}

	function update(){
	$prod_id = $this->input->post('prod_id');
	$vend_id = $this->input->post('vend_id');
	$prod_name = $this->input->post('prod_name');
	$prod_price = $this->input->post('prod_price');
	$prod_desc = $this->input->post('prod_desc');
	$image = $this->input->post('image');
 
	$data = array(
		'prod_id' => $prod_id,
		'vend_id' => $vend_id,
		'prod_name' => $prod_name,
		'prod_price' => $prod_price,
		'prod_desc' => $prod_desc,
		'image' => $image
	);
 
	$where = array(
		'prod_id' => $prod_id
	);
 
	$this->m_data->update_product($where,$data,'products');
	redirect('product');
}
 
}