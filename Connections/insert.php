<?php

/**including the connection file and the methods file */
require_once "connection.php";
require_once "../Methods/method.php";

$email = $_POST['email'];
$full_name = $_POST['full_name'];
$user = $_POST['user'];
$secret = $_POST['secret'];


$data = array(
    $email,
    $full_name,
    $user,
    $secret
    );
$obj = new methods();
if($obj->insertData($data)==1) {
    header('location: ../SignUp.php');

}



?>