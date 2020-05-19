<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->model('categories_model');
        $this->load->model('cart_model');
    }
    public function index()
    {
        $data['cart'] = $this->cart_model->findAll();
        $search = $this->input->get('search');
        $product_name = $this->input->get('product_name');
        $categories_id = $this->input->get('categories_id');
        $condition = [];
        if(!empty($search)){
            if(!empty($product_name)){
                $condition['product_name'] = array('$regex' => $product_name);
            }
            if(!empty($categories_id)){
                $condition['categories_id'] = intval($categories_id);
            }

        }
        $data['categories'] = $this->categories_model->findAll();
        $data['products'] = $this->product_model->findAll($condition);
        $data['product_name'] = $product_name;
        $data['search'] = $search;
        $data['categories_id'] = $categories_id;
        $this->load->view('layout/head', $data);
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
        // $this->load->view('layout/home');
		$this->load->view('search/content');
		$this->load->view('layout/footer');
    }
    
}