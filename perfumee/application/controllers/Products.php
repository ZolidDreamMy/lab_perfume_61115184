<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
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
        $this->load->view('layout/head',$data);
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
        // $this->load->view('layout/home');
		$this->load->view('products/content');
		$this->load->view('layout/footer');
    }
    public function create()
    {
        $data['categories'] = $this->categories_model->findAll();
        $this->load->view('layout/head');
		// $this->load->view('layout/header');
		$this->load->view('layout/menu');
        // $this->load->view('layout/home');
		$this->load->view('products/create/content',$data);
		$this->load->view('layout/footer');
    }
    public function save()
    {
        $product_id = $this->input->post('product_id');
        $product_name = $this->input->post('product_name');
        $buyPrice = $this->input->post('buyPrice');
        $categories_id = $this->input->post('categories_id');
        $quantityInStock = $this->input->post('quantityInStock');
        $description = $this->input->post('description');
        $picture = $this->input->post('picture');

        $data = array(
            "product_id" => $product_id,
            "product_name" => $product_name,
            "buyPrice" => intval($buyPrice),
            "categories_id" => intval($categories_id),
            "picture" => $picture
        );
        // print_r($data);
        // exit();
        $id = $this->product_model->insert($data);
        if(!empty($id)){
            $this->session->set_flashdata('success-msg', 'Product Added');
            redirect('products');
        }else{
            echo "error";
        }
    }
    public function addToCart()
    {
        $product_id = $this->input->post('product_id');
        $quantity = $this->input->post('quantity');
        $buyPrice = $this->input->post('buyPrice');
        $data = array(
            "product_id" => $product_id,
            "quantity" => intval($quantity),
            "buyPrice" => intval($buyPrice)
        );
        // print_r($data);
        // exit();
        $id = $this->cart_model->insert($data);
        if(!empty($id)){
            $this->session->set_flashdata('success-msg', 'Product Added');
            redirect('cart');
        }else{
            echo "error";
        }
    }
}