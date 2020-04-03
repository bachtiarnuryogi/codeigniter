<<<<<<< HEAD
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
 
=======
<?php 
 
 
class crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper(array('form', 'url'));

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
 
	}
 
	function tambah_aksi(){
		$product_id		= $this->input->post('product_id');
		$vendor_id 		= $this->input->post('vendor_id');
		$product_name 	= $this->input->post('product_name');
		$product_price 	= $this->input->post('product_price');
		$product_desc 	= $this->input->post('product_desc');
		$category 		= $this->input->post('category');

		$config['upload_path']          = './gambar/product/'; //direktori
		$config['allowed_types']        = 'gif|jpg|png'; // file yang di perbolehkan
		$config['max_size']             = 100; // maksimal ukuran
		$config['max_width']            = 1024; //lebar maksimal
		$config['max_height']           = 768; //tinggi maksimal
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('product/v_product', $error);
		}else{
			$this->upload->data("file_name");
		}
		$foto = $this->upload->data("file_name");
		$data = array(
			'prod_id' => $product_id,
			'vend_id' => $vendor_id,
			'prod_name' => $product_name,
			'prod_price' => $product_price,
			'prod_desc' => $product_desc,
			'category' => $category,
			'image' => $foto
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
	$this->load->view('templates/header');
	$this->load->view('product/v_edit',$data);
	$this->load->view('templates/footer');
	}

	function update(){
	$prod_id 		= $this->input->post('prod_id');
	$vend_id 		= $this->input->post('vend_id');
	$prod_name 		= $this->input->post('prod_name');
	$prod_price		= $this->input->post('prod_price');
	$prod_desc 		= $this->input->post('prod_desc');

	$config['upload_path']          = './gambar/product/'; //direktori
	$config['allowed_types']        = 'gif|jpg|png'; // file yang di perbolehkan
	$config['max_size']             = 100; // maksimal ukuran
	$config['max_width']            = 1024; //lebar maksimal
	$config['max_height']           = 768; //tinggi maksimal
 	$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('product/v_product', $error);
		}else{
			$this->upload->data("file_name");
		}
	$foto = $this->upload->data("file_name");
	$data = array(
		'prod_id' => $prod_id,
		'vend_id' => $vend_id,
		'prod_name' => $prod_name,
		'prod_price' => $prod_price,
		'prod_desc' => $prod_desc,
		'image' => $foto
	);
 
	$where = array(
		'prod_id' => $prod_id
	);
 
	$this->m_data->update_product($where,$data,'products');
	redirect('product');
	}
 
>>>>>>> 3549e69... codeigniter
}