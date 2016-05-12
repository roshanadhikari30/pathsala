<?php
/**
 * Created by PhpStorm.
 * User: roshan
 * Date: 4/15/16
 * Time: 3:28 PM
 */
function data_setting_value($dbc,$id){
    $query = "SELECT * FROM settings WHERE id= '$id' ";
    $res = mysqli_query($dbc,$query);

    $data = mysqli_fetch_assoc($res);
    return $data['value'];


}

function data_page($dbc,$id){
    $query = "SELECT * FROM pages WHERE id=$id";
    $res = mysqli_query($dbc,$query);

    $data = mysqli_fetch_assoc($res);
    $data['body_nohtml'] = strip_tags($data['body']);
    if($data['body']==$data['body_nohtml']){
        $data['body_formatted'] = '<p>'.$data['body'].'</p>';

    }else
        $data['body_formatted']=$data['body'];
    

    return $data;


}




?>