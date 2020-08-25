<?php
include "../base.php";

$User=new DB('user');
$acc = $User->find(["acc"=>$_GET['acc']]);

if(empty($acc)){
    echo "1";
}else{
    echo "0";
}


?>