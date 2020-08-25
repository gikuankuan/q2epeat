<?php
include "../base.php";

$User=new DB('user');

$chk = $User->find(["acc"=>$_GET['acc'],"pw"=>$_GET['pw']]);

if(!empty($chk)){
    echo "1";
    $_SESSION['login']=$_GET['acc'];
}else{
    echo "0";

}

?>