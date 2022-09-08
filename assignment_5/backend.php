<?php
session_start();


if (!isset($_SESSION['authenticated'])) {
    header('location: login_page.php');
    # code...
}
 


$name= $_GET['your_Name'];
$email= $_GET['Your_Email'];
$passwords= $_GET['psw'];

$user=[
    'email'=> $email,
    'name'=> 'Ahmad',
    'age'=> '24',

];


$_SESSION['auth_user']=$user;
$_SESSION['authenticated']=true;

header('location: mainpage.php');