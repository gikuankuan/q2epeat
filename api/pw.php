<?php
include "../base.php";

$User=new DB('user');

$acc = $User->find(["acc"=>$_GET['acc'],"pw"=>$_GET['pw']]);

if(!empty($acc)){
    echo "1";
    $_SESSION['login']=$acc;
}else{
    echo "0";

}

?>