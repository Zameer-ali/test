<?php
  $COOKIE=unserialize($_COOKIE['user']);
if(isset($COOKIE['user_id'])){
        setcookie('user',null);
        header('location:index.php?message=Logout Successfull &color=red');die;
        print_r( $COOKIE=unserialize($_COOKIE['user']));
}else{
    header('location:index.php?message=Login first&color=red');die;
}
?>