<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
    {
	 	parent::__construct();
		 $this->load->model('categories_model');
		 $this->load->model('cart_model');
    }  
	public function index()
	{
		//55
		$data['cart'] = $this->cart_model->findAll();
		$data['categories'] = $this->categories_model->findAll();
		$this->load->view('layout/head');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/menu');
		$this->load->view('home/content');
		$this->load->view('home/ads');
		$this->load->view('home/rec');
		$this->load->view('home/support');
		$this->load->view('layout/footer');
	}
}
