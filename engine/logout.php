<?php

$arr = array('status' => 'null');

try{
    session_start();
    session_destroy();
    $arr['status'] =  'success';
}
catch(Exception $e){
    $arr['status'] =  'error';
}

echo json_encode($arr);
?>