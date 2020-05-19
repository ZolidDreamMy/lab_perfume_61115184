<?php if (!defined('BASEPATH')) exit('No direct script allowed');

class Cart_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }
    public function findAll($condition = [])
    {
        if (sizeof($condition) > 0) {
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->get('cart');
        return $result;
    }
    public function insert($data)
    {
        $insertId = $this->mongo_db->insert('cart', $data);
        return $insertId;
    }
    public function findAllItem()
    {
        $result = $this->mongo_db->get('cart');
        return $result;
    }
    public function clearCart()
    {
        $this->mongo_db->deleteAll('cart');
    }
    public function clearsomeCart($product_id)
    {
        $this->mongo_db->where('product_id', $product_id);
        $this->mongo_db->delete('cart');
        // $this->mongo_db->deleteAll('cart');
    }

    public function get_form_post()
    {
        return $this->input->post();
    }
}
