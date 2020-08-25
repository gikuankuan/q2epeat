<?php
include "../base.php";

$User =new DB('user');
$mail =$User->find(['mail'=>$_GET['mail']]);

if(!empty($mail)){
    echo $mail['pw'];
}else{
    echo "此信箱查無密碼";
}

?>