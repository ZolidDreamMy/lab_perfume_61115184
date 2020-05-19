<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productdetail extends CI_Controller {
	function __construct()
    {
		parent::__construct();
		$this->load->model('categories_model');
		$this->load->model('product_model');
		$this->load->model('cart_model');
    }  
	public function index($productId)
	{
		$data['cart'] = $this->cart_model->findAll();
		$data['categories'] = $this->categories_model->findAll();
		$condition = array(
			'product_id' => $productId
		);
		$data['products'] = $this->product_model->findAll($condition);
		// if($categoriesId=="all"){
		// 	$data['products'] = $this->product_model->findAllItem();
		// }else{
		// 	$condition = array(
		// 		'categories_id' => intval($categoriesId)
		// 	);
		// 	$data['products'] = $this->product_model->findAll($condition);
		// }
		// print_r($data['products']);
		// exit();
		$this->load->view('layout/head', $data);
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		// $this->load->view('layout/home');
		$this->load->view('productdetail/content');
		$this->load->view('home/rec');
		$this->load->view('layout/support');
		$this->load->view('layout/footer');
	
	}
}
