<?php 
 
class upload extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		  $this->load->helper(array('form', 'url'));
	}
 
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('v_upload', array('error' => ' ' ));
		$this->load->view('templates/footer');
	}
 
	public function aksi_upload(){
		$config['upload_path']          = './gambar/'; //direktori
		$config['allowed_types']        = 'gif|jpg|png'; // file yang di perbolehkan
		$config['max_size']             = 100; // maksimal ukuran
		$config['max_width']            = 1024; //lebar maksimal
		$config['max_height']           = 768; //tinggi maksimal
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('v_upload', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('v_upload_sukses', $data);
			return $this->upload->data("file_name");
		}
		return "default.jpg";
	}

	public function _deleteImage($id){
		$product = $this->getById($id);
		if ($product->image != "default.jpg") {
			$filename = explode(".", $product->image)[0];
			return array_map('unlink', glob(FCPATH."gambar/$filename.*"));
		}
	}
	
}