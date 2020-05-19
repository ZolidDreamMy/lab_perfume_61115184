<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Contact_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }
    public function findAll($condition=[])
    {
        if(sizeof($condition)>0){
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->get('contact');
        return $result;
    }
    public function insert($data)
    {
        $insertId = $this->mongo_db->insert('contact', $data);
        return $insertId;
    }
    public function findAllItem()
    {
        $result = $this->mongo_db->get('contact');
        return $result;
    }
    public function insertEmail($data)
    {
        $insertId = $this->mongo_db->insert('emails', $data);
        return $insertId;
    }
    public function findEmail()
    {
        $result = $this->mongo_db->get('emails');
        return $result;
    }
    public function get_form_post()
    {
        return $this->input->post();
    }
}