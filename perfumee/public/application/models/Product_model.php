<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Product_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }
    public function findAll($condition=[])
    {
        if(sizeof($condition)>0){
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->get('products');
        return $result;
    }
    public function insert($data)
    {
        $insertId = $this->mongo_db->insert('products', $data);
        return $insertId;
    }
}