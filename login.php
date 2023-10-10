<?php
session_start();
if(isset($_SESSION['Username'])){
    header('Location:profile.php');
}

if(isset($_POST['Login'])){
    $Username= $_POST['Username'];
    $Password= $_POST['Password'];
    $UsernameError="";
    $PasswordError="";
    if($Username == ""){
         $UsernameError = "You must fill username field";
        include_once('index.html'); 
    }else if(strlen($Username) <= 3){
         $UsernameError = "username must more than 3 character...";
        include_once('index.html'); 
    }else if($Password == ""){
         $PasswordError = "You must fill Password field";
        include_once('index.html'); 
    }else if(strlen($Password) <= 8){
         $PasswordError = "password must more than 8 character...";
        include_once('index.html'); 
    }else if(filter_var($Username,FILTER_VALIDATE_EMAIL)){
        $UsernameError = "username must be not email...";
        include_once('index.html');   
    }else if(filter_var($Password,FILTER_VALIDATE_IP)){
         $PasswordError = "password must be not IP...";
        include_once('index.html');   
    }else{
        $session = $_SESSION['Username'] = $Username;
        header('Location:profile.php');
    }
}else{
    $UsernameError="";
    $PasswordError="";
    include_once('index.html');
}
    


?>