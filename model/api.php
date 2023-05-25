<?php
    header('Access-Control-Allow-Origin: *');
    //header("Content-Type: application/json");
    function autoload($class){
        require 'entidad/'.$class.'.php';
    }
    spl_autoload_register('autoload');

    $res = new users("pepito","H467", "../db.json");
    $data = (object) ["user"=>"Stiven", "name"=>"Stiven", "pwd"=>3221, "age"=>0];
    echo json_encode($res->postUser($data));
?>