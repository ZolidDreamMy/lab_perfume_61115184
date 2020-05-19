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
?>