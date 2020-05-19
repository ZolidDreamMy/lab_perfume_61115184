<?php
function getCategoriesNameFromId($id){
    $CI = &get_instance();
    $CI->load->model('categories_model');
    $condition = array(
        'categories_id' => intval($id)
    );
    $result=$CI->categories_model->findOne($condition);
    // $result=$CI->mongo_db->row_array($result);
    return $result[0]['categories_name'];
}
function getProductNameFromId($id){
    $CI = &get_instance();
    $CI->load->model('product_model');
    $condition = array(
        'product_id' => $id
    );
    $result=$CI->product_model->findOne($condition);
    // $result=$CI->mongo_db->row_array($result);
    return $result[0]['product_name'];
}
function getProductPictureFromId($id){
    $CI = &get_instance();
    $CI->load->model('product_model');
    $condition = array(
        'product_id' => $id
    );
    $result=$CI->product_model->findOne($condition);
    // $result=$CI->mongo_db->row_array($result);
    return $result[0]['picture'];
}
function getProductPriceFromId($id){
    $CI = &get_instance();
    $CI->load->model('product_model');
    $condition = array(
        'product_id' => $id
    );
    $result=$CI->product_model->findOne($condition);
    // $result=$CI->mongo_db->row_array($result);
    return $result[0]['buyPrice'];
}

?>
