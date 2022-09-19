<?php

require_once('usersession.php');

$type = $_POST['typeId'];
$username = $_POST['userName'];
$password = $_POST['password'];
if($type==1){
    if (empty($username) || empty($password)){}
    
    if(loginAB($username, $password)){
        header('location: abonne1.php');
    }else {
        header('location: loginun.php'); 
    }
}else {
    if (empty($username) || empty($password)){}
    
    if(loginAD($username, $password)){
         header('location: admin2.php');
         
    }else {
        header('location: loginun.php'); 
        
    }


}
