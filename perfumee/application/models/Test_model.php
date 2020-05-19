<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Test_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $test = $this->mongo_db->get('customer');
        print_r($test);
    }
    
}